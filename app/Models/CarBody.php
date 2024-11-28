<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBody extends Model
{
    use HasFactory;

    public $timestamps= false;

    protected $fillable=['name'];

    public function car()
    {
        return $this->hasMany(Car::class, 'car_bodies_id','id');
    }
}
