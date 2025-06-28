<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meus Estacionamentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- This container can be a grid if more parking lots are added --}}
                    <div>
                        <!-- Estacionamento fictício -->
                        <div
                            class="flex items-start gap-4 p-4 border rounded-lg dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition ease-in-out duration-150">
                            {{-- Image --}}
                            <div class="w-32 h-32 rounded-lg overflow-hidden flex-shrink-0">
                                <img src="{{ asset('storage/images/estacionamentos/polo-shopping.jpg') }}"
                                    alt="Fachada do Polo Shopping" class="w-full h-full object-cover">
                            </div>

                            {{-- Content --}}
                            <div class="flex flex-col justify-between self-stretch flex-grow">
                                <div>
                                    <h3 class="text-xl font-bold">Polo Shopping</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Av. Santos Dumont, 1000</p>
                                </div>
                                <div class="self-end">
                                    <a href="{{ route('estacionamento.detalhes') }}">
                                        <x-primary-button>Ver Mais</x-primary-button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>