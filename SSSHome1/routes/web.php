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
Route::get('/Cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/Cars/store', [CarController::class, 'store'])->name('cars.store');
Route::get('/Manufacturer', [ManufacturerController::class, 'index'])->name('manufacturer.index');
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');
Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::put('/cars/{id}', [CarController::class, 'update'])->name('cars.update');