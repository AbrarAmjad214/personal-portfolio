<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <!-- resources/views/emails/contactus.blade.php -->
        <h3>New Contact Form Submission</h3>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
        <p><strong>Message:</strong> {{ $data['message'] }}</p>
    </body>
</html>