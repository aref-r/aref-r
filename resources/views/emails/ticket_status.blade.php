<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>وضعیت تیکت پشتیبانی</title>
</head>
<body>
    <p>
        سلام {{ ucfirst($ticketOwner->name) }},
    </p>
    <p>
        تیکت ارسالی شما به شناسه#{{ $ticket->ticket_id }} حل و بسته شده است.
    </p>
</body>
</html>