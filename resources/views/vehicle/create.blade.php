<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Veículo') }} {{ $vehicle->model }}
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

                        {{-- Bloco para exibir erros gerais de validação (importante!) --}}
                        @if ($errors->any())
                            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">
                                <p class="font-bold">Opa! Algo deu errado ao atualizar o veículo:</p>
                                <ul class="mt-2 list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- ATENÇÃO AQUI: action apontando para update e @method('PUT') --}}
                        <form id="vehicle-form" class="grid grid-cols-5 gap-4"
                            action="{{ route('vehicle.update', $vehicle->id) }}" method="POST">
                            @csrf
                            @method('PUT') {{-- ESSENCIAL para que o Laravel interprete como UPDATE --}}

                            <div>
                                <x-input-label class="mt-3" for="brand" :value="__('Marca')" />
                                <x-text-input class="block mt-2 w-full" placeholder="Ex: Honda" type="text"
                                    name="brand" required value="{{ old('brand', $vehicle->brand) }}" />
                                @error('brand')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <x-input-label class="mt-3" for="model" :value="__('Modelo')" />
                                <x-text-input class="block mt-2 w-full" placeholder="Ex: Civic" type="text"
                                    name="model" required value="{{ old('model', $vehicle->model) }}" />
                                @error('model')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <x-input-label class="mt-3" for="year" :value="__('Ano')" />
                                <x-text-input class="block mt-2 max-w-[65px] hide-arrows" placeholder="2025"
                                    type="text" name="year" maxlength="4" pattern="[0-9]{4}" required
                                    value="{{ old('year', $vehicle->year) }}" />
                                @error('year')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <x-input-label class="mt-3" for="color">Cor
                                </x-input-label>
                                <select name="color" placeholder="Cor"
                                    class="block mt-2 max-w-[200px] border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-myspot-blue dark:focus:border-indigo-600 focus:ring-myspot-blue dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option disabled>Selecione uma cor</option>
                                    <option {{ old('color', $vehicle->color) == 'Preto' ? 'selected' : '' }}>Preto</option>
                                    <option {{ old('color', $vehicle->color) == 'Branco' ? 'selected' : '' }}>Branco</option>
                                    <option {{ old('color', $vehicle->color) == 'Prata' ? 'selected' : '' }}>Prata</option>
                                    <option {{ old('color', $vehicle->color) == 'Cinza' ? 'selected' : '' }}>Cinza</option>
                                    <option {{ old('color', $vehicle->color) == 'Vermelho' ? 'selected' : '' }}>Vermelho</option>
                                    <option {{ old('color', $vehicle->color) == 'Azul' ? 'selected' : '' }}>Azul</option>
                                    <option {{ old('color', $vehicle->color) == 'Marrom' ? 'selected' : '' }}>Marrom</option>
                                    <option {{ old('color', $vehicle->color) == 'Bege' ? 'selected' : '' }}>Bege</option>
                                    <option {{ old('color', $vehicle->color) == 'Amarelo' ? 'selected' : '' }}>Amarelo</option>
                                </select>
                                @error('color')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- INÍCIO: Radio Buttons para Tipo de Veículo com pre-seleção --}}
                            <div>
                                <x-input-label class="mt-3" for="tipo" :value="__('Tipo de Veículo')" />
                                <div class="mt-2 flex items-center space-x-4">
                                    <label for="type_car" class="inline-flex items-center">
                                        <input id="type_car" type="radio" name="tipo" value="carro"
                                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-myspot-blue shadow-sm focus:ring-myspot-blue dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                            required {{ old('tipo', $vehicle->tipo) == 'carro' ? 'checked' : '' }}>
                                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Carro</span>
                                    </label>
                                    <label for="type_moto" class="inline-flex items-center">
                                        <input id="type_moto" type="radio" name="tipo" value="moto"
                                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-myspot-blue shadow-sm focus:ring-myspot-blue dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                            required {{ old('tipo', $vehicle->tipo) == 'moto' ? 'checked' : '' }}>
                                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Moto</span>
                                    </label>
                                </div>
                                @error('tipo')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- FIM: Radio Buttons para Tipo de Veículo --}}

                            <div>
                                <x-input-label class="mt-3" for="license_plate" :value="__('Placa')" />
                                <x-text-input class="block mt-2 max-w-[150px]" placeholder="ABC1D23" type="text"
                                    name="license_plate" pattern="[A-Za-z]{3}[0-9][A-Za-z][0-9]{2}"
                                    title="Formato: ABC1D23" maxlength="7" required
                                    value="{{ old('license_plate', $vehicle->license_plate) }}" />
                                @error('license_plate')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </form>
                        <div class="mt-6">
                            {{-- Mudar o texto do botão para "Atualizar" ou "Salvar Alterações" --}}
                            <x-primary-button type="submit" form="vehicle-form">
                                {{ __('Atualizar Veículo') }}
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>+