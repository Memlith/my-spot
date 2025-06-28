<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informações do Cartão') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-lg mt-6 text-center text-gray-900">
                    {{ __('Insira os dados do cartão') }}
                </div>
                <div class="p-6 pt-3 text-gray-900">
                    <form id="paymentForm" method="POST" action="{{ route('process.payment') }}">
                        @csrf
                        <input type="hidden" name="payment_method" value="{{ request()->input('method') }}">

                        <div class="mb-4">
                            <label for="cardNumber" class="block text-gray-700 text-sm font-bold mb-2">
                                Número do Cartão
                            </label>
                            <input type="text" id="cardNumber" name="cardNumber" 
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   placeholder="1234 5678 9012 3456" maxlength="19">
                            <span id="cardNumberError" class="text-red-500 text-xs italic hidden"></span>
                        </div>

                        <div class="mb-4">
                            <label for="cardName" class="block text-gray-700 text-sm font-bold mb-2">
                                Nome no Cartão
                            </label>
                            <input type="text" id="cardName" name="cardName" 
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   placeholder="Nome como impresso no cartão">
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="expiryDate" class="block text-gray-700 text-sm font-bold mb-2">
                                    Validade (MM/AA)
                                </label>
                                <input type="text" id="expiryDate" name="expiryDate" 
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       placeholder="MM/AA" maxlength="5">
                                <span id="expiryError" class="text-red-500 text-xs italic hidden"></span>
                            </div>
                            <div>
                                <label for="cvv" class="block text-gray-700 text-sm font-bold mb-2">
                                    CVV
                                </label>
                                <input type="text" id="cvv" name="cvv" 
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       placeholder="123" maxlength="4">
                                <span id="cvvError" class="text-red-500 text-xs italic hidden"></span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="button" onclick="window.history.back()" 
                                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Voltar
                            </button>
                            <button type="submit" 
                                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Confirmar Pagamento
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Formatação do número do cartão
            const cardNumber = document.getElementById('cardNumber');
            cardNumber.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
                let formatted = value.replace(/(\d{4})/g, '$1 ').trim();
                e.target.value = formatted;
                validateCardNumber();
            });

            // Formatação da data de validade
            const expiryDate = document.getElementById('expiryDate');
            expiryDate.addEventListener('input', function(e) {
                let value = e.target.value.replace(/[^0-9]/g, '');
                if (value.length > 2) {
                    value = value.substring(0, 2) + '/' + value.substring(2, 4);
                }
                e.target.value = value;
                validateExpiryDate();
            });

            // Validação do CVV
            const cvv = document.getElementById('cvv');
            cvv.addEventListener('input', function(e) {
                e.target.value = e.target.value.replace(/[^0-9]/g, '');
                validateCVV();
            });

            // Validação do formulário antes de enviar
            document.getElementById('paymentForm').addEventListener('submit', function(e) {
                if (!validateCardNumber() || !validateExpiryDate() || !validateCVV()) {
                    e.preventDefault();
                    showCustomModal('Por favor, corrija os erros no formulário antes de enviar.');
                }
            });
        });

        function validateCardNumber() {
            const cardNumber = document.getElementById('cardNumber').value.replace(/\s+/g, '');
            const errorElement = document.getElementById('cardNumberError');
            
            // Implementação do algoritmo de Luhn para validação
            if (!cardNumber || cardNumber.length < 13) {
                errorElement.textContent = 'Número do cartão inválido';
                errorElement.classList.remove('hidden');
                return false;
            }

            let sum = 0;
            let alternate = false;
            for (let i = cardNumber.length - 1; i >= 0; i--) {
                let digit = parseInt(cardNumber.substring(i, i + 1));
                if (alternate) {
                    digit *= 2;
                    if (digit > 9) {
                        digit = (digit % 10) + 1;
                    }
                }
                sum += digit;
                alternate = !alternate;
            }

            if (sum % 10 !== 0) {
                errorElement.textContent = 'Número do cartão inválido';
                errorElement.classList.remove('hidden');
                return false;
            }

            // Identificar a bandeira do cartão
            const cardType = identifyCardType(cardNumber);
            if (!cardType) {
                errorElement.textContent = 'Bandeira não suportada';
                errorElement.classList.remove('hidden');
                return false;
            }

            errorElement.classList.add('hidden');
            return true;
        }

        function identifyCardType(cardNumber) {
            // Visa
            if (/^4/.test(cardNumber)) return 'Visa';
            // Mastercard
            if (/^5[1-5]/.test(cardNumber)) return 'Mastercard';
            // Amex
            if (/^3[47]/.test(cardNumber)) return 'American Express';
            // Diners
            if (/^3(0[0-5]|[68])/.test(cardNumber)) return 'Diners Club';
            // Discover
            if (/^6(?:011|5)/.test(cardNumber)) return 'Discover';
            // JCB
            if (/^(?:2131|1800|35)/.test(cardNumber)) return 'JCB';
            
            return null;
        }

        function validateExpiryDate() {
            const expiryDate = document.getElementById('expiryDate').value;
            const errorElement = document.getElementById('expiryError');
            
            if (!expiryDate || !/^\d{2}\/\d{2}$/.test(expiryDate)) {
                errorElement.textContent = 'Formato inválido (MM/AA)';
                errorElement.classList.remove('hidden');
                return false;
            }

            const [month, year] = expiryDate.split('/');
            const currentDate = new Date();
            const currentYear = currentDate.getFullYear() % 100;
            const currentMonth = currentDate.getMonth() + 1;

            if (parseInt(month) < 1 || parseInt(month) > 12) {
                errorElement.textContent = 'Mês inválido';
                errorElement.classList.remove('hidden');
                return false;
            }

            if (parseInt(year) < currentYear || 
                (parseInt(year) === currentYear && parseInt(month) < currentMonth)) {
                errorElement.textContent = 'Cartão expirado';
                errorElement.classList.remove('hidden');
                return false;
            }

            errorElement.classList.add('hidden');
            return true;
        }

        function validateCVV() {
            const cvv = document.getElementById('cvv').value;
            const errorElement = document.getElementById('cvvError');
            const cardNumber = document.getElementById('cardNumber').value.replace(/\s+/g, '');
            
            if (!cvv || !/^\d{3,4}$/.test(cvv)) {
                errorElement.textContent = 'CVV inválido';
                errorElement.classList.remove('hidden');
                return false;
            }

            // Verifica se é Amex (CVV de 4 dígitos)
            const isAmex = /^3[47]/.test(cardNumber);
            if (isAmex && cvv.length !== 4) {
                errorElement.textContent = 'American Express requer 4 dígitos';
                errorElement.classList.remove('hidden');
                return false;
            }

            if (!isAmex && cvv.length !== 3) {
                errorElement.textContent = 'CVV deve ter 3 dígitos';
                errorElement.classList.remove('hidden');
                return false;
            }

            errorElement.classList.add('hidden');
            return true;
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