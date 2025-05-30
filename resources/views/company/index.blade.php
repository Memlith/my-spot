<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Empresas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900  dark:text-gray-100">
                    {{ __('Empresas cadastradas.') }}
                    <div class="grid grid-cols-3 mt-2">
                        <div
                            class="flex items-start my-2 border-2 border-gray-300 rounded-[10px] p-4 bg-gray-200 w-96  hover:bg-gray-300 transition">
                            <div>
                                <h2 class="text-lg font-bold">Empresa XYZ</h2>
                                <p class="text-sm text-gray-600">Rua Avenida | telefone</p>
                                <p class="text-sm text-gray-600">08:00 - 18:00</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start my-2 border-2 border-gray-300 rounded-[10px] p-4 bg-gray-200 w-96  hover:bg-gray-300 transition">
                            <div>
                                <h2 class="text-lg font-bold">Empresa XYZ</h2>
                                <p class="text-sm text-gray-600">Rua Avenida | telefone</p>
                                <p class="text-sm text-gray-600">08:00 - 18:00</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start my-2 border-2 border-gray-300 rounded-[10px] p-4 bg-gray-200 w-96  hover:bg-gray-300 transition">
                            <div>
                                <h2 class="text-lg font-bold">Empresa XYZ</h2>
                                <p class="text-sm text-gray-600">Rua Avenida | telefone</p>
                                <p class="text-sm text-gray-600">08:00 - 18:00</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start my-2 border-2 border-gray-300 rounded-[10px] p-4 bg-gray-200 w-96 hover:bg-gray-300 transition">
                            <div>
                                <h2 class="text-lg font-bold">Empresa XYZ</h2>
                                <p class="text-sm text-gray-600">Rua Avenida | telefone</p>
                                <p class="text-sm text-gray-600">08:00 - 18:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
