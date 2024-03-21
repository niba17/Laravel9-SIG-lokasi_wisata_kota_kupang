@extends('layouts.master')
@section('title', 'SIG | Kecamatan')
@section('content')



    <div class="row p-4">

        <div class="tables-wrapper">
            <div class="card-style mb-30">
                <h3 class="mb-10">Kecamatan</h3>
                <hr>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="/kecamatan-add" class="btn btn-sm btn-primary mb-3">Tambah Kecamatan
                                <i class="fa-solid fa-plus"></i>
                            </a>
                            <div class="table-wrapper table-responsive">
                                <table class="table table-hover" id="myTable">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Warna Fill</th>
                                            <th>Geojson</th>
                                            <th style="width: 50px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kecamatan as $item_kecamatan)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td class="ms-2">{{ $item_kecamatan->nama }}</td>
                                                <td class="ms-2">
                                                    @if ($item_kecamatan->warna_fill == null)
                                                        <span class="text-danger">Warna fill belum dipilih!</span>
                                                    @else
                                                        <span class="container"
                                                            style="width:30%;height:40px;background-color:{{ $item_kecamatan->warna_fill }}">
                                                        </span>
                                                    @endif
                                                <td class="ms-2">
                                                    @if ($item_kecamatan->geojson == null)
                                                        <span class="text-danger">Geojson belum dipilih!</span>
                                                    @else
                                                        {{ $item_kecamatan->geojson }}
                                                    @endif
                                                </td>
                                                <td class="ms-2">
                                                    <a href="kecamatan-edit/{{ $item_kecamatan->id }}">
                                                        <i class="fa-solid fa-pen-to-square text-primary"></i>
                                                    </a>
                                                    <span class="px-1">|</span>
                                                    <a href="#"
                                                        onclick="hapus('{{ $item_kecamatan->id }}','kecamatan')">
                                                        <i class="fa-regular fa-trash-can text-danger"></i>
                                                    </a>
                                                </td>
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

@endsection
