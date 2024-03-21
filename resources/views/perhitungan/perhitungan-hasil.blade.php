@extends('layouts.master')
@section('title', 'ELECTRE | Hasil')
@section('content')

    <!-- partial -->
    <!-- ========== section start ========== -->
    <section class="section">
        {{-- <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2 class="h4">eCommerce Dashboard</h2>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#0">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    eCommerce
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div> --}}
        <!-- ========== title-wrapper end ========== -->

        <div class="row p-4">

            <div class="tables-wrapper">
                <div class="card-style mb-30">
                    <h6 class="mb-10">Hasil Perhitungan ELECTRE</h6>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-auto ms-auto d-print-none">
                                    <a href="/cetak-hasil" target="_blank" class="btn btn-primary mb-3">
                                        Import PDF / Cetak
                                    </a>
                                </div>
                                <div class="table-wrapper table-responsive">
                                    <table class="table table-hover" id="myTable">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>Nama</th>
                                                <th>No</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($electre as $item_electre)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item_electre['penduduk']['penduduk_nama'] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}
                    </div>
                </div>

                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->

        </div>
        <!-- [ Main Content ] end -->
        </div>

    </section>

@endsection
