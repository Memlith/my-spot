<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str; 

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all(); 
        return view('vehicle.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1), 
            'tipo' => 'required|in:carro,moto', 
            'license_plate' => [
                'required',
                'string',
                'max:7', 
                'unique:vehicles,license_plate', 
                'regex:/^[A-Za-z]{3}[0-9][A-Za-z][0-9]{2}$/'
            ],
        ]);

        $request->merge([
            'license_plate' => strtoupper($request->license_plate),
            'brand' => Str::title(strtolower($request->brand)), 
            'model' => Str::title(strtolower($request->model)), 
            'tipo' => Str::title(strtolower($request->tipo))
        ]);

        $data = $request->all();
        $user = Auth::user();
        $data['user_id'] = $user->id;

        Vehicle::create($data);

        return redirect()->route('vehicle.index')->with('success', 'Veículo cadastrado com sucesso!'); 
    }

    public function validaAcesso(Vehicle $vehicle)
    {
        $user = Auth::user();
        
        return $user && $vehicle->user_id == $user->id;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Este método está vazio, se não for usar, pode removê-lo ou adicionar funcionalidade.
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        if (!$this->validaAcesso($vehicle)) {
            // Adicionar uma mensagem de erro pode ser útil
            return redirect()->route('vehicle.index')->with('error', 'Você não tem permissão para editar este veículo.');
        }
        return view('vehicle.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
       
        if (!$this->validaAcesso($vehicle)) {
            return redirect()->route('vehicle.index')->with('error', 'Você não tem permissão para atualizar este veículo.');
        }

        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1), 
            'tipo' => 'required|in:carro,moto', 
            'license_plate' => [
                'required',
                'string',
                'max:7',

                'unique:vehicles,license_plate,' . $vehicle->id,
                'regex:/^[A-Za-z]{3}[0-9][A-Za-z][0-9]{2}$/'
            ],
        ]);

        $request->merge([
            'license_plate' => strtoupper($request->license_plate),
            'brand' => Str::title(strtolower($request->brand)), 
            'model' => Str::title(strtolower($request->model)), 
        ]);

        $data = $request->all();

        $vehicle->update($data);

        return redirect()->route('vehicle.index')->with('success', 'Veículo atualizado com sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        if (!$this->validaAcesso($vehicle)) {
            return redirect()->route('vehicle.index')->with('error', 'Você não tem permissão para excluir este veículo.');
        }
        $vehicle->delete();
        return redirect()->route('vehicle.index')->with('success', 'Veículo excluído com sucesso!'); 
    }
}