@component('mail::message')
# support ticket

<h3>paypooler supprot team</h3><hr>
<br>
<p>your ticket was sent</p>
<br>
<p>answer to : {{ $user->name }}</p>
<p>thanks you @isset($user){{ ucfirst($user->name) }}@endisset for contacting us,
a ticket is open with these detail:</p>
<hr>
<p>title : @isset($case){{ $case->title }}@endisset</p>
<p><span> priority: @isset($case){{ $case->priority }}@endisset </span> <span> @isset($case){{ $case->status }}@endisset</span></p>
<p>title : @isset($case){{ $case->description }}@endisset</p>

<p>you can see your ticket in linke below : </p>
@component('mail::button', ['url' => route("user.ticket.showByTicketId",$case->ticket_id)])
your ticket
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
