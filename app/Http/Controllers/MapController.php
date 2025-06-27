<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use App\Models\Spot;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEstablishmentRequest;
use App\Http\Requests\UpdateEstablishmentRequest;
use App\Http\Requests\StoreSpotRequest;
use App\Http\Requests\UpdateSpotRequest;

class MapController extends Controller
{
    /**
     * Exibe a tela de mapa global de estabelecimentos.
     */
    public function globalMap()
    {
        $establishments = Establishment::all();
        return view('maps.global', compact('establishments'));
    }

    /**
     * Exibe a tela de mapa de vagas para um estabelecimento específico.
     */
    public function establishmentMap(Establishment $establishment)
    {
        return view('maps.establishment', compact('establishment'));
    }

    /**
     * Retorna os dados dos estabelecimentos em formato JSON.
     */
    public function getEstablishments()
    {
        return response()->json(Establishment::all());
    }

    /**
     * Retorna os dados das vagas de um estabelecimento em formato JSON.
     */
    public function getSpots(Establishment $establishment)
    {
        return response()->json($establishment->spots);
    }

    /**
     * Cria um novo estabelecimento (com validação).
     * Exemplo de uso para demonstração da validação.
     */
    public function storeEstablishment(StoreEstablishmentRequest $request)
    {
        $establishment = Establishment::create($request->validated());
        return response()->json($establishment, 201);
    }

    /**
     * Atualiza um estabelecimento existente (com validação).
     * Exemplo de uso para demonstração da validação.
     */
    public function updateEstablishment(UpdateEstablishmentRequest $request, Establishment $establishment)
    {
        $establishment->update($request->validated());
        return response()->json($establishment);
    }

    /**
     * Cria uma nova vaga para um estabelecimento (com validação).
     * Exemplo de uso para demonstração da validação.
     */
    public function storeSpot(StoreSpotRequest $request)
    {
        $spot = Spot::create($request->validated());
        return response()->json($spot, 201);
    }

    /**
     * Atualiza uma vaga existente (com validação).
     * Exemplo de uso para demonstração da validação.
     */
    public function updateSpot(UpdateSpotRequest $request, Spot $spot)
    {
        $spot->update($request->validated());
        return response()->json($spot);
    }
}
