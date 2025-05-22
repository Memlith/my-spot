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

                        <form class="grid grid-cols-2 gap-4" action="{{ route('vehicle.store') }}" method="POST">
                            @csrf

                            <div>
                                <x-input-label class="mt-3" for="brand" :value="__('Marca')" />
                                <x-text-input class="block mt-2 w-full" type="text" name="brand" required />
                            </div>



                            <div>
                                <x-input-label class="mt-3" for="color">Cor
                                </x-input-label>
                                <select name="color" placeholder="Cor"
                                    class="block mt-2 max-w-[200px]'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-myspot-blue dark:focus:border-indigo-600 focus:ring-myspot-blue dark:focus:ring-indigo-600 rounded-md shadow-sm'">
                                    <option selected disabled>Selecione
                                        uma cor</option>
                                    <option>Preto</option>
                                    <option>Branco</option>
                                    <option>Prata</option>
                                    <option>Cinza</option>
                                    <option>Vermelho</option>
                                    <option>Azul</option>
                                    <option>Marrom</option>
                                    <option>Bege</option>
                                    <option>Amarelo</option>
                                </select>
                            </div>

                            <div>
                                <x-input-label class="mt-3" for="model" :value="__('Modelo')" />
                                <x-text-input class="block mt-2 w-full" type="text" name="model" required />
                            </div>


                            <div>
                                <x-input-label class="mt-3" for="year" :value="__('Ano')" />
                                <x-text-input class="block mt-2 max-w-[100px]" placeholder="2025" type="text"
                                    name="year" required />
                            </div>

                            <div>
                                <x-input-label class="mt-3" for="license_plate" :value="__('Placa')" />
                                <x-text-input class="block mt-2 max-w-[150px]" placeholder="XXX0X000" type="text"
                                    name="license_plate" required />
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
