<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

@include('header')

<div class="container mx-auto max-w-6xl mt-6 ">
    @auth
        <div>
            <a href="#">
                <div class="list-none flex space-x-4 flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-white">
                        <img src="{{ asset('storage/' . $authUser->user_image_path) }}"
                             class="w-full h-full object-cover" alt="Profile Picture">
                    </div>
                    <div class="text-black">
                        <strong>{{ $authUser->name }} </strong>
                    </div>
                </div>
            </a>
        </div>
    @endauth

    <form class="pt-6 pb-8 px-6 bg-primary-og border rounded-s, mb-6 border border-solid border-primary-or" method="GET"
          action="{{route('homeView')}}">
        @csrf

        <h2 class="text-3xl font-bold mb-3">Ad filtering:</h2>

        <a href="{{ route('homeView') }}"
           class="btn btn-warning inline-block text-white mt-2 bg-primary-or px-3 py-1 rounded-md hover:bg-primary-hor font-bold mb-3">Reset
            Filter</a>


        <div class="grid grid-cols-3 gap-4">
            <div class="w-full mb-4">
                <label for="brand_id" class="block text-sm font-medium text-gray-600">Brands:</label>
                <select name="brand_id"
                        class="mt-1 py-2 px-3 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="">All</option>
                    @foreach($brands as $brand)
                        <option
                            value="{{ $brand->id }}" @if($brand->id == $selectedBrandId) selected @endif>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="w-full mb-4">
                <label for="max_price" class="block text-sm font-medium text-gray-600">Price:</label>
                <input type="text" placeholder="Price up to..." name="max_price"
                       value="{{ old('max_price', $maxPrice) }}"
                       class="mt-1 py-2 px-3 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>


            <div class="w-full mb-4">
                <label for="Fuel_id" class="block text-sm font-medium text-gray-600">Fuel:</label>
                <select name="fuel_id"
                        class="mt-1 py-2 px-3 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="">All</option>
                    @foreach($fuels as $fuel)
                        <option value="{{ $fuel->id }}" {{ $selectedFuelId == $fuel->id ? 'selected' : '' }}>
                            {{ $fuel->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-4">
            <div class="w-full mb-4">
                <label for="year_min" class="block text-sm font-medium text-gray-600">Year min:</label>
                <input type="text" placeholder="Year min..." name="year_min" value="{{ old('year_min', $minYear) }}"
                       class="mt-1 py-2 px-3 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div class="w-full mb-4">
                <label for="year_max" class="block text-sm font-medium text-gray-600">Year max:</label>
                <input type="text" placeholder="Year max..." name="year_max" value="{{ old('year_min', $maxYear) }}"
                       class="mt-1 py-2 px-3 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div class="w-full mb-4">
                <label for="car_bodies_id" class="block text-sm font-medium text-gray-600">Car body:</label>
                <select name="car_bodies_id"
                        class="mt-1 py-2 px-3 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="">All</option>
                    @foreach($carBodies as $carBody)
                        <option
                            value="{{ $carBody->id }}" {{ $selectedCarBodesId == $carBody->id ? 'selected' : '' }}>
                            {{ $carBody->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit"
                    class=" bg-primary-or text-white  rounded-md hover:bg-primary-hor focus:outline-none focus:ring w-full mt-6 h-9 font-bold">
                Search

            </button>
        </div>


    </form>
</div>


<div class="container mx-auto max-w-6xl mb-6">


    <div class="container mx-auto max-w-6xl bg-white p-6">

        <h2 class="mb-6 text-3xl font-bold">Advertisement:</h2>
        @if(count($cars) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($cars as $car)
                    <div
                        class="car-item-wrapper bg-primary-og rounded-lg p-4 shadow-lg border border-solid border-gray-300">
                        <img src="{{ asset('storage/' . $car->car_image_path) }}" alt="{{ $car->brand->name }}"
                             class="w-full h-48 object-cover mb-4 rounded-sm">
                        <h4 class="text-xl font-bold">{{ $car->brand->name }}</h4>
                        <p class="text-gray-600">Price: {{ $car->price }}$</p>
                        <p class="text-gray-600">Year: {{ $car->year }}</p>
                        <a href="{{ route('livewire.single-car', ['id' => $car->id]) }}"
                           class="btn btn-warning inline-block text-white mt-2 bg-primary-or px-3 py-1 rounded-md hover:bg-primary-hor font-bold">Read
                            more</a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-lg text-gray-600 font-bold mt-6">No results</p>
        @endif
        @if(count($cars) > 9)
            <div class="mt-4">
                {{ $cars->links('pagination::tailwind') }}
            </div>
        @endif


    </div>


@include('footer')
