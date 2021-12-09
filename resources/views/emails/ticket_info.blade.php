<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>تیم پشتیبانی سایت</title>
</head>
<body>
    <p>
        سپاس از شما {{ ucfirst($user->name) }} برای ارتیاط با تیم پشتیبانی ما.
         یک تیکت برای شما باز شد.
          پاسخ تیکت نیز از طریق ایمیل به شما اطلاع داده خواهد شد. 
          جزئیات تیکت شما به شرح زیر است:
    </p>

    <p>عنوان: {{ $ticket->title }}</p>
    <p>اولویت: {{ $ticket->priority }}</p>
    <p>وضعیت: {{ $ticket->status }}</p>

    <p>
        میتوانید تیکت را در این لینک ببینید {{ route('user.ticket.show',$ticket->ticket_id) }}
    </p>

</body>
</html>