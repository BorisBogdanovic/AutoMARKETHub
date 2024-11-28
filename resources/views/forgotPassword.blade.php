<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
<div class="flex items-center justify-center flex-grow">
<div class="bg-white p-8 rounded shadow-lg w-96 border border-primary-or">
    <h1 class=" mb-6 text-center text-3xl font-black text-primary-or">
        AutoMarketHub
    </h1>

    <h2 class="text-2xl font-semibold mb-6">Password Reset</h2>

    <form method="POST" action=" {{ route('forgot-password') }}">

        @csrf

        @if($errors->any())
            <div class="mb-4">
                <ul class="text-red-500">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-4">
            <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email</label>
            <input type="email" id="email" name="email"
                   class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                   placeholder="Enter Email">
        </div>

        <button type="submit"
                class="flex items-center justify-center bg-primary-or text-white py-2 px-4 rounded-md hover:bg-primary-hor focus:outline-none focus:ring focus:border-blue-300 block w-full">
            Send reset link

        </button>

    </form>
</div>

@include('footer')
