<?php

namespace Database\Factories;

use App\Models\CarBody;
use App\Models\CarBrand;
use App\Models\Fuel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
            'user_id' => User::inRandomOrder()->whereNot('is_admin', 1)->first()->id,
            'brand_id' => CarBrand::inRandomOrder()->first()->id,
            'price' => $this->faker->randomElement([10000, 20000, 30000, 40000, 50000, 100000]),
            'fuel_id' => Fuel::inRandomOrder()->first()->id,
            'year' => $this->faker->numberBetween(1995, 2024),
            'car_bodies_id' => CarBody::inRandomOrder()->first()->id,
            'car_image_path' => function () {
                // Generišite sliku koristeći Faker
                $imageUrl = $this->faker->imageUrl();

                // Dobijte putanju do storage direktorijuma
                $storagePath = storage_path('app/public/car_images/');

                // Generišite ime fajla (možete koristiti neki jedinstveni identifikator)
                $filename = uniqid('car_image_') . '.jpg';

                // Kopirajte sliku u storage
                Storage::put("car_images/{$filename}", file_get_contents($imageUrl));

                // Vratite putanju do sačuvane slike bez "public" prefiksa
                return "car_images/{$filename}";
            },
            'approved' => $this->faker->boolean(80),

        ];
    }

}
