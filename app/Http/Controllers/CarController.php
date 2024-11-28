<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarAdvertisementRequest;
use App\Models\Car;
use App\Models\CarBody;
use App\Models\CarBrand;
use App\Models\Fuel;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function carAdvertisementView(){




        $authUser = auth()->user();
        $brands = CarBrand::all();
        $fuels = Fuel::all();
        $CarBodies=CarBody::all();


        return view('carAdvertisement',compact(['authUser','brands','fuels','CarBodies']));
    }
    public function CreateCarAdvertisement(Request $request){

        $imagePath = $request->file('car_image_path')->store('car_images', 'public');
        Car::create([
            'user_id'=>Auth()->user()->id,
            'brand_id'=>$request->brand_id,
            'price'=>$request->price,
            'fuel_id'=>$request->fuel_id,
            'year'=>$request->year,
            'car_bodies_id'=>$request->car_bodies_id,
            'car_image_path'=>$imagePath,

        ]);

        return redirect(route('homeView'));

    }

    public function approveAd(Request $request, Car $car) {

        $car->update(['approved' => 1]);
        return redirect()->route('AdminDashboardView');
    }

    public function deleteAd(Request $request, Car $car){
        $car->delete();
        return redirect()->route('AdminDashboardView');
    }


//        public function showSingleCar( Car $car)
//        {
//            return view('livewire.single-car',compact(['car' => $car]));
//        }



}
