<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cars;
use App\Models\Manufacturer;

class CarController extends Controller
{
    public function index()
    {
        $manufacturer = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        if (request('manufacturer_id') == null) {
            $cars = Cars::all();
        } else {
            $cars = Cars::where('manufacturer_id', request('manufacturer_id'))->get();
        }
        return view('cars.index', compact('cars', 'manufacturer'));
    }
}
