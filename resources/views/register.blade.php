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
        <h2 class="text-2xl font-semibold mb-6">Register</h2>


        @if($errors->any())
            <div class="mb-4">
                <ul class="text-red-500">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('registerUser') }}" enctype="multipart/form-data">
            @csrf


            <div class="mb-4">
                <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter  Name"
                       class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>


            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Email"
                       class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-600 text-sm font-medium mb-2">Phone</label>
                <input type="phone" id="phone" name="phone" placeholder="Enter Email"
                       class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder=" Enter Password"
                       class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-600 text-sm font-medium mb-2">Confirm
                    Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                       placeholder="Confirm Password"
                       class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="user_image_path" class="block text-gray-600 text-sm font-medium mb-2">Profile Image</label>
                <input type="file" id="user_image_path" name="user_image_path" accept="image/*"
                       class="w-full  rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit"
                    class="flex items-center justify-center bg-primary-or text-white py-2 px-4 rounded-md hover:bg-primary-hor focus:outline-none focus:ring focus:border-blue-300 block w-full">
                Register

            </button>

        </form>
    </div>

@include('footer')

