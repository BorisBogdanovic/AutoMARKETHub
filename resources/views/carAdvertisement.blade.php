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
    <form method="POST" action="{{ route('CreateCarAdvertisement') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="brand_id" class="block text-gray-600 text-sm font-medium mb-2">Brand</label>
            <select name="brand_id"
                    class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" >{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-600 text-sm font-medium mb-2">Price</label>
            <input type="text" id="price" name="price" placeholder="Enter Price"
                   class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="fuel_id" class="block text-gray-600 text-sm font-medium mb-2">Fuel</label>
            <select name="fuel_id"
                    class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                @foreach($fuels as $fuel)
                    <option value="{{ $fuel->id }}" >{{ $fuel->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="year" class="block text-gray-600 text-sm font-medium mb-2">Year</label>
            <input type="text" id="year" name="year" placeholder="Enter Year"
                   class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="car_bodies_id" class="block text-gray-600 text-sm font-medium mb-2">Car Bodies</label>
            <select name="car_bodies_id"
                    class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                @foreach($CarBodies as $CarBody)
                    <option value="{{ $CarBody->id }}" >{{ $CarBody->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="car_image_path" class="block text-gray-600 text-sm font-medium mb-2">Car Image</label>
            <input type="file" id="car_image_path" name="car_image_path" accept="image/*"
                   class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
        </div>


        <button type="submit"
                class="flex items-center justify-center bg-primary-or text-white py-2 px-4 rounded-md hover:bg-primary-hor focus:outline-none focus:ring focus:border-blue-300 block w-full">
            Create Car Advertisement
        </button>
    </form>
</div>

@include('footer')
