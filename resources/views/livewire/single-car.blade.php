





<div  class="mb-8">
    <livewire:Header/>
<div class="container mx-auto max-w-6xl mt-12">





        <div class="mb-8">
            <span class="text-xl font-semibold mb-2 text-primary-or">Car Owner:</span><span class="text-xl font-semibold mb-2 ml-2">{{ $car->user->name }}</span>
            <div>
                <span class="text-xl font-semibold mb-2 text-primary-or">Contact Number:</span><span class="text-xl font-semibold mb-2 ml-2"> {{ $car->user->phone }}</span>
            </div>
        </div>




        <div class="flex ">
            <div class="w-1/2">
                <img src="{{ asset('storage/' . $car->car_image_path) }}" alt="{{ $car->brand->name }}" class="object-cover mb-4 rounded-sm w-full">
            </div>
            <div class=" w-1/2">
                <table class="table-auto border border-gray-300 ml-20">
                    <tbody>
                    <tr>
                        <td class="border-r border-b text-gray-800 text-lg font-bold px-4 py-2">Brand:</td>
                        <td class="border-b text-gray-800 text-lg px-4 py-2">{{ $car->brand->name }}</td>
                    </tr>
                    <tr>
                        <td class="border-r border-b text-gray-800 text-lg font-bold px-4 py-2">Price:</td>
                        <td class="border-b text-gray-800 text-lg px-4 py-2">{{ $car->price }}$</td>
                    </tr>
                    <tr>
                        <td class="border-r border-b text-gray-800 text-lg font-bold px-4 py-2">Year:</td>
                        <td class="border-b text-gray-800 text-lg px-4 py-2">{{ $car->year }}</td>
                    </tr>
                    <tr>
                        <td class="border-r border-b text-gray-800 text-lg font-bold px-4 py-2">Fuel:</td>
                        <td class="border-b text-gray-800 text-lg px-4 py-2">{{ $car->fuel->name }}</td>
                    </tr>
                    <tr>
                        <td class="border-r border-b text-gray-800 text-lg font-bold px-4 py-2">Body:</td>
                        <td class="border-b text-gray-800 text-lg px-4 py-2">{{ $car->carBody->name }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @if(Auth::check() && Auth::user()->id !== $car->user_id)
            <div class="mt-12">
                <p class="text-gray-600 text-lg mb-4">Connect with the car owner and inquire about the vehicle by sending a message. Feel free to ask any questions or discuss details before making a decision.</p>
                <x-primary-button wire:click="message('{{$car->user_id}}')">
                    Message Car Owner
                </x-primary-button>
            </div>
        @elseif(Auth::check() && Auth::user()->id == $car->user_id)
            <div class="mt-12">
                <p class="text-gray-600 text-lg mb-4">You are the owner of this car ad.</p>
                <a href="#" class="inline-block text-white mt-2 bg-primary-or px-3 py-1 rounded-md hover:bg-primary-hor font-bold">Edit Ad</a>
            </div>
        @endif
    </div>

</div>


