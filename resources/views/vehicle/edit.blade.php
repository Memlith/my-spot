<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Veículo') }} {{ $vehicle->model }} {{-- Adicionei $vehicle->model para o título --}}
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

                        {{-- INÍCIO: Bloco para exibir erros gerais de validação --}}
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
                        {{-- FIM: Bloco para exibir erros gerais de validação --}}

                        {{-- ATENÇÃO AQUI: Adicionado id="vehicle-form" e action com $vehicle->id --}}
                        <form id="vehicle-form" class="grid grid-cols-2 gap-4" action="{{ route('vehicle.update', $vehicle->id) }}"
                            method="POST">
                            @csrf
                            @method('PATCH') {{-- Usando PATCH conforme o seu código --}}

                            {{-- input marca --}}
                            <div>
                                <x-input-label class="mt-3" for="brand" :value="__('Marca')" />
                                <x-text-input class="block mt-2 w-full" type="text" name="brand"
                                    :value="old('brand', $vehicle->brand)" required />
                                @error('brand')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- input modelo --}}
                            <div>
                                <x-input-label class="mt-3" for="model" :value="__('Modelo')" />
                                <x-text-input class="block mt-2 w-full" type="text" name="model"
                                    :value="old('model', $vehicle->model)" required />
                                @error('model')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- input cor --}}
                            <div>
                                <x-input-label class="mt-3" for="color">Cor
                                </x-input-label>
                                <select name="color"
                                    class="block mt-2 max-w-[200px] border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-myspot-blue dark:focus:border-indigo-600 focus:ring-myspot-blue dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    {{-- Removi 'selected' do disabled para garantir que a cor salva seja selecionada --}}
                                    <option disabled>Selecione uma cor</option>
                                    <option value="Preto" {{ old('color', $vehicle->color) == 'Preto' ? 'selected' : '' }}>Preto</option>
                                    <option value="Branco" {{ old('color', $vehicle->color) == 'Branco' ? 'selected' : '' }}>Branco</option>
                                    <option value="Prata" {{ old('color', $vehicle->color) == 'Prata' ? 'selected' : '' }}>Prata</option>
                                    <option value="Cinza" {{ old('color', $vehicle->color) == 'Cinza' ? 'selected' : '' }}>Cinza</option>
                                    <option value="Vermelho" {{ old('color', $vehicle->color) == 'Vermelho' ? 'selected' : '' }}>Vermelho</option>
                                    <option value="Azul" {{ old('color', $vehicle->color) == 'Azul' ? 'selected' : '' }}>Azul</option>
                                    <option value="Marrom" {{ old('color', $vehicle->color) == 'Marrom' ? 'selected' : '' }}>Marrom</option>
                                    <option value="Bege" {{ old('color', $vehicle->color) == 'Bege' ? 'selected' : '' }}>Bege</option>
                                    <option value="Amarelo" {{ old('color', $vehicle->color) == 'Amarelo' ? 'selected' : '' }}>Amarelo</option>
                                </select>
                                @error('color')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- input ano --}}
                            <div>
                                <x-input-label class="mt-3" for="year" :value="__('Ano')" />
                                <x-text-input class="block mt-2 max-w-[100px]" type="text" name="year"
                                    :value="old('year', $vehicle->year)" required />
                                @error('year')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- INÍCIO: Radio Buttons para Tipo de Veículo com pre-seleção --}}
                            {{-- Adicionando col-span-2 para ocupar a largura total em grid-cols-2 --}}
                            <div class="col-span-2">
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

                            {{-- input placa --}}
                            <div>
                                <x-input-label class="mt-3" for="license_plate" :value="__('Placa')" />
                                <x-text-input class="uppercas block mt-2 max-w-[150px]" type="text"
                                    name="license_plate" :value="old('license_plate', $vehicle->license_plate)" required />
                                @error('license_plate')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Botão de Atualizar --}}
                            <div class="col-span-2 mt-6"> {{-- Adicionei col-span-2 para centralizar o botão se ele for o único --}}
                                <x-primary-button class="" type="submit">
                                    {{ __('Atualizar Veículo') }} {{-- MUDADO DE 'Cadastrar' para 'Atualizar Veículo' --}}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>