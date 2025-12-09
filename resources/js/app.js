import './bootstrap';
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

// Fix icon path issue (Leaflet bug when using Vite/Webpack)
import markerIcon from 'leaflet/dist/images/marker-icon.png';
import markerShadow from 'leaflet/dist/images/marker-shadow.png';

let DefaultIcon = L.icon({
    iconUrl: markerIcon,
    shadowUrl: markerShadow,
});

L.Marker.prototype.options.icon = DefaultIcon;

// Init Map
document.addEventListener('DOMContentLoaded', function () {
    const mapContainer = document.getElementById('map');

    if (mapContainer) {
        const map = L.map('map').setView([-6.200000, 106.816666], 13); // Jakarta

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        L.marker([-6.200000, 106.816666])
            .addTo(map)
            .bindPopup("Lokasi Contoh")
            .openPopup();
    }
});
