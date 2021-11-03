<div id="map" style="height: 500px;">

</div>
<script>
    var map = L.map('map').setView([-6.1715335, 106.6552903], 16);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(map);

    var icon1 = L.icon({
        iconUrl: '<?= base_url('icon/icon-blue.png') ?>',
        iconSize: [100, 95],
        iconAnchor: [22, 94],
        popupAnchor: [-3, -76]
    });

    var lokasi1 = L.marker([-6.1729667, 106.6605813], {
        icon: icon1
    }).bindPopup("<b>Ini Lokasi 1</b").addTo(map).openPopUp();
    var lokasi2 = L.marker([-6.1702487, 106.6538743], {
        icon: icon1
    }).bindPopup("<b>Ini Lokasi 2/b").addTo(map);
    var lokasi3 = L.marker([-6.1684963, 106.6504687], {
        icon: icon1
    }).bindPopup("<b>Ini Lokasi 3</b").addTo(map);
    var lokasi4 = L.marker([-6.170302, 106.6537778], {
        icon: icon1
    }).bindPopup("<b>Ini Lokasi 4</b").addTo(map);
    var lokasi5 = L.marker([-6.1698327, 106.652308], {
        icon: icon1
    }).bindPopup("<b>Ini Lokasi 5</b").addTo(map);
</script>