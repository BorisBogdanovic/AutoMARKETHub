<?php

namespace Database\Seeders;

use App\Models\Fuel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list=['Diesel','Petrol'];

        foreach ($list as $a){
            Fuel::create([
                'name'=>$a
            ]);
        }
    }
}
