<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Veículo') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-lg mt-6 text-center text-gray-900 dark:text-gray-100">
                    {{ __('Preencha os campos abaixo com os dados do veiculo.') }}
                </div>
                <div class="p-6 pt-3 text-gray-900 dark:text-gray-100">
                    <div class="mt-4">
                        <form class="grid grid-cols-2 gap-4" action="{{ route('vehicle.update', $vehicle) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            {{-- input marca --}}
                            <div>
                                <x-input-label class="mt-3" for="brand" :value="__('Marca')" />
                                <x-text-input class="block mt-2 w-full" type="text" name="brand" :value="old('brand', $vehicle->brand)"
                                    required />
                            </div>
                            {{-- input modelo --}}
                            <div>
                                <x-input-label class="mt-3" for="model" :value="__('Modelo')" />
                                <x-text-input class="block mt-2 w-full" type="text" name="model" :value="old('model', $vehicle->model)"
                                    required />
                            </div>
                            {{-- input cor --}}
                            <div>
                                <x-input-label class="mt-3" for="color">Cor
                                </x-input-label>
                                <select name="color"
                                    class="block mt-2 max-w-[200px] border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-myspot-blue dark:focus:border-indigo-600 focus:ring-myspot-blue dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option disabled {{ $vehicle->color ? '' : 'selected' }}>Selecione uma cor</option>
                                    <option value="Preto" @selected($vehicle->color == 'Preto')>Preto</option>
                                    <option value="Branco" @selected($vehicle->color == 'Branco')>Branco</option>
                                    <option value="Prata" @selected($vehicle->color == 'Prata')>Prata</option>
                                    <option value="Cinza" @selected($vehicle->color == 'Cinza')>Cinza</option>
                                    <option value="Vermelho" @selected($vehicle->color == 'Vermelho')>Vermelho</option>
                                    <option value="Azul" @selected($vehicle->color == 'Azul')>Azul</option>
                                    <option value="Marrom" @selected($vehicle->color == 'Marrom')>Marrom</option>
                                    <option value="Bege" @selected($vehicle->color == 'Bege')>Bege</option>
                                    <option value="Amarelo" @selected($vehicle->color == 'Amarelo')>Amarelo</option>
                                </select>
                            </div>
                            {{-- input ano --}}
                            <div>
                                <x-input-label class="mt-3" for="year" :value="__('Ano')" />
                                <x-text-input class="block mt-2 max-w-[100px]" type="text" name="year"
                                    :value="old('year', $vehicle->year)" required />
                            </div>
                            {{-- input placa --}}
                            <div>
                                <x-input-label class="mt-3" for="license_plate" :value="__('Placa')" />
                                <x-text-input class="uppercas block mt-2 max-w-[150px]" type="text"
                                    name="license_plate" :value="old('license_plate', $vehicle->license_plate)" required />
                            </div>

                            <x-primary-button class="" type="submit">
                                {{ __('Cadastrar') }}
                            </x-primary-button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
