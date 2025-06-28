<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Vagas em: ') }} {{ $establishment->name }}
            </h2>
            <a href="{{ route('maps.global') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                {{ __('Voltar ao Mapa Global') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div id="map" class="h-[75vh] w-full rounded-lg border border-gray-200 dark:border-gray-700">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function initMap() {
                const map = new google.maps.Map(document.getElementById("map"), {
                    center: {
                        lat: parseFloat('{{ $establishment->latitude }}'),
                        lng: parseFloat('{{ $establishment->longitude }}')
                    },
                    zoom: 18, // Zoom maior para ver os detalhes das vagas
                });

                // Definição dos ícones personalizados para cada estado/tipo de vaga
                const iconBase = 'https://maps.google.com/mapfiles/ms/icons/'; // Base para ícones padrão do Google Maps
                const icons = {
                    regular_available: {
                        icon: iconBase + 'green-dot.png'
                    },
                    regular_occupied: {
                        icon: iconBase + 'red-dot.png'
                    },
                    preferential_available: {
                        icon: iconBase + 'blue-dot.png'
                    },
                    preferential_occupied: {
                        icon: iconBase + 'purple-dot.png'
                    },
                    motorcycle_available: {
                        icon: iconBase + 'yellow-dot.png'
                    },
                    motorcycle_occupied: {
                        icon: iconBase + 'orange-dot.png'
                    }
                };

                fetch('{{ route('maps.api.establishment.spots', ['id' => $establishment->id]) }}')
                    .then(response => response.json())
                    .then(spots => {
                        spots.forEach(spot => {
                            const iconKey = `${spot.type}_${spot.is_available ? 'available' : 'occupied'}`;

                            const marker = new google.maps.Marker({
                                position: {
                                    lat: parseFloat(spot.latitude),
                                    lng: parseFloat(spot.longitude)
                                },
                                map: map,
                                title: spot.name,
                                icon: icons[iconKey] ? icons[iconKey].icon : iconBase +
                                    'red-dot.png' // Fallback
                            });

                            const statusText = spot.is_available ?
                                '<span class="font-semibold text-green-600">Disponível</span>' :
                                '<span class="font-semibold text-red-600">Ocupado</span>';
                            let typeText;
                            switch (spot.type) {
                                case 'regular':
                                    typeText = 'Normal';
                                    break;
                                case 'preferential':
                                    typeText = 'Preferencial';
                                    break;
                                case 'motorcycle':
                                    typeText = 'Motocicleta';
                                    break;
                                default:
                                    typeText = 'Desconhecido';
                            }

                            const infoWindow = new google.maps.InfoWindow({
                                content: `<div class="p-2 font-sans text-gray-800">
                                            <h3 class="font-bold text-lg mb-1">${spot.name}</h3>
                                            <p class="text-sm text-gray-600">${spot.description || ''}</p>
                                            <p class="text-sm mt-2"><span class="font-semibold">Tipo:</span> ${typeText}</p>
                                            <p class="text-sm"><span class="font-semibold">Status:</span> ${statusText}</p>
                                          </div>`
                            });

                            marker.addListener("click", () => {
                                infoWindow.open(map, marker);
                            });
                        });
                    })
                    .catch(error => console.error('Erro ao carregar vagas:', error));
            }
        </script>
        <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
        </script>
    @endpush
</x-app-layout>
