<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Assinaturas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-center mb-8">
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Assinaturas</h1>
                        <p class="text-lg text-gray-600 dark:text-gray-300">
                            Confira aqui alguns de nossos planos para a sua empresa
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach($subscriptions as $subscription)
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6 border border-gray-200 dark:border-gray-600 hover:shadow-xl transition-shadow duration-300">
                                <div class="text-center mb-6">
                                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                                        {{ $subscription->name }}
                                    </h3>
                                    @if($subscription->price > 0)
                                        <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">
                                            R$ {{ number_format($subscription->price, 2, ',', '.') }}
                                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">/mês</span>
                                        </div>
                                    @else
                                        <div class="text-3xl font-bold text-green-600 dark:text-green-400">
                                            Gratuito
                                        </div>
                                    @endif
                                </div>

                                <div class="mb-6">
                                    @php
                                        $features = explode(', ', $subscription->description);
                                    @endphp
                                    <ul class="space-y-3">
                                        @foreach($features as $index => $feature)
                                            <li class="flex items-start">
                                                <span class="text-blue-600 dark:text-blue-400 mr-3 mt-1">
                                                    {{ $index + 1 }}-
                                                </span>
                                                <span class="text-gray-700 dark:text-gray-300 text-sm">
                                                    {{ $feature }}
                                                </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="text-center">
                                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                        @if($subscription->price > 0)
                                            Assinar Plano
                                        @else
                                            Começar Grátis
                                        @endif
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="text-center mt-12">
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Todos os planos incluem suporte técnico e atualizações gratuitas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

