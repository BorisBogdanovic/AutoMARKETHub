<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

@include('header')
<div class="container mx-auto max-w-6xl mb-12">


    <div class="container mx-auto mt-8">


        <h2 class="text-3xl font-bold mb-3">Not approved ads:</h2>



        <table class="min-w-full bg-white border border-gray-300 rounded shadow-md">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b border-r">Ad Creator</th>
                <th class="py-2 px-4 border-b border-r">Brand</th>
                <th class="py-2 px-4 border-b border-r">Price</th>
                <th class="py-2 px-4 border-b border-r">Fuel</th>
                <th class="py-2 px-4 border-b border-r">Year</th>
                <th class="py-2 px-4 border-b border-r">Body</th>
                <th class="py-2 px-4 border-b border-r">Image</th>
                <th class="py-2 px-4 border-b">Approved</th>
            </tr>
            </thead>
            <tbody>
            @forelse($cars as $car)
                <tr>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $car->user->name}}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $car->brand->name }}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $car->price }}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $car->fuel->name }}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $car->year }}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $car->carBody->name }}</td>
                    <td class="py-2 px-4 border-b border-r flex items-center justify-center "><img
                            src="{{ asset('storage/' . $car->car_image_path) }}" alt="{{ $car->brand->name }}"
                            class="w-20 h-20 object-cover"></td>
                    <td class="py-2 px-4 border-b border-r ">
                        <div class="flex justify-center space-x-4">
                            <form action="{{ route('approveAd', $car->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded">Yes</button>
                            </form>
                            <form action="{{ route('deleteAd', $car->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">No</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="py-2 px-4 text-center">No results</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <h2 class="text-3xl font-bold mb-3 mt-8">Approved ads:</h2>


        <table class="min-w-full bg-white border border-gray-300 rounded shadow-md">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b border-r">Ad Creator</th>
                <th class="py-2 px-4 border-b border-r">Brand</th>
                <th class="py-2 px-4 border-b border-r">Price</th>
                <th class="py-2 px-4 border-b border-r">Fuel</th>
                <th class="py-2 px-4 border-b border-r">Year</th>
                <th class="py-2 px-4 border-b border-r">Body</th>
                <th class="py-2 px-4 border-b border-r">Image</th>
                <th class="py-2 px-4 border-b">Delete Ad</th>
            </tr>
            </thead>
            <tbody>
            @forelse($apCars as $apCar)
                <tr>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $apCar->user->name}}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $apCar->brand->name }}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $apCar->price }}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $apCar->fuel->name }}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $apCar->year }}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $apCar->carBody->name }}</td>
                    <td class="py-2 px-4 border-b border-r flex items-center justify-center "><img
                            src="{{ asset('storage/' . $apCar->car_image_path) }}" alt="{{ $apCar->brand->name }}"
                            class="w-20 h-20 object-cover"></td>
                    <td class="py-2 px-4 border-b border-r ">
                        <div class="flex justify-center space-x-4">

                            <form action="{{ route('deleteAd', $apCar->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="py-2 px-4 text-center">No results</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mb-3 mt-8 flex align-center justify-between">
            <h2 class="text-3xl font-bold ">App users:</h2>
            <div class="flex items-center">
                <form action="" method="GET">
                    <input type="text" name="search" placeholder="Search by name..." class="border p-2 rounded-md">
                    <button type="submit" class="ml-2 bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
                </form>
            </div>
        </div>


        <table class="min-w-full bg-white border border-gray-300 rounded shadow-md">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b border-r">Name</th>
                <th class="py-2 px-4 border-b border-r">Email</th>
                <th class="py-2 px-4 border-b border-r">Phone</th>
                <th class="py-2 px-4 border-b border-r">Account created</th>
                <th class="py-2 px-4 border-b border-r">Delete User</th>

            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $user->name }}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $user->email }}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $user->phone }}</td>
                    <td class="py-2 px-4 border-b border-r text-center">{{ $user->created_at->format('d/m/y') }}</td>

                    <td class="py-2 px-4 border-b border-r ">
                        <div class="flex justify-center space-x-4">
                            <form action="{{ route('deleteUser', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-green-500 text-white py-1 px-3 rounded">Delete</button>
                            </form>

                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="py-2 px-4 text-center">No results</td>
                </tr>
                @endforelse
            </tbody>
        </table>


    </div>


@include('footer')
