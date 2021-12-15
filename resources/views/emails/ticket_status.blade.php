@component('mail::message')
# support ticket status

<p>
    {{ $case->title }}
</p>
<p>Hello {{ ucfirst($case->user->name) }}</p>

<p>your ticket is closed</p>
<p>ticket id : {{ $case->ticket_id }}</p>
<p>status : {{ $case->status }}</p>
<br>
<p>you can see your ticket in linke below : </p>
@component('mail::button', ['url' => route('user.ticket.showByTicketId',$case->ticket_id) ])
your ticket
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
