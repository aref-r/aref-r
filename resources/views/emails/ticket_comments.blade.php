<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>تیکت پشتیبانی</title>
</head>
<body>
    <p>
        {{ $comment->comment }}
    </p>

    ---
    <p>پاسخ به: {{ $user->name }}</p>

    <p>عنوان: {{ $ticket->title }}</p>
    <p>شناسه: {{ $ticket->ticket_id }}</p>
    <p>وضعیت: {{ $ticket->status }}</p>

    <p>
        میتوانید تیکت را در این لینک مشاهده کنید {{ route('user.ticket.show',$ticket->ticket_id) }}
    </p>

</body>
</html>