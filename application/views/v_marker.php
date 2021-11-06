<div id="map" style="height: 500px;">

</div>
<script>
    var map = L.map('map').setView([-6.171171, 106.665633], 16);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(map);

    var icon1 = L.icon({
        iconUrl: '<?= base_url('icon/icon-blue.png') ?>',
        iconSize: [60, 60],
        iconAnchor: [22, 65],
        popupAnchor: [-3, -55]
    });

    var lokasi1 = L.marker([-6.171171, 106.665633], {icon: icon1}).bindPopup("<b>Ini Lokasi 1</b>").addTo(map).openPopup();
    var lokasi2 = L.marker([-6.174371, 106.664217], {icon: icon1}).bindPopup("<b>Ini Lokasi 2</b>").addTo(map);
    var lokasi3 = L.marker([-6.171171, 106.666148], {icon: icon1}).bindPopup("<b>Ini Lokasi 3</b>").addTo(map);
    var lokasi4 = L.marker([-6.175128, 106.664592], {icon: icon1}).bindPopup("<b>Ini Lokasi 4</b>").addTo(map);
    var lokasi5 = L.marker([-6.174371, 106.663047], {icon: icon1}).bindPopup("<b>Ini Lokasi 5</b>").addTo(map);
</script>