<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create');
    Route::post('/vehicle/create', [VehicleController::class, 'store'])->name('vehicle.store');
    Route::get('/vehicle', [VehicleController::class, 'index'])->name('vehicle.index');
    Route::get('/vehicle/{vehicle}', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::patch('/vehicle/{vehicle}', [VehicleController::class, 'update'])->name('vehicle.update');
    Route::delete('/vehicle/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicle.destroy');

Route::get('/company', function () {
    return view('/company/index');
})->middleware(['auth', 'verified'])->name('company');
});
Route::get('/membership', function () {
    return view('/membership/index');
})->middleware(['auth', 'verified'])->name('membership');



require __DIR__.'/auth.php';
