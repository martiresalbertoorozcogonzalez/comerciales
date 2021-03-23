
if (document.querySelector('#mapa')) {

    document.addEventListener('DOMContentLoaded', () => {

        const lat = document.querySelector('#lat').value === '' ? 14.6263757 : document.querySelector('#lat').value;
        const lng = document.querySelector('#lng').value === '' ? -90.5626015 : document.querySelector('#lng').value;

        const mapa = L.map('mapa').setView([lat, lng], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mapa);

        let marker;

        // agregar el pin
        marker = new L.marker([lat, lng] , {
            draggable: true
        }).addTo(mapa);

        const geocodeService = L.esri.Geocoding.geocodeService();

        //detectar el movimiento del marker
        marker.on('moveend', function(e) {
            marker = e.target;

            const posicion = marker.getLatLng();

            //Centrar autumaticamente
            mapa.panTo( new L.LatLng( posicion.lat, posicion.lng ) );

            // Reverse Geocoding, cuando el usuario reubica el pin
            geocodeService.reverse().latlng(posicion, 16).run(function(error, resultado) {

                console.log(error);
                console.log(resultado);

            })

        });

    });

}
