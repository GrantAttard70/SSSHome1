<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('manufacturer.index');
});
Route::get('/Cars', [CarController::class, 'index'])->name('cars.index');

Route::get('/Manufacturer', [ManufacturerController::class, 'index'])->name('manufacturer.index');