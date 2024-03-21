@extends('layouts.master')
@section('title', 'SIG | Kriteria')
@section('content')



    <div class="row p-4">

        <div class="tables-wrapper">
            <div class="card-style mb-30">
                <h3 class="mb-10">Kriteria</h3>
                <hr>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="/kriteria-add" class="btn btn-sm btn-primary mb-3">Tambah Kriteria
                                <i class="fa-solid fa-plus"></i>
                            </a>
                            <div class="table-wrapper table-responsive">
                                <table class="table table-hover" id="myTable">
                                    <thead class="table-primary">
                                        <tr>
                                            <th class="text-sm">No</th>
                                            <th class="text-sm">Nama</th>
                                            <th class="text-sm">Gambar</th>
                                            <th class="text-sm">Marker</th>
                                            <th class="text-sm">Deskripsi</th>
                                            <th class="text-sm" style="width: 50px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kriteria as $item_kriteria)
                                            <tr>
                                                <th class="text-sm">{{ $loop->iteration }}</th>
                                                <td><span class="ms-2 text-sm">{{ $item_kriteria->nama }}</span></td>
                                                <td>
                                                    @if ($item_kriteria->gambar !== '')
                                                        <span class="ms-2 text-sm">
                                                            <img src="{{ asset('storage/images/' . $item_kriteria->gambar) }}"
                                                                alt="{{ $item_kriteria->gambar }}"
                                                                style="width:100px; height:110px;"
                                                                onclick="popUpFoto('{{ $item_kriteria->gambar }}')">
                                                        </span>
                                                    @else
                                                        <span class="text-danger text-sm ms-2 text-sm">Belum dipilih!</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item_kriteria->marker !== null)
                                                        <span class="ms-2 text-sm">
                                                            <img src="{{ asset('storage/images/' . $item_kriteria->marker) }}"
                                                                alt="{{ $item_kriteria->marker }}"
                                                                style="width:100px; height:110px;"
                                                                onclick="popUpFoto('{{ $item_kriteria->marker }}')">
                                                        </span>
                                                    @else
                                                        <span class="text-danger text-sm ms-2 text-sm">Belum dipilih!</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item_kriteria->deskripsi !== '')
                                                        <span
                                                            class="ms-2 text-sm">{{ substr($item_kriteria->deskripsi, 0, 80) }}...</span>
                                                    @else
                                                        <span class="text-danger text-sm ms-2 text-sm">Belum diisi!</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="kriteria-edit/{{ $item_kriteria->id }}">
                                                        <i class="fa-solid fa-pen-to-square text-primary"></i>
                                                    </a>
                                                    <span class="px-1">|</span>
                                                    <a href="#"
                                                        onclick="hapus('{{ $item_kriteria->id }}','kriteria')">
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
