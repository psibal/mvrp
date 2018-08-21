<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CarController extends Controller
{

    public function getAllCars()
    {
        return response()->json(Car::getAllCars());
    }

    public function searchCar(Request $request)
    {
        $plateNumber = $request->get('plateNumber');

        return response()->json(Car::searchCar($plateNumber));
    }
}