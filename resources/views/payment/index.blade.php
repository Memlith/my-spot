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
                        <!-- Seção Pix -->
                        <div class="bg-white p-6 rounded-lg shadow-md w-full lg:w-1/2 max-w-md">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                                {{ __('Ler Pix') }}
                            </h3>
                            <div class="flex justify-center mb-6">
                                <canvas id="qrcodeCanvas" class="rounded-lg w-[200px] h-[200px]"></canvas>
                            </div>
                            <div class="flex justify-center mb-6">
                                <button onclick="copyPixCode()" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow transition duration-300 ease-in-out">
                                    {{ __('Copiar código') }}
                                </button>
                            </div>
                            <div class="text-center mb-4 text-sm text-gray-600">
                                {{ __('O QR Code expira em 30 minutos') }}
                            </div>
                            <button onclick="completePixPayment()" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded-lg shadow-lg flex items-center justify-center transition duration-300 ease-in-out">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                {{ __('Já fiz o pagamento') }}
                            </button>
                        </div>

                        <!-- Seção Cartões e outros métodos -->
                        <div class="bg-white p-6 rounded-lg shadow-md w-full lg:w-1/2 max-w-md">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                                {{ __('Cartão e outros métodos') }}
                            </h3>
                            <div class="space-y-4 mb-6">
                                <!-- Cartão de crédito -->
                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="credit_card" class="form-radio h-5 w-5 text-blue-600" checked>
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <i class="fab fa-cc-visa text-4xl text-blue-800 mr-2"></i>
                                        <i class="fab fa-cc-mastercard text-4xl text-red-700 mr-2"></i>
                                        <i class="fab fa-cc-amex text-4xl text-blue-700 mr-2"></i>
                                        <span class="font-medium">Cartão de crédito</span>
                                    </span>
                                </label>

                                <!-- Mercado Pago -->
                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="mercado_pago" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.18.9/mercadopago/logo__small@2x.png" alt="Mercado Pago Logo" class="h-6 mr-2">
                                        <span class="font-medium">Mercado Pago</span>
                                    </span>
                                </label>

                                <!-- Boleto -->
                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="boleto" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <i class="fas fa-barcode text-2xl text-gray-700 mr-2"></i>
                                        <span class="font-medium">Boleto Bancário</span>
                                    </span>
                                </label>

                                <!-- PayPal -->
                                <label class="flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <input type="radio" name="payment_method" value="paypal" class="form-radio h-5 w-5 text-blue-600">
                                    <span class="ml-3 text-gray-800 flex items-center">
                                        <i class="fab fa-cc-paypal text-4xl text-blue-700 mr-2"></i>
                                        <span class="font-medium">PayPal</span>
                                    </span>
                                </label>
                            </div>

                            <!-- Botão de pagamento - agora funcional -->
                            <button onclick="redirectToPayment()" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded-lg shadow-lg flex items-center justify-center transition duration-300 ease-in-out">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                {{ __('Pagar agora') }}
                            </button>

                            <div class="mt-4 text-center text-sm text-gray-500">
                                <i class="fas fa-lock mr-1"></i> {{ __('Pagamento seguro') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrious@4.0.2/dist/qrious.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        // Gera uma chave Pix aleatória usando UUID para demonstração
        const pixCodeContent = crypto.randomUUID();
        let paymentMethodSelected = 'credit_card'; // Método padrão

        document.addEventListener('DOMContentLoaded', (event) => {
            // Configura listeners para os radio buttons
            document.querySelectorAll('input[name="payment_method"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    paymentMethodSelected = this.value;
                });
            });

            // Gera QR Code Pix
            const qr = new QRious({
                element: document.getElementById('qrcodeCanvas'),
                value: pixCodeContent,
                size: 200,
                level: 'H'
            });
        });

        function copyPixCode() {
            navigator.clipboard.writeText(pixCodeContent).then(() => {
                showCustomModal("Código Pix copiado para a área de transferência!");
            }).catch(err => {
                console.error('Falha ao copiar: ', err);
                showCustomModal("Erro ao copiar o código. Tente novamente.");
            });
        }

        function completePixPayment() {
            showCustomModal("Obrigado! Estamos verificando seu pagamento Pix. Isso pode levar alguns minutos.", true);
        }

        function redirectToPayment() {
            // Verifica se é Pix (já tem tratamento próprio)
            if (paymentMethodSelected === 'credit_card') {
                window.location.href = "{{ route('payment.card-info') }}?method=credit_card";
            } 
        }

        function showCustomModal(message, isSuccess = false) {
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center z-50';
            modal.innerHTML = `
                <div class="bg-white p-6 rounded-lg shadow-xl max-w-sm w-full mx-4">
                    <div class="text-center mb-4">
                        ${isSuccess ? 
                          '<i class="fas fa-check-circle text-4xl text-green-500 mb-2"></i>' : 
                          '<i class="fas fa-info-circle text-4xl text-blue-500 mb-2"></i>'}
                    </div>
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