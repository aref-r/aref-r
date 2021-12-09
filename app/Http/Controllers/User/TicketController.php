<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Http\Requests\StoreticketRequest;
use App\Http\Requests\UpdateticketRequest;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::orderBy('id', 'DESC')->paginate(10);

        return view('panel.admin.tickets.index', compact('tickets'));
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
    public function store(StoreticketRequest $request)
    {
        $this->validate($request, [
            'title'     => 'required',
            'priority'  => 'required',
            'description'   => 'required'
        ]);

        $ticket = new Ticket([
            'title'     => $request->input('title'),
            'user_id'   => Auth::user()->id,
            'ticket_id' => strtoupper(rand(1111111111, 9999999999)),
            'priority'  => $request->input('priority'),
            'description'   => $request->input('description'),
            'status'    => "Open",
        ]);

        $ticket->save();

        // $mailer->sendTicketInformation(Auth::user(), $ticket);

        return redirect()->back()->with("status", "تیکت شما با شناسه :$ticket->ticket_id با موفقیت ارسال شد");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
        $ticket = Ticket::where('ticket_id', $ticket->ticket_id)->firstOrFail();

        $comments = $ticket->comments;

        return view('panel.user.tickets.show', compact('ticket', 'comments'));
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

    public function userTickets()
    {
        $tickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);

        return view('panel.user.tickets.user_tickets', compact('tickets'));
    }

    public function close($ticket_id)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $ticket->status = 'Closed';

        $ticket->save();

        $ticketOwner = $ticket->user;

        // $mailer->sendTicketStatusNotification($ticketOwner, $ticket);

        return redirect()->back()->with("status", "The ticket has been closed.");
    }
    public function tempDashboard()
    {
        return view('panel.user.dashboard');
    }
    public function tempHistory()
    {
        return view('panel.user.history');
    }
    public function tempAccount()
    {
        return view('panel.user.account');
    }
}
