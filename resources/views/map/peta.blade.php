<!doctype html>
<html lang="en">

<!-- Head -->

<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('template') }}/dist/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('template') }}/dist/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('template') }}/dist/assets/images/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="{{ asset('template') }}/dist/assets/images/favicon/safari-pinned-tab.svg"
        color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('template') }}/dist/assets/css/libs.bundle.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('template') }}/dist/assets/css/theme.bundle.css" />

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
            /**
          * Reinstate scrolling for non-JS clients
          */
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>

    <!-- Jquery JS -->
    <script type="text/javascript" src="{{ asset('/library') }}/jquery361.js"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('/plugin') }}/fontawesomeFree620/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('/template') }}/plugins/fontawesome-free/css/all.min.css"> --}}

    <!-- SweetAlert2 -->
    <script src="{{ asset('/plugin') }}/sweetAlert2/sweetalert2.all.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin') }}/DataTables/datatables.min.css" />
    <script type="text/javascript" src="{{ asset('/plugin') }}/DataTables/datatables.min.js"></script>

    <!-- Leaflet JS -->
    <link rel="stylesheet" href="{{ asset('/plugin') }}/leaflet180/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />

    <script src="{{ asset('/plugin') }}/leaflet180/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>



    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('template') }}/dist/assets/css/libs.bundle.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('template') }}/dist/assets/css/theme.bundle.css" />

    <!-- Leaflet's Routing Machine -->
    <link rel="stylesheet" href="{{ asset('plugin') }}/leaflet-routing-machine/dist/leaflet-routing-machine.css" />

    <script src="{{ asset('plugin') }}/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
    <!-- LeafletAJAX -->
    <script type="text/javascript" src="{{ asset('/plugin') }}/leafletAJAX/leaflet.ajax.js"></script>

    <!-- Page Title -->
    <title>BAYES | Peta</title>

</head>


<!-- Page Content -->
<main>

    <!-- Content-->
    <section class="container-fluid p-4">

        <div class="card mb-3">
            <div class="card-header">
                <div class="d-flex">
                    <a href="/" class="btn btn-primary btn-md me-2 py-4"><i class="fa-solid fa-caret-left"></i>
                        Kembali</a>
                    <div class="my-auto">
                        <h6 class="card-title">Cari puskesmas berdasarkan kecamatan dan kelurahan</h6>
                        <li>
                            <span class="text-muted m-0 small">Untuk memulai pencarian, ketikkan nama puskesmas atau
                                pilih
                                letak
                                kecamatan dan kelurahan
                                tempat puskesmas yang ingin
                                dicari pada elemen input dibawah.
                            </span>
                        </li>
                        <li>
                            <span class="text-muted m-0 small">Jika posisi otomatis marker merah <img
                                    src="{{ asset('storage') }}/images/marker/startMarker.png" width="20px"
                                    alt="">
                                tidak
                                akurat, anda dapat
                                memindahkan
                                marker secara manual.
                            </span>
                        </li>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{-- <p>Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p> --}}
                <div class="row">
                    <div class="col-lg-3">
                        <label for="cariPuskes" class="form-label">Cari Puskesmas</label>
                        <form class="d-none d-md-flex rounded px-3 py-1" style="background-color:#d5ebf2;">
                            <input class="form-control border-0 bg-transparent px-0 py-2 me-5 fw-bolder" type="search"
                                placeholder="..." aria-label="Search" id=cariPuskes>
                            <button class="btn btn-link p-0 text-muted" type="button" id="buttCariPuskes"><i
                                    class="ri-search-2-line"></i></button>
                        </form>
                    </div>
                    <div class="col-lg-3">

                        <label for="kecamatan_id" class="form-label">Kecamatan</label>
                        <select class="form-select @error('kecamatan_id') is-invalid @enderror" id="kecamatan_id"
                            name="kecamatan_id">
                            <option value="" selected disabled>Pilih Kecamatan ...
                            </option>
                            @foreach ($kecamatan as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('kecamatan_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="col-lg-3">

                        <label for="kelurahan_id" class="form-label">Kelurahan</label>
                        <select class="form-select @error('kelurahan_id') is-invalid @enderror"
                            aria-label="Default select example" id="kelurahan_id" name="kelurahan_id">
                            <option value="" selected disabled>Pilih Kecamatan terlebih dahulu ...
                            </option>
                        </select>
                        @error('kelurahan_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="col-lg-3">

                        <label for="puskesmas" class="form-label">Puskesmas</label>
                        <select class="form-select @error('puskesmas') is-invalid @enderror"
                            aria-label="Default select example" id="puskesmas" name="puskesmas">
                            <option value="" selected disabled>Pilih Kelurahan terlebih dahulu ...
                            </option>
                        </select>
                        @error('puskesmas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="d-flex mt-3 row">
                        <div class="col-lg-3 me-1">
                            <input type="checkbox" class="form-check-input" id="tampilSemua">
                            <label class="form-check-label" for="tampilSemua">Tampilkan semua puskesmas <span
                                    class="text-muted fw-bold"> ({{ count($puskesmas) }})
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <input type="checkbox" class="form-check-input" id="posisiOtomatis">
                            <label class="form-check-label" for="posisiOtomatis">Posisi otomatis
                            </label>
                            <div id="emailHelp" class="form-text fst-italic">akurasi koordinat bergantung pada
                                koneksi
                                jaringan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div id="map" style="height: 690px;"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- / Content-->

    {{-- <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title">Default example</h6>

        </div>
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>
        </div>
    </div> --}}

</main>
<!-- /Page Content -->

<style>
    .modal-center {
        /* position: absolute;
                left: 50%; */
        top: 30%;
        /* transform: translate(-50%, -50%); */
    }
</style>

<!-- Vendor JS -->
<script src="{{ asset('template') }}/dist/assets/js/vendor.bundle.js"></script>

<!-- Theme JS -->
<script src="{{ asset('template') }}/dist/assets/js/theme.bundle.js"></script>

<script>
    var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    });
    var streets = L.tileLayer(
        'https://api.mapbox.com/styles/v1/johnmichel/ciobach7h0084b3nf482gfvvr/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoiam9obm1pY2hlbCIsImEiOiJjaW9iOW1vbHUwMGEzdnJseWNranhiMHpxIn0.leVOjMBazNl6v4h9MT7Glw', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
            maxZoom: 18
        });

    var satellite = L.tileLayer(
        'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {

            maxZoom: 18,
        });

    var latLng = [-9.543728, 124.904211]

    var map = L.map('map', {
        center: latLng,
        zoom: 11,
        layers: [osm]
    });

    // var removeRoutingControl = function() {
    //     if (control != null) {
    //         map.removeControl(control);
    //         control = null;
    //     }
    // }

    // var currentMarker = L.marker(latLng, {
    //     icon: L.icon({
    //         iconUrl: "{{ asset('storage') }}" + '/images/marker/startMarker.png',
    //         iconSize: [28, 29],
    //         iconAnchor: [10, 20],
    //         popupAnchor: [2, -16],
    //         shadowSize: [68, 45],
    //         shadowAnchor: [22, 94]
    //     })
    // }).addTo(map);

    var marker;

    var baseLayers = {
        'OpenStreetMap': osm,
        'Jalanan': streets,
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
        $.each(markerPuskes, function(index) {
            map.removeLayer(markerPuskes[index]);
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



    var iconPuskes = new L.icon({
        iconUrl: "{{ asset('storage') }}" + '/images/marker/finishMarker.png',
        iconSize: [28, 29],
        iconAnchor: [10, 20],
        popupAnchor: [2, -16],
        shadowSize: [68, 45],
        shadowAnchor: [22, 94]
    });

    var markerPuskes = []

    var kelMalaka = new L.GeoJSON.AJAX(["{{ asset('/plugin') }}" + '/mapGEOJSON/kelurahan/kelMalaka.geojson'], {
        style: function(feature) {
            return {
                opacity: 1,
                color: 'blue',
                fillOpacity: 0.1,
                fillColor: 'blue',
                weight: 0.8
            }
        },
        onEachFeature: function(f, l) {
            l.on({
                mouseover: highlightFeature1,
                mouseout: resetHighlight1
                // click: zoomToFeature
            }).addTo(map)

            var out = []
            if (f.properties) {
                for (key in f.properties) {
                    if (key == 'WADMKD') {
                        out.push("<b>Kelurahan : </b>" + f.properties.WADMKD)
                    }
                }
                l.bindPopup(out.join("<br />"))
            }
        }
    }).addTo(map)

    $('#posisiOtomatis').change(function() {

        // if (control != null)
        //     removeRoutingControl()

        if ($(this).is(':checked')) {
            geoLocation();

            function geoLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    x.innerHTML = "Gagal mengambil koordinat lokasi";
                }
            }

            function showPosition(position) {

                var latLng = [position.coords.latitude, position.coords.longitude];
                control.spliceWaypoints(0, 1, latLng);

                map.panTo(latLng);
            }
        } else {

            geoLocation();

            function geoLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    x.innerHTML = "Gagal mengambil koordinat lokasi";
                }
            }

            function showPosition(position) {

                var latLng = [-9.543728, 124.904211];
                control.spliceWaypoints(0, 1, latLng);

                map.panTo(latLng);
            }

            map.panTo(latLng);
        }
    });

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
            weight: 0.8,
            opacity: 1,
            // color: '#666',
            dashArray: '',
            fillOpacity: 0.1
        });

        layer.bringToFront();
    }



    $('#tampilSemua').on('change', function() {

        // if (control != null)
        //     removeRoutingControl()

        var index = 0
        if ($(this).is(':checked')) {
            @foreach ($puskesmas as $item)

                markerPuskes[index] = L.marker(['{{ $item->lat }}', '{{ $item->lng }}'], {
                    icon: iconPuskes,
                }).bindPopup('<img class="mb-2" src=' + "{{ asset('/storage') }}" + '/images/' +
                    '{{ $item->gambar }}' +
                    " style='width:300px;' alt='{{ $item->nama }}'><br>" + 'Nama : ' +
                    '{{ $item->nama }}<br>' +
                    'Kecamatan : ' + '{{ $item->kecamatan->nama }}<br>' + 'Kelurahan : ' +
                    '{{ $item->kelurahan->nama }}<br><button type="button" class="btn btn-primary btn-sm mt-2" onclick="rute(' +
                    '{{ $item->lat }}' + ',' + '{{ $item->lng }}' + ')">Rute</button>'
                ).addTo(map)
                index++
            @endforeach
        } else {
            $.each(markerPuskes, function(index) {
                map.removeLayer(markerPuskes[index]);
            });
        }
    })

    function rute(lat, lng) {
        // removeMarker()
        var latLng = L.latLng(lat, lng);
        control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
    }



    $("#buttCariPuskes").click(function(e) {

        // if (control != null)
        //     removeRoutingControl()

        var valCari = $('#cariPuskes').val()
        var index = 0

        $.each(markerPuskes, function(index) {
            map.removeLayer(markerPuskes[index]);
        });

        @foreach ($puskesmas as $item)

            if (valCari == '{{ $item->nama }}') {

                markerPuskes[index] = L.marker(['{{ $item->lat }}', '{{ $item->lng }}'], {
                    icon: iconPuskes,
                }).bindPopup('<img class="mb-2" src=' + "{{ asset('/storage') }}" + '/images/' +
                    '{{ $item->gambar }}' +
                    " style='width:300px;' alt='{{ $item->nama }}'><br>" + 'Nama : ' +
                    '{{ $item->nama }}<br>' +
                    'Kecamatan : ' + '{{ $item->kecamatan->nama }}<br>' + 'Kelurahan : ' +
                    '{{ $item->kelurahan->nama }}<br><button type="button" class="btn btn-primary btn-sm mt-2" onclick="rute(' +
                    '{{ $item->lat }}' + ',' + '{{ $item->lng }}' + ')">Rute</button>'
                ).addTo(map)
                index++

            }
        @endforeach

    })

    $("#kecamatan_id").change(function() {

        // if (control != null)
        //     removeRoutingControl()

        var idKecamatan = $(this).val();
        $.ajax({
            url: "{{ route('kecamatan-request') }}",
            method: 'GET',
            cache: false,
            dataType: 'json',
            success: function(data) {
                var html = "";
                data[0].forEach(element => {
                    if (element.id == idKecamatan) {
                        if (element.kelurahan !== null) {
                            element.kelurahan.forEach(element => {
                                html += '<option value="' + element
                                    .id + '">' + element.nama +
                                    '</option>'
                            })
                        }
                    }
                })
                $("#kelurahan_id").html(
                    '<option value="" selected disabled>Pilih Kelurahan</option>' + html);
            }
        })

        $.each(markerPuskes, function(index) {
            map.removeLayer(markerPuskes[index]);
        });

        var index = 0

        @foreach ($puskesmas as $item)

            if (idKecamatan == '{{ $item->kecamatan->id }}') {

                markerPuskes[index] = L.marker(['{{ $item->lat }}', '{{ $item->lng }}'], {
                    icon: iconPuskes,
                }).bindPopup('<img class="mb-2" src=' + "{{ asset('/storage') }}" + '/images/' +
                    '{{ $item->gambar }}' +
                    " style='width:300px;' alt='{{ $item->nama }}'><br>" + 'Nama : ' +
                    '{{ $item->nama }}<br>' +
                    'Kecamatan : ' + '{{ $item->kecamatan->nama }}<br>' + 'Kelurahan : ' +
                    '{{ $item->kelurahan->nama }}<br><button type="button" class="btn btn-primary btn-sm mt-2" onclick="rute(' +
                    '{{ $item->lat }}' + ',' + '{{ $item->lng }}' + ')">Rute</button>'
                ).addTo(map)
                index++

            }
        @endforeach
    })

    $("#kelurahan_id").change(function() {

        // if (control != null)
        //     removeRoutingControl()

        var idKelurahan = $(this).val();
        $.ajax({
            url: "{{ route('kelurahan-request') }}",
            method: 'GET',
            cache: false,
            dataType: 'json',
            success: function(data) {
                console.log(data)
                var html = "";
                data[0].forEach(element => {
                    if (element.id == idKelurahan) {
                        if (element.kecamatan !== null) {
                            if (element.kecamatan.puskesmas !== null) {
                                element.kecamatan.puskesmas.forEach(element => {
                                    if (element.kelurahan_id == idKelurahan) {
                                        html += '<option value="' + element
                                            .id + '">' + element.nama +
                                            '</option>'
                                    }
                                })
                            }
                        }
                    }
                })
                $("#puskesmas").html(
                    '<option value="" selected disabled>Pilih Puskesmas</option>' + html);
            }
        })

        $.each(markerPuskes, function(index) {
            map.removeLayer(markerPuskes[index]);
        });

        var index = 0

        @foreach ($puskesmas as $item)

            if (idKelurahan == '{{ $item->kelurahan->id }}') {

                markerPuskes[index] = L.marker(['{{ $item->lat }}', '{{ $item->lng }}'], {
                    icon: iconPuskes,
                }).bindPopup('<img class="mb-2" src=' + "{{ asset('/storage') }}" + '/images/' +
                    '{{ $item->gambar }}' +
                    " style='width:300px;' alt='{{ $item->nama }}'><br>" + 'Nama : ' +
                    '{{ $item->nama }}<br>' +
                    'Kecamatan : ' + '{{ $item->kecamatan->nama }}<br>' + 'Kelurahan : ' +
                    '{{ $item->kelurahan->nama }}<br><button type="button" class="btn btn-primary btn-sm mt-2" onclick="rute(' +
                    '{{ $item->lat }}' + ',' + '{{ $item->lng }}' + ')">Rute</button>'
                ).addTo(map)
                index++

            }
        @endforeach
    })

    $("#puskesmas").change(function() {

        // if (control != null)
        //     removeRoutingControl()

        var idPuskes = $(this).val();

        $.each(markerPuskes, function(index) {
            map.removeLayer(markerPuskes[index]);
        });

        var index = 0

        @foreach ($puskesmas as $item)

            if (idPuskes == '{{ $item->id }}') {

                markerPuskes[index] = L.marker(['{{ $item->lat }}', '{{ $item->lng }}'], {
                    icon: iconPuskes,
                }).bindPopup('<img class="mb-2" src=' + "{{ asset('/storage') }}" + '/images/' +
                    '{{ $item->gambar }}' +
                    " style='width:300px;' alt='{{ $item->nama }}'><br>" + 'Nama : ' +
                    '{{ $item->nama }}<br>' +
                    'Kecamatan : ' + '{{ $item->kecamatan->nama }}<br>' + 'Kelurahan : ' +
                    '{{ $item->kelurahan->nama }}<br><button type="button" class="btn btn-primary btn-sm mt-2" onclick="rute(' +
                    '{{ $item->lat }}' + ',' + '{{ $item->lng }}' + ')">Rute</button>'
                ).addTo(map)
                index++

            }
        @endforeach
    })
</script>

<!-- Footer -->
{{-- <footer class="  footer">
     <p class="small text-muted m-0">All rights reserved | © 2021</p>
    <p class="small text-muted m-0">Template created by <a href="https://www.pixelrocket.store/">PixelRocket</a></p> 
</footer> --}}
<!-- / Footer-->

</section>
<!-- / Content-->

</body>

</html>
