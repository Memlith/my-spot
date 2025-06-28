<?php

namespace App\Http\Controllers;
use App\Models\Establishment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $establishments = Establishment::all();
        return view('establishment.index', compact('establishments'));
    }

    // ... other methods
}
