<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','brand_id','price','fuel_id','year','car_bodies_id','car_image_path','approved'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function CarBody(){
        return $this->belongsTo(CarBody::class, 'car_bodies_id', 'id');
    }

    public function fuel(){
        return $this->belongsTo(Fuel::class, 'fuel_id', 'id');
    }

    public function brand(){
        return $this->belongsTo(CarBrand::class, 'brand_id', 'id');
    }

}
