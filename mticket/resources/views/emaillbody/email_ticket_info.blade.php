<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suppor Ticket Information</title>
</head>
<body>
    <h4>{{ ucfirst($ticket->name) }}</h4>
    <p>
        Thank you for contacting our support team through online supoort platform.
    </p>
    <p>Please find the details of your support ticket.</p>

    <p>Ticket ID: {{ $ticket->ticket_id }}</p>
    <p>Status: {{ $ticket->status }}</p>


    <p>
        Use given ticket id to view your ticket.
    </p>

    <p>Our team will be happy to serve you always. You will be notified soon with a response via email.</p>
    <p>Thank you & have a pleasant day</p>
</body>
</html>