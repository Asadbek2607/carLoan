<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class ServiceController extends Controller
{
    public function car($id)
    {
        session()->put('car_id', $id);
        return redirect()->route('avtokredit.index');
    }

    public function avtokredit_index()
    {
        $face = session()->get('face');
        if(session()->has('car_id')) {
            $car_id = session()->get('car_id');
            $cardetails = Car::find($car_id)->cardetails;
            session()->forget('car_id');
        } else {
            $cardetails = [];
        }
        $car_id = session()->get('car_id');
        return view('services.avtokredit', compact('face', 'cardetails', 'car_id'));
    }
}
