<div id="mapid" style="width:100%; height: 500px;"></div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead>
                            <tr>
                                <th>Nama Kota</th>
                                <th>Nama Kecamatan</th>
                                <th>Tahun</th>
                                <th>Bulan</th>
                                <th>Impervious</th>
                                <th>Hijau Sebagian</th>
                                <th>Hijau</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Kota</th>
                                <th>Nama Kecamatan</th>
                                <th>Tahun</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            // $no = 1;
                            foreach ($hasil->result() as $row) { ?>
                                <tr>
                                    <!-- <td><?php echo $no++ ?></td> -->
                                    <td><?php echo $row->nama_kota; ?></td>
                                    <td><?php echo $row->nama_kecamatan; ?></td>
                                    <td><?php echo $row->tahun; ?></td>
                                    <td><?php echo $row->bulan; ?></td>
                                    <td><?php echo $row->impervious; ?></td>
                                    <td><?php echo $row->hijausebagian; ?></td>
                                    <td><?php echo $row->hijau; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/WebGis/leaflet/leaflet.ajax.js"></script>
<script>
    var bdt = new L.LayerGroup();

    var map = L.map('mapid', {
        center: [-6.5088, 106.8145],
        zoom: 10,
        zoomControl: true,
        layers: []
    });

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(map);

    function popUp(f, l) {
        var out = [];
        out.push("Nama Kecamatan : " + f.properties.Nama);
        l.bindPopup(out.join("<br />"));
        out.push("Luas Wilayah : " + f.properties.Luas + " Km<sup>2");
        l.bindPopup(out.join("<br />"));
        // if (f.properties){
        //     for(key in f.properties){
        //         out.push(key+": "+f.properties[key]);
        //     }
        //     l.bindPopup(out.join("<br />"));
        // }
    }

    var jsonTest = new L.GeoJSON.AJAX(["/WebGis/geojson/bogor-depok-tangsel.geojson"], {
        onEachFeature: popUp,
        style: function(feature) {
            kec = feature.properties.Nama;
            return {
                fillColor: feature.properties.Color,
                fillOpacity: 0.5,
                dashArray: '',
                weight: 1,
                opacity: 1
            }
        }
    }).addTo(map);
</script>