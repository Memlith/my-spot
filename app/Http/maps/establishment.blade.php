<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Vagas - {{ $establishment->name }}</title>
    <style>
        #map {
            height: 700px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Vagas em {{ $establishment->name }}</h1>
    <a href="{{ route('maps.global') }}">Voltar ao Mapa Global</a>

    <div id="map"></div>

    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: parseFloat('{{ $establishment->latitude }}'), lng: parseFloat('{{ $establishment->longitude }}') },
                zoom: 18, // Zoom maior para ver os detalhes das vagas
            });

            // Definição dos ícones personalizados para cada estado/tipo de vaga
            const iconBase = 'http://maps.google.com/mapfiles/ms/icons/'; // Base para ícones padrão do Google Maps
            const icons = {
                // Vagas Regulares
                regular_available: {
                    icon: iconBase + 'green-dot.png' // Verde para livre
                },
                regular_occupied: {
                    icon: iconBase + 'red-dot.png' // Vermelho para ocupada
                },
                // Vagas Preferenciais
                preferential_available: {
                    icon: iconBase + 'blue-dot.png' // Azul para livre
                },
                preferential_occupied: {
                    icon: iconBase + 'blue-dot.png' // Azul para ocupada (poderia ser um azul mais escuro se preferir)
                },
                // Vagas de Motocicleta
                motorcycle_available: {
                    icon: iconBase + 'orange-dot.png' // Laranja para livre
                },
                motorcycle_occupied: {
                    icon: iconBase + 'orange-dot.png' // Laranja para ocupada (poderia ser um laranja mais escuro se preferir)
                }
            };

            fetch('/maps/api/establishment/{{ $establishment->id }}/spots')
                .then(response => response.json())
                .then(spots => {
                    spots.forEach(spot => {
                        let iconKey;
                        // Constrói a chave do ícone baseada na disponibilidade e no tipo
                        if (spot.is_available) {
                            iconKey = spot.type + '_available';
                        } else {
                            iconKey = spot.type + '_occupied';
                        }

                        const marker = new google.maps.Marker({
                            position: { lat: parseFloat(spot.latitude), lng: parseFloat(spot.longitude) },
                            map: map,
                            title: spot.name,
                            icon: icons[iconKey] ? icons[iconKey].icon : iconBase + 'red-dot.png' // Fallback para vermelho se o tipo/estado não for mapeado
                        });

                        const statusText = spot.is_available ? 'Disponível' : 'Ocupado';
                        let typeText;
                        switch(spot.type) {
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
                            content: `<h3>${spot.name}</h3>
                                      <p>${spot.description || ''}</p>
                                      <p>Tipo: ${typeText}</p>
                                      <p>Status: ${statusText}</p>`
                        });

                        marker.addListener("click", () => {
                            infoWindow.open(map, marker);
                        });
                    });
                })
                .catch(error => console.error('Erro ao carregar vagas:', error));
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=SUA_CHAVE_API_DO_Maps&callback=initMap"></script>
</body>
</html>
