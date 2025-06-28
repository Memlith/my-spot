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
                    </a>
                    {{-- bloco de assinaturas menu grid --}}
                    <a href="{{ route('subscription.index') }}" class="max-w-[150px] rounded-[16px]">
                        <div
                            class="bg-gray-200 rounded-[16px] p-6 w-[150px] h-[150px] flex flex-col items-center justify-center border-2 border-gray-300 hover:bg-gray-300 transition">

                            <svg class="shrink-0 size-12 fill-myspot-blue" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7
                                    80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4
                                    2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9
                                    17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8
                                    62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4
                                    6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1
                                    6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.4-6.4-23.4l-46.2-45
                                    46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4
                                    0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307
                                    1 301 7.3L256 53.5 211 7.3z" />
                            </svg>
                            <p class="mt-2 text-base text-center">Assinaturas</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>