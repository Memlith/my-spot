<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use \App\Rules\ValidaCpfCnpj;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'cpf_cnpj' => ['required', 'string', 'max:20', 'unique:' . User::class, new ValidaCpfCnpj],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $request->merge([
            'name' => ucfirst(strtolower($request->name)),
        ]);

        $cpf_cnpj = preg_replace('/\D/', '', $request->cpf_cnpj);
        $tipo = strlen($cpf_cnpj) === 14 ? 'empresa' : 'cliente';


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cpf_cnpj' => $request->cpf_cnpj,
            'tipo' => $tipo,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('index', absolute: false));
    }
}
