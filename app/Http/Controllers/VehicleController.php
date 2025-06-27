<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str; // Não está sendo usado, pode remover se não for usar

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // O $user não está sendo usado aqui, pode ser removido se não for necessário para filtrar os veículos
        // $user = Auth::user();
        $vehicles = Vehicle::all(); // Se você quiser mostrar apenas os veículos do usuário logado, mude para: Vehicle::where('user_id', Auth::id())->get();
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
            'year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1), // Adicionei min/max year para melhor validação
            'vehicle_type' => 'required|in:carro,moto', // <--- ADICIONE ESTA LINHA PARA O RADIO BUTTON
            'license_plate' => [
                'required',
                'string', // Boa prática adicionar 'string'
                'max:7', // Garante que não é maior que 7 caracteres
                'unique:vehicles,license_plate', // <--- ADICIONE ESTA VALIDAÇÃO PARA GARANTIR PLACA ÚNICA
                'regex:/^[A-Za-z]{3}[0-9][A-Za-z][0-9]{2}$/'
            ],
        ]);

        $request->merge([
            'license_plate' => strtoupper($request->license_plate),
            'brand' => ucfirst(strtolower($request->brand)), // `ucfirst` pode não ser ideal para todas as marcas (ex: "BMW"). `Str::title` ou `ucwords` seriam alternativas.
            'model' => ucfirst(strtolower($request->model)), // O mesmo para modelo. Considere usar `Str::title` ou `ucwords`.
        ]);

        $data = $request->all();
        $user = Auth::user();
        $data['user_id'] = $user->id;

        Vehicle::create($data);

        return redirect()->route('vehicle.index')->with('success', 'Veículo cadastrado com sucesso!'); // Adicionei uma mensagem de sucesso
    }

    public function validaAcesso(Vehicle $vehicle)
    {
        $user = Auth::user();
        // É mais robusto retornar um booleano e deixar o chamador decidir o redirect.
        // Se o usuário não estiver logado, Auth::user() pode ser null, então verifique isso.
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
        // Verifique o acesso antes de validar para evitar processamento desnecessário.
        if (!$this->validaAcesso($vehicle)) {
            return redirect()->route('vehicle.index')->with('error', 'Você não tem permissão para atualizar este veículo.');
        }

        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1), // Adicionei min/max year
            'vehicle_type' => 'required|in:carro,moto', // <--- ADICIONE ESTA LINHA PARA O RADIO BUTTON
            'license_plate' => [
                'required',
                'string',
                'max:7',
                // Para update, a placa deve ser única, exceto para o próprio veículo que está sendo atualizado.
                'unique:vehicles,license_plate,' . $vehicle->id,
                'regex:/^[A-Za-z]{3}[0-9][A-Za-z][0-9]{2}$/'
            ],
        ]);

        $request->merge([
            'license_plate' => strtoupper($request->license_plate),
            'brand' => ucfirst(strtolower($request->brand)), // Considerar Str::title ou ucwords
            'model' => ucfirst(strtolower($request->model)), // Considerar Str::title ou ucwords
        ]);

        $data = $request->all();
        // Não é necessário definir 'user_id' no update, pois ele já existe no veículo.
        // $data['user_id'] = $user->id;

        $vehicle->update($data);

        return redirect()->route('vehicle.index')->with('success', 'Veículo atualizado com sucesso!'); // Adicionei uma mensagem de sucesso
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
        return redirect()->route('vehicle.index')->with('success', 'Veículo excluído com sucesso!'); // Adicionei uma mensagem de sucesso
    }
}