<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        // Validação dos dados do cartão
        $validated = $request->validate([
            'cardNumber' => 'required|string|min:13|max:19',
            'cardName' => 'required|string|max:255',
            'expiryDate' => 'required|string|regex:/^\d{2}\/\d{2}$/',
            'cvv' => 'required|string|min:3|max:4',
            'payment_method' => 'required|string'
        ]);

        return redirect()->route('payment.success')->with('success', 'Pagamento processado com sucesso!');
    }
}