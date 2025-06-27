<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MapController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name('index');

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

    Route::get('/establishment', function () {
        return view('establishment/index');
    })->name('establishment');
    Route::get('/establishment/map', function () {
        return view('establishment/map');
    })->name('establishment.map');
    Route::get('/membership', function () {
        return view('membership/index');
    })->name('membership');
    Route::get('/payment', function () {
        return view('payment/index');
    })->name('payment');
    Route::get('/map', function () {
        return view('map/index');
    })->name('map');
    Route::get('/support', function () {
        return view('support/index');
    })->name('support');

    Route::get('/dashboard', function () {
        if (Auth::user()->tipo === 'empresa') {
            return view('business/dashboard');
        }
        return view('client/dashboard');
    })->name('dashboard');
});
    Route::get('/', function () {
    return redirect()->route('maps.global');
});

Route::prefix('maps')->name('maps.')->group(function () {
    Route::get('/global', [MapController::class, 'globalMap'])->name('global');
    Route::get('/establishment/{establishment}', [MapController::class, 'establishmentMap'])->name('establishment');

    // Rotas de API para buscar dados via AJAX
    Route::get('/api/establishments', [MapController::class, 'getEstablishments'])->name('api.establishments');
    Route::get('/api/establishment/{establishment}/spots', [MapController::class, 'getSpots'])->name('api.spots');

    // Rotas de API para adicionar/atualizar (para testar validação, se você criar formulários ou usar Postman)
    Route::post('/api/establishments', [MapController::class, 'storeEstablishment'])->name('api.establishments.store');
    Route::put('/api/establishments/{establishment}', [MapController::class, 'updateEstablishment'])->name('api.establishments.update');
    Route::post('/api/spots', [MapController::class, 'storeSpot'])->name('api.spots.store');
    Route::put('/api/spots/{spot}', [MapController::class, 'updateSpot'])->name('api.spots.update');
});

require __DIR__ . '/auth.php';
