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
        $user = Auth::user();
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
            'year' => 'required|digits:4|integer',
            'license_plate' => [
                'required',
                'regex:/^[A-Za-z]{3}[0-9][A-Za-z][0-9]{2}$/'
            ],
        ]);
        $request->merge([
            'license_plate' => strtoupper($request->license_plate),
            'brand' => ucfirst(strtolower($request->brand)),
            'model' => ucfirst(strtolower($request->model)),
        ]);
        $data = $request->all();
        $user = Auth::user();
        $data['user_id'] = $user->id;
        Vehicle::create($data);
        return redirect()->route('vehicle.index');
    }

    public function validaAcesso(Vehicle $vehicle)
    {
        $user = Auth::user();
        if ($vehicle->user_id != $user->id) {
            return false;
        }
        return true;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        if (!$this->validaAcesso($vehicle)) {
            return redirect()->route('vehicle.index');
        }
        return view('vehicle.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->merge([
            'license_plate' => strtoupper($request->license_plate),
        ]);

        if (!$this->validaAcesso($vehicle)) {
            return redirect()->route('vehicle.index');
        }
        $data = $request->all();
        $vehicle->update($data);
        return redirect()->route('vehicle.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        if (!$this->validaAcesso($vehicle)) {
            return redirect()->route('vehicle.index');
        }
        $vehicle->delete();
        return redirect()->route('vehicle.index');
    }
}
