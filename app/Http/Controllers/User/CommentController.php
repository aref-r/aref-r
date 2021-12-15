<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Mail\PaypoolerMails;
use Illuminate\Support\Facades\Mail;
use App\Notifications\TicketComment;
use Carbon\Carbon;

class CommentController extends Controller
{
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'comment'   => 'required'
        ]);

        $comment = new Comment([
            'ticket_id' => $request->ticket_id,
            'user_id'    => Auth::user()->id,
            'comment'    => $request->comment,
        ]);
        $comment->save();
        
        //fresh ticket timestamp
        $comment->ticket->updated_at = Carbon::now();;
        $comment->ticket->save();

        // open ticket if ticket is close
        if ($comment->ticket->status == 'Closed'){
            $comment->ticket->status = 'Open';
            $comment->ticket->save();
        }
        // if the user commenting is not the ticket owner
        if ($comment->ticket->user->id !== Auth::user()->id) {
            // send mail 
            $ticket_id = $comment->ticket->ticket_id;
            $tecket_title = $comment->ticket->title;
            Mail::to($comment->ticket->user->email)->send(new PaypoolerMails('emails.ticket_comments', "RE: $tecket_title (Ticket ID: $ticket_id )", $comment->ticket->user, $comment));
            //send notification
            $comment->ticket->user->notify(new TicketComment($comment->ticket));
        }


        return redirect()->back()->with("success", "Your comment has be submitted.");
    }
}
