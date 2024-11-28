<?php

namespace Database\Seeders;

use App\Models\CarBody;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleBodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = ['Sedan', 'Station Wagon', 'Coupe', 'Convertible', 'SUV'];


        foreach ($list as $a){
            CarBody::create([
                'name'=>$a
            ]);
        }
    }
}
