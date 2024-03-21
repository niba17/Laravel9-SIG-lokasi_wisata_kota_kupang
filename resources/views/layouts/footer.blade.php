<!-- ========== footer start =========== -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 order-last order-md-first">
                {{-- <div class="copyright text-center text-md-start">
                    <p class="text-sm">
                        Designed and Developed by
                        <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                            PlainAdmin
                        </a>
                    </p>
                </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
                <div
                    class="
              terms
              d-flex
              justify-content-center justify-content-md-end
            ">
                    <a href="#0" class="text-sm">Term & Conditions</a>
                    <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                </div> --}}
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
<!-- ========== footer end =========== -->
</main>
<!-- ======== main-wrapper end =========== -->

<!-- ========= All Javascript files linkup ======== -->
<script src="{{ asset('template') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template') }}/assets/js/Chart.min.js"></script>
<script src="{{ asset('template') }}/assets/js/dynamic-pie-chart.js"></script>
<script src="{{ asset('template') }}/assets/js/moment.min.js"></script>
<script src="{{ asset('template') }}/assets/js/fullcalendar.js"></script>
<script src="{{ asset('template') }}/assets/js/jvectormap.min.js"></script>
<script src="{{ asset('template') }}/assets/js/world-merc.js"></script>
<script src="{{ asset('template') }}/assets/js/polyfill.js"></script>
<script src="{{ asset('template') }}/assets/js/main.js"></script>

<!-- Jquery JS -->
<script type="text/javascript" src="{{ asset('/library') }}/jquery361.js"></script>

<!-- SweetAlert2 -->
<script src="{{ asset('/plugin') }}/sweetAlert2/sweetalert2.all.min.js"></script>

<!-- DataTables -->
<script type="text/javascript" src="{{ asset('/plugin') }}/DataTables/datatables.min.js"></script>



<script>

    function popUpFoto(gambar) {
        Swal.fire({
            imageUrl: "{{ asset('storage') }}" + "/images/" + gambar,
            title: gambar,
            imageHeight: 400,
            imageWidth: 700,
            imageAlt: gambar
        })
    }

    $('#home-card').children('div').on('mouseenter', function() {
        $(this).children('a').css('background-color', '#5D87FF')
        $(this).children('a').children('div').children('i').removeClass('text-primary').addClass('text-white')
        
    })
    $('#home-card').children('div').on('mouseleave', function() {
        $(this).children('a').css('background-color', '')
        $(this).children('a').children('div').children('i').removeClass('text-white').addClass('text-primary')
    })

    $('#card-home').on('mouseleave', function() {
        $(this).css('background-color', '')
    })
    $('#card-home2').on('mouseenter', function() {
        $(this).css('background-color', '#5D87FF')

    })

    $('#card-home2').on('mouseleave', function() {
        $(this).css('background-color', '')
    })
    $('#card-home3').on('mouseenter', function() {
        $(this).css('background-color', '#5D87FF')

    })

    $('#card-home3').on('mouseleave', function() {
        $(this).css('background-color', '')
    })
    $('#card-home4').on('mouseenter', function() {
        $(this).css('background-color', '#5D87FF')

    })

    $('#card-home4').on('mouseleave', function() {
        $(this).css('background-color', '')
    })

    $('#myTable').DataTable();
    $('#myTable2').DataTable();
    $('#myTable3').DataTable();
    $('#myTable4').DataTable();
    $('#myTable5').DataTable();
    $('#myTable6').DataTable();

    $('#login').hover(() => {
        $('#login').toggleClass('text-primary')
    })

    @if (Session::has('succMessage'))
        Swal.fire({
            icon: 'success',
            title: '{{ Session::get('succMessage') }}',
            timer: 3000
        })
    @elseif (Session::has('errSAWMessage'))
        Swal.fire({
            icon: 'error',
            title: '{{ Session::get('errSAWMessage') }}'
            // timer: 3000
        })
    @elseif (Session::has('succSAWMessage'))
        Swal.fire({
            icon: 'success',
            title: '{{ Session::get('succSAWMessage') }}'
            // timer: 3000
        })
    @elseif (Session::has('errMessage'))
        Swal.fire({
            icon: 'error',
            title: '{{ Session::get('errMessage') }}'
            // timer: 3000
        })
    @elseif (Session::has('warnMessage'))
        Swal.fire({
            icon: 'warning',
            title: '{{ Session::get('warnMessage') }}'
            // timer: 3000
        })
    @elseif (Session::has('logMessage'))
        Swal.fire({
            icon: 'success',
            title: '{{ Session::get('logMessage') }}',
            timer: 3000
        })
    @endif



    function hapus(id, controller) {
        Swal.fire({
            title: 'Yakin ingin Menghapus?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace('/' + controller + '-destroy/' + id);
            }
        })
    }

    // function perhitungan() {
    //     Swal.fire({
    //         title: 'Mulai perhitungan SAW?',
    //         // text: "You won't be able to revert this!",
    //         icon: 'question',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Ya!'
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             window.location.replace('/perhitungan-hasil');
    //         }
    //     })
    // }

    function logout() {
        Swal.fire({
            title: 'Yakin ingin Logout?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Logout!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace('/logout');
            }
        })
    }
</script>

</body>

</html>
