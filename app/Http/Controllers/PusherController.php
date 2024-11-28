<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use App\Models\User;
use Illuminate\Http\Request;

class PusherController extends Controller
{




    public function index()
    {


        return view('livewire.chat.index');
    }


    public function chat($query)
    {


        return view('livewire.chat.chat');
    }


}
