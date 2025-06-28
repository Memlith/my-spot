<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mapa Global de Estabelecimentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- The map will be rendered here --}}
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
                        lat: -23.550520,
                        lng: -46.633308
                    }, // Coordenadas iniciais (ex: São Paulo)
                    zoom: 12,
                });

                // Requisição AJAX para buscar os estabelecimentos
                fetch('{{ route('maps.api.establishments') }}')
                    .then(response => response.json())
                    .then(establishments => {
                        establishments.forEach(establishment => {
                            const marker = new google.maps.Marker({
                                position: {
                                    lat: parseFloat(establishment.latitude),
                                    lng: parseFloat(establishment.longitude)
                                },
                                map: map,
                                title: establishment.name,
                            });

                            const infoWindow = new google.maps.InfoWindow({
                                content: `<div class="p-2 font-sans"><h3 class="font-bold text-lg mb-1 text-gray-800">${establishment.name}</h3><p class="text-gray-600 text-sm mb-2">${establishment.description || ''}</p><a href="{{ url('maps/establishment') }}/${establishment.id}" class="text-blue-600 hover:text-blue-800 font-semibold">Ver Vagas</a></div>`
                            });

                            marker.addListener("click", () => {
                                infoWindow.open(map, marker);
                            });
                        });
                    })
                    .catch(error => console.error('Erro ao carregar estabelecimentos:', error));
            }
        </script>
        <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
        </script>
    @endpush
</x-app-layout>
