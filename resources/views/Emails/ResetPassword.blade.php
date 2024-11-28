<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">
<div class="max-w-2xl mx-auto p-4 bg-white rounded-md shadow-md">
    <div class="bg-primary-or text-white p-4">
        <h2 class="text-2xl font-bold">Password Reset Link</h2>
    </div>

    <div class="mt-4">
        <p class="text-lg">Hello User,</p>
        <p class="mt-2">You have requested a password reset. Please click the link below to reset your password:</p>

        <a href="{{$url}}" class="text-blue-500 hover:underline">{{$url}}</a>
    </div>

    <div class="mt-8 text-gray-500 text-sm">
        <p>This is an automated notification. Please do not reply to this email.</p>
    </div>
</div>
</body>
</html>
