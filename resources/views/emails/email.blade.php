<!-- resources/views/emails/job_application.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Job Application</title>
</head>
<body>
    <h1>Job Application for {{ $job->title }}</h1>
    <p>Dear {{ $job->company }},</p>
    <p>{{ $user->name }} has applied for the {{ $job->title }} position. Please find their resume attached.</p>
    <p>Best regards,<br>{{ config('app.name') }}</p>
</body>
</html>