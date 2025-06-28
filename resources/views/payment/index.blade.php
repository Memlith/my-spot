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
                        <div class="bg-white p-6 rounded-lg shadow-md w-full lg:w-1/2 max-w-md">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                                {{ __('Ler Pix') }}
                            </h3>
                            <div class="flex justify-center mb-6">
                                <canvas id="qrcodeCanvas" class="rounded-lg w-[200px] h-[200px]"></canvas>
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

                        <div class="bg-white p-6 rounded-lg shadow-md w-full lg:w-1/2 max-w-md">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                                {{ __('Pagamento') }}
                            </h3>
                            <div class="space-y-4">
                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="credit_card_visa" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <i class="fab fa-cc-visa text-4xl text-blue-800 mr-2"></i>
                                        <i class="fab fa-cc-mastercard text-4xl text-red-700 mr-2"></i>
                                        <img src="https://placehold.co/40x25/FF5F00/FFFFFF?text=ELO" alt="ELO Logo" class="h-6 rounded">
                                    </span>
                                </label>

                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="mercado_pago" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <img src="https://placehold.co/40x25/009EE3/FFFFFF?text=Mercado+Pago" alt="Mercado Pago Logo" class="h-6 mr-2 rounded">
                                    </span>
                                </label>

                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="credit_card_amex" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <i class="fab fa-cc-amex text-4xl text-blue-700 mr-2"></i>
                                        <img src="https://placehold.co/40x25/000000/FFFFFF?text=Diners" alt="Diners Club Logo" class="h-6 mr-2 rounded">
                                        <img src="https://placehold.co/40x25/CC0000/FFFFFF?text=HIPER" alt="Hipercard Logo" class="h-6 rounded">
                                    </span>
                                </label>

                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="boleto" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <i class="fas fa-barcode text-2xl text-gray-700 mr-2"></i>
                                        <span class="font-semibold">Boleto Bancário</span>
                                    </span>
                                </label>

                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="paypal" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <i class="fab fa-cc-paypal text-4xl text-blue-700 mr-2"></i>
                                        <span class="font-semibold">PayPal</span>
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

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrious@4.0.2/dist/qrious.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" xintegrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        // Gera uma chave Pix aleatória usando UUID para demonstração
        const pixCodeContent = crypto.randomUUID();

        document.addEventListener('DOMContentLoaded', (event) => {
            const qr = new QRious({
                element: document.getElementById('qrcodeCanvas'),
                value: pixCodeContent,
                size: 200,
                level: 'H'
            });
        });

        function copyPixCode() {
            const tempInput = document.createElement("textarea");
            tempInput.value = pixCodeContent;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
            showCustomModal("Código Pix copiado para a área de transferência!");
        }

        function showCustomModal(message) {
            const modal = document.createElement('div');
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
