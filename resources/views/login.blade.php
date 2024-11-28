<!doctype html>
<html>
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
        <h2 class="text-2xl text-gray-600 font-semibold mb-6">Login</h2>
        @if ($errors->any())
            <div class="mb-4 text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email</label>
                <input type="text" id="username" name="email" placeholder="Email..." value=""
                       class="border border-gray-300 p-2 w-full rounded">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" placeholder="Password..." value="" name="password"
                       class="border border-gray-300 p-2 w-full rounded">
            </div>
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="remember" name="remember" class="text-blue-500">
                <label for="remember" class="text-gray-600 text-sm ml-2">Remember me</label>
            </div>

            <button type="submit"
                    class="flex items-center justify-center bg-primary-or text-white py-2 px-4 rounded-md hover:bg-primary-hor focus:outline-none focus:ring focus:border-blue-300 block w-full">
                Log in

            </button>
            <div class="mt-2">

                <a href=" {{ route('forgot-password-view') }}" class="text-blue-500 text-sm hover:underline">Forgot
                    Password?</a>


            </div>
            <div class="mt-4 ">
                <p class="text-or text-sm">Don't have an account? <a href="/register"
                                                                     class="text-blue-500 hover:underline">Create
                        Account</a></p>
            </div>
        </form>
    </div>

@include('footer')

