<php
use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;

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
