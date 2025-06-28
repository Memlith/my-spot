<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pagamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-lg mt-6 text-center text-gray-900">
                    {{ __('Forma de Pagamento') }}
                </div>
                <div class="p-6 pt-3 text-gray-900">
                    <div class="flex flex-col lg:flex-row justify-center items-start gap-8">
                        <!-- Pix Payment Section -->
                        <div class="bg-white p-6 rounded-lg shadow-md w-full lg:w-1/2 max-w-md">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                                {{ __('Ler Pix') }}
                            </h3>
                            <div class="flex justify-center mb-6">
                                <!-- Placeholder for QR Code image -->
                                <img src="https://placehold.co/200x200/E5E7EB/1F2937?text=QR+Code" alt="QR Code Pix" class="rounded-lg">
                            </div>
                            <div class="flex justify-center mb-6">
                                <button onclick="copyPixCode()" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow transition duration-300 ease-in-out">
                                    {{ __('Copiar') }}
                                </button>
                            </div>
                            <button class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded-lg shadow-lg flex items-center justify-center transition duration-300 ease-in-out">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                {{ __('Pagar agora') }}
                            </button>
                        </div>

                        <!-- Other Payment Methods Section -->
                        <div class="bg-white p-6 rounded-lg shadow-md w-full lg:w-1/2 max-w-md">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                                {{ __('Pagamento') }}
                            </h3>
                            <div class="space-y-4">
                                <!-- Credit Card Options -->
                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="credit_card_visa" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <img src="https://placehold.co/40x25/E5E7EB/1F2937?text=VISA" alt="Visa" class="h-6 mr-2 rounded">
                                        <img src="https://placehold.co/40x25/E5E7EB/1F2937?text=Master" alt="Mastercard" class="h-6 mr-2 rounded">
                                        <img src="https://placehold.co/40x25/E5E7EB/1F2937?text=..." alt="Other Cards" class="h-6 rounded">
                                    </span>
                                </label>

                                <!-- Mercado Pago Option -->
                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="mercado_pago" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <img src="https://placehold.co/40x25/E5E7EB/1F2937?text=Mercado+Pago" alt="Mercado Pago" class="h-6 mr-2 rounded">
                                    </span>
                                </label>

                                <!-- Other Credit Card Options -->
                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="credit_card_amex" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <img src="https://placehold.co/40x25/E5E7EB/1F2937?text=VISA" alt="Visa" class="h-6 mr-2 rounded">
                                        <img src="https://placehold.co/40x25/E5E7EB/1F2937?text=Amex" alt="American Express" class="h-6 mr-2 rounded">
                                        <img src="https://placehold.co/40x25/E5E7EB/1F2937?text=Diners" alt="Diners Club" class="h-6 mr-2 rounded">
                                        <img src="https://placehold.co/40x25/E5E7EB/1F2937?text=Hiper" alt="Hipercard" class="h-6 rounded">
                                    </span>
                                </label>

                                <!-- Boleto Bancário Option -->
                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="boleto" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <img src="https://placehold.co/40x25/E5E7EB/1F2937?text=Boleto+Bancário" alt="Boleto Bancário" class="h-6 mr-2 rounded">
                                    </span>
                                </label>

                                <!-- PayPal Option -->
                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="paypal" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <img src="https://placehold.co/40x25/E5E7EB/1F2937?text=PayPal" alt="PayPal" class="h-6 mr-2 rounded">
                                    </span>
                                </label>
                            </div>
                            <button class="mt-6 w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded-lg shadow-lg flex items-center justify-center transition duration-300 ease-in-out">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                {{ __('Pagar agora') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tailwind CSS CDN (for demonstration purposes) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Function to simulate copying Pix code
        function copyPixCode() {
            const pixCode = "00020126580014BR.GOV.BCB.PIX0136a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6a7b8c9d0e1f2g3h4i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6a7b8c9d0e1f2g3h4i5j6k7l8m9n0o5204000053039865802BR5925NOME DO RECEBEDOR LTDA6008BRASILIA62070503***6304CA77"; // Example Pix code
            const tempInput = document.createElement("textarea");
            tempInput.value = pixCode;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
            // Using a custom modal for demonstration instead of alert()
            showCustomModal("Código Pix copiado para a área de transferência!");
        }

        // Custom modal function (replaces alert)
        function showCustomModal(message) {
            // Create modal container
            const modal = document.createElement('div');
            // Removed dark:bg-gray-800 from here
            modal.className = 'fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center z-50';
            modal.innerHTML = `
                <div class="bg-white p-6 rounded-lg shadow-xl max-w-sm w-full mx-4">
                    <p class="text-gray-900 text-center text-lg mb-4">${message}</p>
                    <button onclick="this.closest('.fixed').remove()" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out">
                        OK
                    </button>
                </div>
            `;
            document.body.appendChild(modal);
        }
    </script>
</x-app-layout>
