<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Car;
use App\Models\CarBody;
use App\Models\CarBrand;
use App\Models\Fuel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function homeView(Request $request)
    {

        $authUser=Auth::user();
        $carBodies = CarBody::all();
        $brands = CarBrand::all();
        $fuels = Fuel::all();

        $selectedBrandId = $request->input('brand_id');
        $maxPrice = $request->input('max_price');
        $selectedFuelId = $request->input('fuel_id');
        $selectedCarBodesId = $request->input('car_bodies_id');
        $minYear = $request->input('year_min');
        $maxYear = $request->input('year_max');

        $query = Car::where('approved', true);

        if ($maxYear) {
            $query->where('year', '<=', $maxYear);
        }

        if ($minYear) {
            $query->where('year', '>=', $minYear);
        }
        if ($selectedCarBodesId) {
            $query->where('car_bodies_id', $selectedCarBodesId);
        }
        if ($selectedFuelId) {
            $query->where('fuel_id', $selectedFuelId);
        }

        if ($selectedBrandId) {
            $query->where('brand_id', $selectedBrandId);
        }

        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        }


        $cars = $query->paginate(9);

        return view('home', compact(['authUser','maxYear', 'minYear', 'selectedCarBodesId', 'maxPrice', 'cars', 'brands', 'fuels', 'carBodies', 'selectedBrandId', 'selectedFuelId']));
    }

    public function loginView()
    {
        return view('login');
    }


    public function registerView()
    {
        return view('register');
    }

    public function settingsView()
    {
        return view('settings');
    }

    public function myAdsView()
    {
        return view('MyAd');
    }

    public function AdminDashboardView(Request $request)
    {
        $searchQuery = $request->input('search');


        $usersQuery = User::where('is_admin', 0);

        if ($searchQuery) {
            $usersQuery->where('name', 'like', '%' . $searchQuery . '%');
        }

        $cars = Car::where('approved', 0)->get();

        $users = $usersQuery->orderBy('name', 'asc')->get();


        $apCars = Car::where('approved', 1)->get();




        return view('adminDashboard', compact(['cars', 'apCars', 'users']));
    }
}
