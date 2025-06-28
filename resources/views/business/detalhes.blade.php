<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalhes do Estacionamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-2xl font-bold">Polo Shopping</h3>
                            <p class="mt-1 text-md text-gray-600 dark:text-gray-400">Av. Santos Dumont, 1000</p>
                        </div>

                        <div class="border-t border-gray-200 dark:border-gray-700"></div>

                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Vagas disponíveis</dt>
                                <dd class="mt-1 text-lg text-gray-900 dark:text-gray-100">120</dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Horário de
                                    funcionamento</dt>
                                <dd class="mt-1 text-lg text-gray-900 dark:text-gray-100">08h às 22h</dd>
                            </div>
                        </dl>

                        <div class="flex justify-start mt-6">
                            <a href="{{ route('dashboard') }}">
                                <x-secondary-button>
                                    {{ __('Voltar') }}
                                </x-secondary-button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
