<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cars;
use App\Models\Manufacturer;

class CarController extends Controller
{
    public function index()
    {
        $Manufacturer = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        if (request('manufacturer_id') == null) {
            $cars = Cars::all();
        } else {
            $cars = Cars::where('manufacturer_id', request('manufacturer_id'))->get();
        }
        return view('cars.index', compact('cars', 'Manufacturer'));
    }
    public function create(Cars $cars) 
    {
        $manufacturer = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Cars', '');
        return view('cars.create', compact('cars', 'manufacturer'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ]);
        Cars::create($request->all());
        return redirect()->route('cars.index')->with('message', 'Car Added');
    }
}
