@component('mail::message')
# support ticket
<h3>paypooler supprot team</h3>
<hr>
<br>
<p>you have a new reply to your ticket</p>
<br>
<p>
@isset($case){{ $case->comment }}@endisset
</p>
@isset($user)<p>answer to : {{ $user->name }}</p>@endisset

@isset($case)<p>title : {{ $case->ticket->title }}</p>@endisset
@isset($case)<p>ticket id : {{ $case->ticket->description }}</p>@endisset
<br>
<p>you can see your ticket in linke below : </p>
@isset($case)
@component('mail::button', ['url' => route('user.ticket.showByTicketId', $case->ticket->ticket_id)])
    your ticket
@endcomponent
@endisset

Thanks,<br>
{{ config('app.name') }}
@endcomponent
