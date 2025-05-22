<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $data = $request->all();
        $user = Auth::user();
        $data['user_id'] = $user->id;
        Vehicle::create($data);
        return redirect()->route('vehicle.index');
    }

    public function validaAcesso(Vehicle $vehicle)
    {
        $user = Auth::user();
        if($vehicle->user_id != $user->id) {
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
        if(!$this->validaAcesso($vehicle)) {
            return redirect()->route('vehicle.index');
        }
        return view('vehicle.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        if(!$this->validaAcesso($vehicle)) {
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
        if(!$this->validaAcesso($vehicle)) {
            return redirect()->route('vehicle.index')->with('error', 'You do not have permission to delete this vehicle.');
        }
        $vehicle->delete();
        return redirect()->route('vehicle.index')->with('success', 'Vehicle deleted successfully.');
    }
}
