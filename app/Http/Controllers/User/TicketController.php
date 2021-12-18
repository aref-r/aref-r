<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Http\Requests\UpdateticketRequest;
use App\Mail\PaypoolerMails;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\TicketRequest;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Auth::user()->tickets()->get();
 
        return view('panel.user.tickets.index')->with(['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.user.tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreticketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketRequest $request)
    {

        $ticket = new Ticket([
            'title'     => $request->input('title'),
            'user_id'   => Auth::user()->id,
            'ticket_id' => strtoupper(rand(1111111111, 9999999999)),
            'priority'  => $request->input('priority'),
            'description'   => $request->input('description'),
            'status'    => "Open",
        ]);

        $ticket->save();

        Mail::to(Auth::user()->email)->send(new PaypoolerMails('emails.ticket_info', "[Ticket ID: $ticket->ticket_id] $ticket->title", Auth::user(), $ticket));

        return redirect()->back()->with('success','your ticket was  sent successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
        $ticket = Auth::user()->tickets()->where('ticket_id', $ticket->ticket_id)->firstOrFail();

        $comments = $ticket->comments;

        foreach (Auth::user()->unreadnotifications as $notification) {
            if ($notification->data['ticket_id'] == $ticket->id) {
                $notification->markAsRead();
            }
        }
        return view('panel.user.tickets.show')->with(['ticket' => $ticket, 'comments' => $comments]);
    }


    public function showByTicket_Id($ticket_id)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $comments = $ticket->comments;

        return view('panel.user.tickets.show')->with(['ticket' => $ticket, 'comments' => $comments]);;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateticketRequest  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateticketRequest $request, ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {
        //
    }



}
