<?php

namespace Database\Seeders;

use App\Models\CarBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarBrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list=['BMW','Mercedes-Benz','Porsche','Audi'];

        foreach ($list as $a){
            CarBrand::create([
                'name'=>$a
            ]);
        }
    }
}
