<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastrar Veículo') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Preencha os campos abaixo com os dados do veiculo.') }}
                    <div class="mt-4">

                        <form action="{{ route('vehicle.store') }}" method="POST">
                            @csrf
                            <div>
                                <x-input-label for="model" :value="__('Modelo *')" />
                                <x-text-input class="block mt-2 max-w-[300px]" type="text" name="model" required />
                            </div>

                            <div>
                                <x-input-label for="brand" :value="__('Marca *')" />
                                <x-text-input class="block mt-2 max-w-[300px]" type="text" name="brand" required />
                            </div>

                            <div>
                                <x-input-label for="color" :value="__('Cor *')" />
                                <x-text-input class="block mt-2 max-w-[300px]" type="text" name="color" required />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="license_plate" :value="__('Placa *')" />
                                <x-text-input class="block mt-2 max-w-[300px]" type="text" name="license_plate"
                                    required />
                            </div>

                            <div>
                                <x-input-label for="year" :value="__('Ano *')" />
                                <x-text-input class="block mt-2 max-w-[300px]" type="text" name="year" required />
                            </div>

                            <x-primary-button class="mt-3" type="submit">
                                {{ __('Cadastrar') }}
                            </x-primary-button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
