<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EstablishmentController;
use App\Models\Establishment;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\MapController;

Route::get('/', function () {
    return view('welcome');
});

// A rota
// Route::get("/index", function () {
//     return view("index");
// })->middleware(["auth", "verified"])->name("index");

Route::get("/subscription/index", [SubscriptionController::class, "index"])->name("subscription.index");



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rotas de Veículo
    Route::get("/vehicle/create", [VehicleController::class, "create"])->name("vehicle.create");
    Route::post("/vehicle/create", [VehicleController::class, "store"])->name("vehicle.store");
    Route::get("/vehicle", [VehicleController::class, "index"])->name("vehicle.index");
    Route::get("/vehicle/{vehicle}", [VehicleController::class, "edit"])->name("vehicle.edit");
    Route::patch("/vehicle/{vehicle}", [VehicleController::class, "update"])->name("vehicle.update");
    Route::delete("/vehicle/{vehicle}", [VehicleController::class, "destroy"])->name("vehicle.destroy");

    // Rotas de Estabelecimento
    Route::get("/establishment", [ProfileController::class, "index"])->name("establishment.index");
    Route::get("/establishment/map", function () {
        return view("establishment/map");
    })->name("establishment.map");

    // Rotas de Membrosia/Pagamento (você já tinha estas e elas devem ser autenticadas)
    Route::get("/membership", function () {
        return view("membership/index");
    })->name("membership");
    Route::get("/payment", function () {
        return view("payment/index");
    })->name("payment");

    // Outras rotas gerais autenticadas
    Route::get("/map", function () {
        return view("map/index");
    })->name("map");
    Route::get("/support", function () {
        return view("support/index");
    })->name("support");

    // Rota para o Dashboard (dentro do grupo autenticado), que redireciona conforme o tipo de usuário
    Route::get("/dashboard", function () {
        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            // Se o usuário for do tipo "empresa", exibe o dashboard de empresa
            if (Auth::user()->type === "empresa") { // Ajustado para "type" (minúsculo, padrão Laravel)
                return view("business/dashboard");
            }
            // Caso contrário (seja cliente ou outro tipo), exibe o dashboard de cliente
            return view("client/dashboard");
        }
        // Se o usuário não estiver autenticado (tentou acessar /dashboard diretamente),
        // redireciona para a página de login.
        return redirect()->route("login");
    })->name("dashboard");

    //rota business
    Route::get('/business/details', function () {
        if (Auth::user()->tipo === 'empresa') {
            return view('business/details');
            }
        })->name('business.details');


}); // <--- ESTE É O FECHAMENTO DO BLOCO DE ROTAS QUE EXIGEM AUTENTICAÇÃO.
    // Ele precisa estar no final de TODAS as rotas que dependem de "auth".


// Rotas de autenticação geradas pelo Breeze/Jetstream (login, registro, etc.)
require __DIR__ . "/auth.php";


