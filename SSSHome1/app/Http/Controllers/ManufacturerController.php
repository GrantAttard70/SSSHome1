<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
class ManufacturerController extends Controller
{
    public function index()
    {
        $Manufacturers = Manufacturer::all(); //to get data from db
        return view('manufacturer.index', compact('Manufacturers'));
    }
}
