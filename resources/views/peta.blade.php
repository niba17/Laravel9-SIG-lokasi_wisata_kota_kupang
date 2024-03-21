<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('template') }}/assets/images/favicon.svg" type="image/x-icon" />
    <title>SIG | Peta</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/bootstrap.min.css" />
    {{-- <link rel="stylesheet" href="{{ asset('template') }}/assets/css/lineicons.css" />
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/quill/bubble.css" />
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/quill/snow.css" />
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/morris.css" />
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/datatable.css" /> --}}
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/main.css" />

    <!-- Jquery JS -->
    <script type="text/javascript" src="{{ asset('/library') }}/jquery361.js"></script>

    <!-- Leaflet JS -->
    <link rel="stylesheet" href="{{ asset('/plugin') }}/leaflet180/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />

    <!-- Leaflet's Routing Machine -->
    <link rel="stylesheet" href="{{ asset('plugin') }}/leaflet-routing-machine/dist/leaflet-routing-machine.css" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('/plugin') }}/fontawesomeFree620/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('/template') }}/plugins/fontawesome-free/css/all.min.css"> --}}

</head>

<body>



    <!-- ========== section start ========== -->
    <section>
        <style>
            .legend {
                line-height: 18px;
                color: #555;
            }

            .legend i {
                width: 18px;
                height: 18px;
                float: left;
                margin-right: 8px;
                opacity: 0.7;
            }

            .info {
                padding: 6px 8px;
                font: 14px/16px Arial, Helvetica, sans-serif;
                background: white;
                background: rgba(255, 255, 255, 0.8);
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                border-radius: 5px;
            }
        </style>

        <div class="container-fluid py-3">

            <!-- Invoice Wrapper Start -->
            <div class="invoice-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="invoice-card card-style mb-30">
                            <div class="invoice-header pb-3">
                                <div class="invoice-for d-flex">
                                    <a href="/" class="btn btn-primary me-2"><i
                                            class="fa-solid fa-caret-left me-1"></i>kembali</a>
                                    <h2>Peta Persebaran Lokasi Wisata di Rote Ndao</h2>
                                    {{-- <p class="text-sm">
                                        Admin Dashboard Design & Development
                                    </p> --}}
                                </div>
                            </div>
                            {{-- <div class="note-wrapper warning-alert pt-4">
                                <div class="alert">
                                    <h5 class="text-bold mb-15">Notes:</h5>
                                    <p class="text-sm text-gray">
                                        All accounts are to be paid within 7 days from receipt
                                        of invoice. To be paid by cheque or credit card or
                                        direct payment online. If account is not paid within 7
                                        days the credits details supplied as confirmation of
                                        work undertaken will be charged the agreed quoted fee
                                        noted above.
                                    </p>
                                </div>
                            </div> --}}
                            <div class="col-12 mt-3">
                                <input type="checkbox" class="form-check-input" id="tampilSemua">
                                <label class="form-check-label" for="tampilSemua">Tampilkan semua lokasi wisata
                                    <span class="text-muted fw-bold"> ({{ count($lokasi_wisata) }})
                                    </span>
                                </label>
                            </div>
                            <div class="d-flex mt-3">
                                <div class="col-lg-3 me-2">
                                    <div class="select-style-1">
                                        <div class="select-position">
                                            <select id="kriteria_id">
                                                <option value="">Pilih Kriteria ...</option>
                                                @foreach ($kriteria as $item_kriteria)
                                                    <option value="{{ $item_kriteria->id }}">
                                                        {{ $item_kriteria->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="select-style-1">
                                        <div class="select-position">
                                            <select id="kecamatan_id">
                                                <option value="">Pilih Kecamatan ...</option>
                                                @foreach ($kecamatan as $item_kecamatan)
                                                    <option value="{{ $item_kecamatan->id }}">
                                                        {{ $item_kecamatan->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-12">
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <div id="map" style="height: 690px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="table">
                                <div class="col-lg-12">
                                    <div class="table-wrapper table-responsive">
                                        <table class="table table-striped table-bordered" id="myTable">
                                            <thead class="table-primary">
                                                <tr class="text-sm">
                                                    <th><span class="ms-2">No</span></th>
                                                    <th><span class="ms-2">Nama</span></th>
                                                    <th><span class="ms-2">Kriteria</span></th>
                                                    <th><span class="ms-2">Kecamatan</span></th>
                                                    <th><span class="ms-2">Alamat</span></th>
                                                    <th><span class="ms-2">Latitude</span></th>
                                                    <th><span class="ms-2">Longitude</span></th>
                                                    <th><span class="ms-2">Fasilitas</span></th>
                                                    <th><span class="ms-2">Deskripsi</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td valign="top" colspan="9" class="text-center"><span
                                                            class="mb-4">Pilih salah
                                                            satu polygon kecamatan.</span></td>
                                                </tr>
                                                {{-- @foreach ($lokasi_wisata as $item_lokasi_wisata)
                                                    <tr class="text-sm">
                                                        <td class="fw-bold">
                                                            <span class="ms-2">{{ $loop->iteration }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="ms-2">{{ $item_lokasi_wisata->nama }}</span>
                                                        </td>
                                                        <td>
                                                            @if ($item_lokasi_wisata->kriteria !== null)
                                                                <span
                                                                    class="ms-2">{{ $item_lokasi_wisata->kriteria->nama }}</span>
                                                            @else
                                                                <span class="text-danger text-sm ms-2">Belum
                                                                    dipilih!</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item_lokasi_wisata->kecamatan !== null)
                                                                <span
                                                                    class="ms-2">{{ $item_lokasi_wisata->kecamatan->nama }}</span>
                                                            @else
                                                                <span class="text-danger text-sm ms-2">Belum
                                                                    dipilih!</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="ms-2">{{ $item_lokasi_wisata->alamat }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="ms-2">{{ $item_lokasi_wisata->lat }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="ms-2">{{ $item_lokasi_wisata->lng }}</span>
                                                        </td>
                                                        <td>
                                                            @if (count($item_lokasi_wisata->lokasi_wisata_fasilitas) > 0)
                                                                <span class="ms-2">
                                                                    @foreach ($item_lokasi_wisata->lokasi_wisata_fasilitas as $itemF)
                                                                        <li>{{ $itemF->fasilitas->nama }}</li>
                                                                    @endforeach
                                                                </span>
                                                            @else
                                                                <span class="text-danger text-sm ms-2">Belum
                                                                    dipilih!</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item_lokasi_wisata->deskripsi !== null)
                                                                <span class="ms-2">
                                                                    {{ $item_lokasi_wisata->deskripsi }}
                                                                </span>
                                                            @else
                                                                <span class="text-danger text-sm ms-2">Belum
                                                                    diisi!</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>`
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- ENd Col -->



                </div>
                <!-- End Row -->

            </div>
            <!-- Invoice Wrapper End -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    <style>
        .modal-center {
            /* position: absolute;
                    left: 50%; */
            top: 30%;
            /* transform: translate(-50%, -50%); */
        }
    </style>

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{ asset('template') }}/assets/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{ asset('template') }}/assets/js/Chart.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/apexcharts.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/dynamic-pie-chart.js"></script>
    <script src="{{ asset('template') }}/assets/js/moment.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/fullcalendar.js"></script>
    <script src="{{ asset('template') }}/assets/js/jvectormap.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/world-merc.js"></script>
    <script src="{{ asset('template') }}/assets/js/polyfill.js"></script>
    <script src="{{ asset('template') }}/assets/js/quill.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/datatable.js"></script>
    <script src="{{ asset('template') }}/assets/js/Sortable.min.js"></script> --}}
    <script src="{{ asset('template') }}/assets/js/main.js"></script>

    <!-- Leaflet JS -->
    <script src="{{ asset('/plugin') }}/leaflet180/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

    <!-- Leaflet's Routing Machine -->
    <script src="{{ asset('plugin') }}/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

    <!-- LeafletAJAX -->
    <script type="text/javascript" src="{{ asset('/plugin') }}/leafletAJAX/leaflet.ajax.js"></script>

    <script>
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });

        // var streets = L.tileLayer(
        //     'https://api.mapbox.com/styles/v1/johnmichel/ciobach7h0084b3nf482gfvvr/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoiam9obm1pY2hlbCIsImEiOiJjaW9iOW1vbHUwMGEzdnJseWNranhiMHpxIn0.leVOjMBazNl6v4h9MT7Glw', {
        //         attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        //         maxZoom: 18
        //     });

        var satellite = L.tileLayer(
            'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {

                maxZoom: 18,
            });

        var latLng = [-10.69484, 123.08201]

        var map = L.map('map', {
            center: latLng,
            zoom: 10,
            layers: [osm]
        });

        var markerLokWis = []
        var marker;

        var baseLayers = {
            'OpenStreetMap': osm,
            // 'Jalanan': streets,
            'Satelit': satellite
        }

        var layerControl = L.control.layers(baseLayers).addTo(map)

        var removeRoutingControl = function() {
            if (control != null) {
                map.removeControl(control);
                control = null;
            }
        }

        var removeMarker = function() {
            $.each(markerLokWis, function(index) {
                map.removeLayer(markerLokWis[index]);
            })
        }

        var control = L.Routing.control({
            waypoints: [latLng],
            routeWhileDragging: true,
            createMarker: function(i, waypoint, n) {
                var urlIcon;
                if (i == 0) {
                    urlIcon = "{{ asset('storage') }}" + '/images/marker/startMarker.png';
                } else if ((i + 1) == n) {
                    urlIcon = "{{ asset('storage') }}" + '/images/marker/finishMarker.png';
                } else {
                    urlIcon = "{{ asset('storage') }}" + '/images/marker/footstepsMarker.png';
                }
                marker = L.marker(waypoint.latLng, {
                    draggable: true,
                    bounceOnAdd: false,
                    icon: L.icon({
                        iconUrl: urlIcon,
                        iconSize: [28, 29],
                        iconAnchor: [10, 20],
                        popupAnchor: [2, -16],
                        shadowSize: [68, 45],
                        shadowAnchor: [22, 94]
                    })
                });
                return marker;
            }
        })
        control.addTo(map);

        var iconLokWis = new L.icon({
            iconUrl: "{{ asset('storage') }}" + '/images/marker/finishMarker.png',
            iconSize: [28, 29],
            iconAnchor: [10, 20],
            popupAnchor: [2, -16],
            shadowSize: [68, 45],
            shadowAnchor: [22, 94]
        })


        var kecId
        @foreach ($kecamatan as $rowKec)

            @if ($rowKec->geojson != null)

                new L.GeoJSON.AJAX(['{{ asset('storage') }}' + "/file/" + "{{ $rowKec->geojson }}"], {
                    style: function(feature) {
                        return {
                            opacity: 0.6,
                            color: '{{ $rowKec->warna_fill }}',
                            fillOpacity: 0.5,
                            fillColor: '{{ $rowKec->warna_fill }}',
                            weight: 1
                        }
                    },
                    onEachFeature: function(f, l) {
                        l.on({
                            click: function() {
                                test('{{ $rowKec->id }}')
                            },
                            mouseover: highlightFeature1,
                            mouseout: resetHighlight1
                            // click: zoomToFeature
                        }).addTo(map)
                        var out = []
                        if (f.properties) {
                            for (key in f.properties) {
                                if (key == 'WADMKC') {
                                    out.push("<b>KECAMATAN : </b>" + "{{ $rowKec->nama }}")
                                }
                            }
                            l.bindPopup(out.join("<br />"))
                        }
                    }
                }).addTo(map)
            @endif
        @endforeach

        function test(idKec) {
            $.ajax({
                url: "{{ route('kecamatan-request') }}",
                method: 'GET',
                cache: false,
                dataType: 'json',
                success: function(data) {
                    var newData = []
                    var i = 0
                    var html = ''
                    data[0].forEach(element => {

                        if (element.id == idKec) {
                            if (element.lokasi_wisata.length > 0) {
                                element.lokasi_wisata.forEach(element => {


                                    html += `<tr class="text-sm">
                                        <td class="fw-bold">
                                            <span class="ms-2">${++i}</span>
                                        </td>
                                        <td>
                                            <span class="ms-2">${element.nama}</span>
                                        </td>
                                        <td>
                                            ${
                                                element.kriteria !== null
                                                ? `<span class="ms-2">${element.kriteria.nama}</span>`
                                                : `<span class="text-danger text-sm ms-2">Belum dipilih!</span>`
                                            }
                                        </td>
                                        <td>
                                            ${
                                                element.kecamatan !== null
                                                ? `<span class="ms-2">${element.kecamatan.nama}</span>`
                                                : `<span class="text-danger text-sm ms-2">Belum dipilih!</span>`
                                            }
                                        </td>
                                        <td>
                                            <span
                                                class="ms-2">${element.alamat}</span>
                                        </td>
                                        <td>
                                            <span class="ms-2">${element.lat}</span>
                                        </td>
                                        <td>
                                            <span class="ms-2">${element.lng}</span>
                                        </td>
                                        <td>
                                            ${
                                                element.lokasi_wisata_fasilitas && element.lokasi_wisata_fasilitas.length > 0
                                                    ? `<span class="ms-2">
                                                                                                                                                                                                                                                                                                                                                                ${element.lokasi_wisata_fasilitas.map(item => 
                                                                                                                                                                                                                                                                                                                                                                    `<li>${item.fasilitas.nama}</li>`
                                                                                                                                                                                                                                                                                                                                                                    ).join('')}
                                                                                                                                                                                                                                                                                                                                                                </span>`
                                                    : `<span class="text-danger text-sm ms-2">Belum dipilih!</span>`
                                            }
                                        </td>
                                        <td>
                                            ${
                                                element.deskripsi !== null
                                                    ? `<span class="ms-2">${element.deskripsi.length > 50
                                                                                                                                                                                                                                                ? element.deskripsi.substring(0, 50) + "..."
                                                                                                                                                                                                                                                : element.deskripsi
                                                                                                                                                                                                                                            }</span>`
                                                    : `<span class="text-danger text-sm ms-2">Belum diisi!</span>`
                                                }
                                        </td>                                
                                    </tr>`
                                })
                            } else {

                                html =
                                    `<tr class="odd"><td valign="top" colspan="9" class="text-center"><span class="mb-4">Tidak ada lokasi wisata.</span></td></tr>`
                            }

                        }
                    });
                    $("tbody").html(html);
                }
            })
        }

        function highlightFeature1(e) {
            var layer = e.target;

            layer.setStyle({
                weight: 3,
                opacity: 0.9,
                // color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer.bringToFront();
        }

        function resetHighlight1(e) {
            var layer = e.target;

            layer.setStyle({
                opacity: 0.6,
                fillOpacity: 0.5,
                weight: 1
            });

            layer.bringToFront();
        }

        //legend start

        var legend = L.control({
            position: 'bottomleft'
        });

        legend.onAdd = function(map) {
            var div = L.DomUtil.create('div', 'info legend');
            div.innerHTML = '<span class="text-dark fw-bold mb-3 h4">Legenda Peta</span><br>';

            var markers = <?php echo json_encode($kriteria); ?>;

            markers.forEach(function(rowKat) {
                div.innerHTML += '<img class="me-2 mb-1" src="' + "{{ asset('storage') }}" + '/images/' +
                    rowKat
                    .marker +
                    '" width="15">' + '<span class="text-dark fw-bold">' + rowKat.nama + '</span><br>';
            });

            return div;
        };


        legend.addTo(map);

        //legend end

        // $('#posisiOtomatis').change(function() {

        //     // if (control != null)
        //     //     removeRoutingControl()




        //     if ($(this).is(':checked')) {
        //         geoLocation();

        //         function geoLocation() {
        //             if (navigator.geolocation) {
        //                 navigator.geolocation.getCurrentPosition(showPosition);
        //             } else {
        //                 x.innerHTML = "Gagal mengambil koordinat lokasi";
        //             }
        //         }

        //         function showPosition(position) {

        //             var latLng = [position.coords.latitude, position.coords.longitude];
        //             control.spliceWaypoints(0, 1, latLng);

        //             map.panTo(latLng);
        //         }
        //     } else {



        //         geoLocation();

        //         function geoLocation() {
        //             if (navigator.geolocation) {
        //                 navigator.geolocation.getCurrentPosition(showPosition);
        //             } else {
        //                 x.innerHTML = "Gagal mengambil koordinat lokasi";
        //             }
        //         }

        //         function showPosition(position) {

        //             // var latLng = latLng;
        //             control.spliceWaypoints(0, 1, latLng);

        //             map.panTo(latLng);
        //         }

        //         map.panTo(latLng);
        //     }
        // });

        $('#tampilSemua').on('change', function() {

            // if (control != null)
            //     removeRoutingControl()


            var index = 0
            if ($(this).is(':checked')) {
                @foreach ($lokasi_wisata as $item)

                    markerLokWis[index] = L.marker(['{{ $item->lat }}', '{{ $item->lng }}'], {
                        icon: new L.icon({
                            iconUrl: "{{ asset('storage') }}" + '/images/' +
                                `{{ $item->kriteria->marker }}`,
                            iconSize: [28, 29],
                            iconAnchor: [10, 20],
                            popupAnchor: [2, -16],
                            shadowSize: [68, 45],
                            shadowAnchor: [22, 94]
                        })
                    }).bindPopup('<img src=' + `{{ asset('/storage') }}` + '/images/' +
                        `{{ $item->gambar }}` + " style='width:250px;' alt='{{ $item->nama }}'><br>" +
                        '</a><br><b>Nama :</b> ' + `{{ $item->nama }}` +
                        '<br><b>Kecamatan :</b> ' + `{{ $item->kecamatan->nama }}<br>` +
                        '<b>Kriteria :</b> ' + `{{ $item->kriteria->nama }}<br>` +
                        '<b>Alamat :</b> ' + `{{ $item->alamat }}` +
                        '<br><b>Fasilitas :</b> ' +
                        @if (isset($item->lokasi_wisata_fasilitas) && count($item->lokasi_wisata_fasilitas) > 0)
                            @foreach ($item->lokasi_wisata_fasilitas as $item_lokasi_wisata_fasilitas)
                                `<li>{{ $item_lokasi_wisata_fasilitas->fasilitas->nama }}</li>` +
                            @endforeach
                        @else
                            `Fasilitas belum dipilih!` +
                        @endif
                        '<hr><button type="button" class="btn btn-primary btn-sm" onclick="rute(' +
                        `{{ $item->lat }}` + ',' + `{{ $item->lng }}` + ')">Rute</button>'
                    ).addTo(map)
                    index++
                @endforeach
            } else {

                $.each(markerLokWis, function(index) {
                    map.removeLayer(markerLokWis[index]);
                });
            }
        })

        function rute(lat, lng) {
            // removeMarker()
            var latLng = L.latLng(lat, lng);
            control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
        }

        var idKriteria = ''
        var namaKriteria = ''

        $("#kriteria_id").change(function() {

            var idKec2 = $("#kecamatan_id option:selected").val()
            var namaKec = ''
            @foreach ($kecamatan as $rowKec2)
                if (idKec2 == '{{ $rowKec2->id }}') {
                    namaKec = '{{ $rowKec2->nama }}'
                }
            @endforeach

            var html
            @foreach ($kecamatan as $rowKec3)
                html += "<option value='{{ $rowKec3->id }}'>{{ $rowKec3->nama }}</option>"
            @endforeach
            $("#kecamatan_id").html("<option value='' selected>Pilih Kecamatan ...</option>" + html)

            // if (control != null)
            //     removeRoutingControl()

            idKriteria = $(this).val();
            var selectedOption = $("#kriteria_id option:selected");
            namaKriteria = selectedOption.text();

            $.each(markerLokWis, function(index) {
                map.removeLayer(markerLokWis[index]);
            });

            var index = 0

            @foreach ($lokasi_wisata as $item)

                if (idKriteria == '{{ $item->kriteria_id }}') {

                    markerLokWis[index] = L.marker(['{{ $item->lat }}', '{{ $item->lng }}'], {
                        icon: new L.icon({
                            iconUrl: "{{ asset('storage') }}" + '/images/' +
                                `{{ $item->kriteria->marker }}`,
                            iconSize: [28, 29],
                            iconAnchor: [10, 20],
                            popupAnchor: [2, -16],
                            shadowSize: [68, 45],
                            shadowAnchor: [22, 94]
                        })
                    }).bindPopup('<img src=' + `{{ asset('/storage') }}` + '/images/' +
                        `{{ $item->gambar }}` + " style='width:250px;' alt='{{ $item->nama }}'><br>" +
                        '</a><br><b>Nama :</b> ' + `{{ $item->nama }}` +
                        '<br><b>Kecamatan :</b> ' + `{{ $item->kecamatan->nama }}<br>` +
                        '<b>Kriteria :</b> ' + `{{ $item->kriteria->nama }}<br>` +
                        '<b>Alamat :</b> ' + `{{ $item->alamat }}` +
                        '<br><b>Fasilitas :</b> ' +
                        @if (isset($item->lokasi_wisata_fasilitas) && count($item->lokasi_wisata_fasilitas) > 0)
                            @foreach ($item->lokasi_wisata_fasilitas as $item_lokasi_wisata_fasilitas)
                                `<li>{{ $item_lokasi_wisata_fasilitas->fasilitas->nama }}</li>` +
                            @endforeach
                        @else
                            `Fasilitas belum dipilih!` +
                        @endif
                        '<hr><button type="button" class="btn btn-primary btn-sm" onclick="rute(' +
                        `{{ $item->lat }}` + ',' + `{{ $item->lng }}` + ')">Rute</button>'
                    ).addTo(map)
                    index++

                }
            @endforeach
        })

        $("#kecamatan_id").change(function() {
            `<img src=' + '{{ asset('/storage') }}' + '/images/' +
                        '{{ $item->marker }}' + " style='width:250px;' alt='{{ $item->nama }}'>`

            // if (control != null)
            //     removeRoutingControl()

            if (namaKriteria != '') {
                var idKec2 = $("#kecamatan_id option:selected").val()
                var namaKec = ''
                @foreach ($kecamatan as $rowKec2)
                    if (idKec2 == '{{ $rowKec2->id }}') {
                        namaKec = '{{ $rowKec2->nama }}'
                    }
                @endforeach

                var html
                @foreach ($kecamatan as $rowKec3)
                    if (idKec2 == '{{ $rowKec3->id }}') {
                        html += "<option value='{{ $rowKec3->id }}' selected>{{ $rowKec3->nama }}" + " (" +
                            namaKriteria + ")" + "</option>"
                    } else {
                        html += "<option value='{{ $rowKec3->id }}'>{{ $rowKec3->nama }}</option>"
                    }
                @endforeach
                $("#kecamatan_id").html(html)

            } else {
                $("#kecamatan_id option:selected").text(namaKec);
            }

            var idKecamatan = $(this).val();

            $.each(markerLokWis, function(index) {
                map.removeLayer(markerLokWis[index]);
            });

            var index = 0

            @foreach ($lokasi_wisata as $item)

                if (idKriteria != '') {


                    if (idKriteria == {{ $item->kriteria_id }}) {

                        // if (idKriteria != '') {

                        console.log(namaKriteria);



                        // } else {
                        //     $('#kecamatan_id').text($(this).text() + ' ');
                        // }

                        if (idKecamatan == '{{ $item->kecamatan_id }}') {

                            markerLokWis[index] = L.marker(['{{ $item->lat }}', '{{ $item->lng }}'], {
                                icon: new L.icon({
                                    iconUrl: "{{ asset('storage') }}" + '/images/' +
                                        `{{ $item->kriteria->marker }}`,
                                    iconSize: [28, 29],
                                    iconAnchor: [10, 20],
                                    popupAnchor: [2, -16],
                                    shadowSize: [68, 45],
                                    shadowAnchor: [22, 94]
                                })
                            }).bindPopup('<img src=' + `{{ asset('/storage') }}` +
                                '/images/' +
                                `{{ $item->gambar }}` +
                                " style='width:250px;' alt='{{ $item->nama }}'><br>" +
                                '</a><br><b>Nama :</b> ' + `{{ $item->nama }}` +
                                '<br><b>Kecamatan :</b> ' + `{{ $item->kecamatan->nama }}<br>` +
                                '<b>Kriteria :</b> ' + `{{ $item->kriteria->nama }}<br>` +
                                '<b>Alamat :</b> ' + `{{ $item->alamat }}` +
                                '<br><b>Fasilitas :</b> ' +
                                @if (isset($item->lokasi_wisata_fasilitas) && count($item->lokasi_wisata_fasilitas) > 0)
                                    @foreach ($item->lokasi_wisata_fasilitas as $item_lokasi_wisata_fasilitas)
                                        `<li>{{ $item_lokasi_wisata_fasilitas->fasilitas->nama }}</li>` +
                                    @endforeach
                                @else
                                    `Fasilitas belum dipilih!` +
                                @endif
                                '<hr><button type="button" class="btn btn-primary btn-sm" onclick="rute(' +
                                `{{ $item->lat }}` + ',' + `{{ $item->lng }}` + ')">Rute</button>'
                            ).addTo(map)
                            index++

                        }

                    }

                } else {

                    if (idKecamatan == '{{ $item->kecamatan_id }}') {

                        markerLokWis[index] = L.marker(['{{ $item->lat }}', '{{ $item->lng }}'], {
                            icon: new L.icon({
                                iconUrl: "{{ asset('storage') }}" + '/images/' +
                                    `{{ $item->kriteria->marker }}`,
                                iconSize: [28, 29],
                                iconAnchor: [10, 20],
                                popupAnchor: [2, -16],
                                shadowSize: [68, 45],
                                shadowAnchor: [22, 94]
                            })
                        }).bindPopup('<img src=' + `{{ asset('/storage') }}` + '/images/' +
                            `{{ $item->gambar }}` +
                            " style='width:250px;' alt='{{ $item->nama }}'><br>" +
                            '</a><br><b>Nama :</b> ' + `{{ $item->nama }}` +
                            '<br><b>Kecamatan :</b> ' + `{{ $item->kecamatan->nama }}<br>` +
                            '<b>Kriteria :</b> ' + `{{ $item->kriteria->nama }}<br>` +
                            '<b>Alamat :</b> ' + `{{ $item->alamat }}` +
                            '<br><b>Fasilitas :</b> ' +
                            @if (isset($item->lokasi_wisata_fasilitas) && count($item->lokasi_wisata_fasilitas) > 0)
                                @foreach ($item->lokasi_wisata_fasilitas as $item_lokasi_wisata_fasilitas)
                                    `<li>{{ $item_lokasi_wisata_fasilitas->fasilitas->nama }}</li>` +
                                @endforeach
                            @else
                                `Fasilitas belum dipilih!` +
                            @endif
                            '<hr><button type="button" class="btn btn-primary btn-sm" onclick="rute(' +
                            `{{ $item->lat }}` + ',' + `{{ $item->lng }}` + ')">Rute</button>'
                        ).addTo(map)
                        index++

                    }

                }
            @endforeach
        })
    </script>

</body>

</html>
