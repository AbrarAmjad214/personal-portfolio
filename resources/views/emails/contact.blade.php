<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New project enquiry</title>
</head>
<body style="font-family: Arial, sans-serif; color: #1f1d24; line-height: 1.5;">
    <h2 style="margin: 0 0 16px;">New project enquiry</h2>
    <table cellpadding="6" style="border-collapse: collapse;">
        <tr><td><strong>Name</strong></td><td>{{ $data['name'] }}</td></tr>
        <tr><td><strong>Email</strong></td><td><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></td></tr>
        <tr><td><strong>Phone</strong></td><td>{{ ($data['phone'] ?? null) ?: '—' }}</td></tr>
        <tr><td><strong>Service</strong></td><td>{{ $data['service'] }}</td></tr>
        <tr><td><strong>Budget</strong></td><td>{{ ($data['budget'] ?? null) ?: 'Not specified' }}</td></tr>
    </table>
    <h3 style="margin: 24px 0 8px;">Message</h3>
    <p style="white-space: pre-line;">{{ $data['message'] }}</p>
    <p style="color: #6b6777; font-size: 13px;">Reply to this email to respond directly to {{ $data['name'] }}.</p>
</body>
</html>
