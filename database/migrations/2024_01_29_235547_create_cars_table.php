<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('car_brands')->onDelete('cascade');
            $table->integer('price');
            $table->unsignedBigInteger('fuel_id');
            $table->foreign('fuel_id')->references('id')->on('fuels')->onDelete('cascade');
            $table->integer('year');
            $table->unsignedBigInteger('car_bodies_id');
            $table->foreign('car_bodies_id')->references('id')->on('car_bodies')->onDelete('cascade');
            $table->string('car_image_path');
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
