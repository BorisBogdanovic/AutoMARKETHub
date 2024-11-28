<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use Illuminate\View\View;

class SingleCar extends Component
{
    public $car;
    public $userId;
    public function message($userId)
    {
        dd($userId);
    }

    public function mount($id)
    {
        $this->car = Car::findOrFail($id);
    }

    public function render():View
    {
        return view('livewire.single-car')->layout('layouts.app');
    }
}

