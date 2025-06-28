<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Global de Estabelecimentos</title>
    <style>
        #map {
            height: 700px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Mapa Global de Estabelecimentos</h1>

    <div id="map"></div>

    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -23.550520, lng: -46.633308 }, // Coordenadas iniciais (ex: São Paulo)
                zoom: 8,
            });

            // Requisição AJAX para buscar os estabelecimentos
            fetch('{{ route('maps.api.establishments') }}')
                .then(response => response.json())
                .then(establishments => {
                    establishments.forEach(establishment => {
                        const marker = new google.maps.Marker({
                            position: { lat: parseFloat(establishment.latitude), lng: parseFloat(establishment.longitude) },
                            map: map,
                            title: establishment.name,
                        });

                        const infoWindow = new google.maps.InfoWindow({
                            content: `<h3>${establishment.name}</h3><p>${establishment.description || ''}</p><p><a href="{{ route('maps.establishment', ['id' => '']) }}${establishment.id}">Ver Vagas</a></p>`
                        });

                        marker.addListener("click", () => {
                            infoWindow.open(map, marker);
                        });
                    });
                })
                .catch(error => console.error('Erro ao carregar estabelecimentos:', error));
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=SUA_CHAVE_API_DO_Maps&callback=initMap"></script>
</body>
</html>
