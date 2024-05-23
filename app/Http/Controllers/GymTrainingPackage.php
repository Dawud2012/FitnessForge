<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingPackage;

class GymTrainingPackage extends Controller
{
    //

    public function gym_training()
    {
        $packages = TrainingPackage::all();
        if (count($packages) <= 0) { //for empty statement
            return view('empty');
        }
        return view('gym_training', ['packages' => $packages]);
    }
}
