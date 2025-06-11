<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Assinaturas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-lg mt-6 text-center text-gray-900 dark:text-gray-100">
                    {{ __('Planos de Assinatura Mensal') }}
                </div>
                <div class="p-6 pt-3 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col md:flex-row justify-center gap-4">
                        <div
                            class="flex flex-col items-center border-2 border-gray-300 rounded-[16px] p-8 bg-gray-200 w-72 h-96 hover:bg-gray-300 transition">
                            <h3 class="text-xl font-bold mb-4">Plano Grátis</h3>
                            <div class="flex-1 flex items-center justify-center">
                                <span class="text-4xl font-extrabold text-myspot-blue">R$ 0,00</span>
                            </div>
                            <ul class="mt-4 mb-6 text-center text-gray-700 dark:text-gray-200 text-sm">
                                <li>Até 2 veículos</li>
                                <li>Suporte básico</li>
                                <li>Contem Anuncios</li>
                            </ul>
                            <x-primary-button class="mt-auto bg-green-700 hover:bg-green-800" disabled>
                                Adquirido
                            </x-primary-button>
                        </div>
                        <div
                            class="flex flex-col items-center border-2 border-gray-300 rounded-[16px] p-8 bg-gray-200 w-72 h-96 hover:bg-gray-300 transition">
                            <h3 class="text-xl font-bold mb-4">Plano Básico</h3>
                            <div class="flex-1 flex items-center justify-center">
                                <span class="text-4xl font-extrabold text-myspot-blue">R$ 19,90</span>
                            </div>
                            <ul class="mt-4 mb-6 text-center text-gray-700 dark:text-gray-200 text-sm">
                                <li>Até 5 veículos</li>
                                <li>Suporte prioritário</li>
                                <li>Livre de Anuncios</li>
                            </ul>
                            <x-primary-button class="mt-auto">
                                Assinar
                            </x-primary-button>
                        </div>
                        <div
                            class="flex flex-col items-center border-2 border-gray-300 rounded-[16px] p-8 bg-gray-200 w-72 h-96 hover:bg-gray-300 transition">
                            <h3 class="text-xl font-bold mb-4">Plano Premium</h3>
                            <div class="flex-1 flex items-center justify-center">
                                <span class="text-4xl font-extrabold text-myspot-blue">R$ 39,90</span>
                            </div>
                            <ul class="mt-4 mb-6 text-center text-gray-700 dark:text-gray-200 text-sm">
                                <li>Veículos ilimitados</li>
                                <li>Suporte dedicado</li>
                                <li>Dashboard avançado</li>
                                <li>Reserva de Vagas</li>
                            </ul>
                            <x-primary-button class="mt-auto">
                                Assinar
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
