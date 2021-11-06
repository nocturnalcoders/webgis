<div id="mapid" style="width:100%; height: 500px;">

</div>
<script>
    var map = L.map('mapid').setView([-6.171171, 106.665633], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(map);

    // create a red polyline from an array of LatLng points
    var latlngs = [
        [-6.170874, 106.663037],
        [-6.170835, 106.664673],
        [-6.172859, 106.663947]
    ];

    var polyline = L.polyline(latlngs, {
        color: 'red'
    }).addTo(map);

    // zoom the map to the polyline
    map.fitBounds(polyline.getBounds());
</script>