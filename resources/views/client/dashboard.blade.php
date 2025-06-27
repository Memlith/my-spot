<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-lg my-6 text-center text-gray-900 dark:text-gray-100">
                    {{ 'Bem-Vindo ao MySpot, ' . Str::title(strtolower(Auth::user()->name)) }}
                </div>
                <div class="flex justify-center mx-auto w-fit gap-4 text-gray-900 dark:text-gray-100">
                    <div
                        class="flex items-start border-2 border-gray-300 rounded-[10px] p-2 bg-gray-200 w-96  hover:bg-gray-300 transition">
                        <div>
                            <h2 class="text-lg font-bold">Ultimo lugar visitado</h2>
                            @if (isset($lastVisited))
                                <p class="text-sm text-gray-600">{{ $lastVisited->name }}</p>
                                <p class="text-sm text-gray-600">Aberto 08:00 - 18:00</p>
                            @else
                                <p class="text-sm text-gray-600">Nenhum estabelecimento visitado.</p>
                            @endif
                        </div>
                    </div>
                    <div
                        class="flex items-start border-2 border-gray-300 rounded-[10px] p-2 bg-gray-200 w-96  hover:bg-gray-300 transition">
                        <div>
                            <h2 class="text-lg font-bold">Ultimo veiculo usado</h2>
                            <p class="text-sm text-gray-600">
                                @if (Auth::user()->vehicles && Auth::user()->vehicles->count())
                                    {{ Auth::user()->vehicles->first()->brand }}
                                    {{ Auth::user()->vehicles->first()->model }} -
                                    {{ Auth::user()->vehicles->first()->year }}<br>
                                    {{ Auth::user()->vehicles->first()->license_plate }} |
                                    {{ Auth::user()->vehicles->first()->color }} |
                                    {{ Auth::user()->vehicles->first()->tipo }}
                                @else
                                    Nenhum veiculo cadastrado.
                                @endif
                            </p>
                            <p class="text-sm text-gray-600"></p>
                        </div>
                    </div>
                </div>
                {{-- grid dos menus --}}
                <div class="grid grid-cols-4 justify-center mx-auto w-fit gap-4 text-gray-900 p-6 dark:text-gray-100">
                    {{-- bloco mapa menu grid --}}
                    <a href="{{ route('maps.global') }}" class="w-[150px] rounded-[16px]">
                        <div
                            class="bg-gray-200 rounded-[16px] p-6 w-[150px] h-[150px] flex flex-col items-center justify-center border-2 border-gray-300 hover:bg-gray-300 transition">

                            <svg class="shrink-0 size-12 fill-myspot-blue" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M565.6 36.2C572.1 40.7 576 48.1 576 56l0 336c0 10-6.2 18.9-15.5 22.4l-168 64c-5.2 2-10.9 2.1-16.1 .3L192.5 417.5l-160 61c-7.4 2.8-15.7 1.8-22.2-2.7S0 463.9 0 456L0 120c0-10 6.1-18.9 15.5-22.4l168-64c5.2-2 10.9-2.1 16.1-.3L383.5 94.5l160-61c7.4-2.8 15.7-1.8 22.2 2.7zM48 136.5l0 284.6 120-45.7 0-284.6L48 136.5zM360 422.7l0-285.4-144-48 0 285.4 144 48zm48-1.5l120-45.7 0-284.6L408 136.5l0 284.6z" />
                            </svg>
                            <p class="mt-2 text-base text-center">Mapa</p>
                        </div>
                    </a>
                    {{-- bloco empresas menu grid --}}

                    <a href="{{ route('establishment.index') }}" class="max-w-[150px] rounded-[16px]">

                        <div
                            class="bg-gray-200 rounded-[16px] p-6 w-[150px] h-[150px] flex flex-col items-center justify-center border-2 border-gray-300 hover:bg-gray-300 transition">

                            <svg class="shrink-0 size-12 fill-myspot-blue" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M64 48c-8.8 0-16 7.2-16 16l0 384c0 8.8 7.2 16 16 16l80 0 0-64c0-26.5 21.5-48 48-48s48 21.5 48 48l0 64 80 0c8.8 0 16-7.2 16-16l0-384c0-8.8-7.2-16-16-16L64 48zM0 64C0 28.7 28.7 0 64 0L320 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm88 40c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zM232 88l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16zM88 232c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zm144-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16z" />
                            </svg>
                            <p class="mt-2 text-base text-center">Estabelecimentos</p>
                        </div>
                    </a>
                    {{-- bloco pagamento menu grid --}}
                    <a href="{{ 'payment' }}" class="max-w-[150px] rounded-[16px]">
                        <div
                            class="bg-gray-200 rounded-[16px] p-6 w-[150px] h-[150px] flex flex-col items-center justify-center border-2 border-gray-300 hover:bg-gray-300 transition">

                            <svg class="shrink-0 size-12 fill-myspot-blue" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M64 64C28.7 64 0 92.7 0 128L0 384c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64L64 64zm64 320l-64 0 0-64c35.3 0 64 28.7 64 64zM64 192l0-64 64 0c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64l0 64-64 0zm64-192c-35.3 0-64-28.7-64-64l64 0 0 64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                            </svg>
                            <p class="mt-2 text-base text-center">Pagamento</p>
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
