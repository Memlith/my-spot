<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Veículos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-lg mt-6 text-center text-gray-900 dark:text-gray-100">
                    {{ __('Lista de veículos cadastrados.') }}
                </div>
                <div class="p-6 pt-3 text-gray-900 dark:text-gray-100">

                    <a href="{{ route('vehicle.create') }}">
                        <x-primary-button class="mb-4" type="button">
                            {{ __('Cadastrar Veiculo') }}
                        </x-primary-button>
                    </a>
                    <div class="grid grid-cols-3">
                        @foreach ($vehicles as $vehicle)
                            <div
                                class="flex items-start border-2 border-gray-300 rounded-[10px] p-4 bg-gray-200 w-96  hover:bg-gray-300 transition">
                                <div class="flex justify-between items-center w-full">
                                    <div>
                                        <h2 class="font-bold text-lg">{{ $vehicle->brand }}
                                            {{ $vehicle->model }} - {{ $vehicle->year }}
                                        </h2>
                                        <p class="text-sm text-gray-600">{{ $vehicle->tipo }} |
                                            {{ $vehicle->license_plate }} | {{ $vehicle->color }}
                                        </p>
                                    </div>
                                    <div class="flex  space-x-2">
                                        <a href="{{ route('vehicle.edit', $vehicle) }}">
                                            <svg class="size-5
                                                mr-4 fill-myspot-blue hover:fill-myspot-blue-hover
                                                active:fill-myspot-blue-pressed"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                <path d=" M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9
                                        97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1
                                        6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7
                                        24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3
                                        172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0
                                        96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3
                                        32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96
                                        0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z" />
                                            </svg>
                                        </a>

                                        <form action="{{ route('vehicle.destroy', $vehicle) }}" method="POST"
                                            onsubmit="return confirm('Tem certeza que deseja excluir este veículo?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <svg class="size-5 fill-red-600 hover:fill-red-700 active:fill-red-900
                                        ml-2"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                    <path
                                                        d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
