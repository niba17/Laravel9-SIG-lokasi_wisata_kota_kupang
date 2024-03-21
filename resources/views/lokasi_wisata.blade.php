@extends('layouts.master')
@section('title', 'SIG | Lokasi Wisata')
@section('content')



    <div class="row p-4">

        <div class="tables-wrapper">
            <div class="card-style mb-30">
                <h3 class="mb-10">Lokasi Wisata</h3>
                <hr>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="/lokasi_wisata-add" class="btn btn-sm btn-primary mb-3">Tambah Lokasi Wisata
                                <i class="fa-solid fa-plus"></i>
                            </a>
                            <div class="table-wrapper table-responsive">
                                <table class="table table-hover" id="myTable">
                                    <thead class="table-primary">
                                        <tr class="text-sm">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kriteria</th>
                                            <th>Kecamatan</th>
                                            <th>Alamat</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Fasilitas</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th style="width: 50px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lokasi_wisata as $item_lokasi_wisata)
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
                                                        <span class="text-danger text-sm ms-2">Belum dipilih!</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item_lokasi_wisata->kecamatan !== null)
                                                        <span
                                                            class="ms-2">{{ $item_lokasi_wisata->kecamatan->nama }}</span>
                                                    @else
                                                        <span class="text-danger text-sm ms-2">Belum dipilih!</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="ms-2">{{ $item_lokasi_wisata->alamat }}</span>
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
                                                        <span class="text-danger text-sm ms-2">Belum dipilih!</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item_lokasi_wisata->gambar !== null)
                                                        <span class="ms-2">
                                                            <img src="{{ asset('storage/images/' . $item_lokasi_wisata->gambar) }}"
                                                                alt="{{ $item_lokasi_wisata->gambar }}"
                                                                style="width:100px; height:110px;"
                                                                onclick="popUpFoto('{{ $item_lokasi_wisata->gambar }}')">
                                                        </span>
                                                    @else
                                                        <span class="text-danger text-sm ms-2">Belum dipilih!</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item_lokasi_wisata->deskripsi !== null)
                                                        <span
                                                            class="ms-2">{{ substr($item_lokasi_wisata->deskripsi, 0, 5) }}...</span>
                                                    @else
                                                        <span class="text-danger text-sm ms-2">Belum diisi!</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="ms-2">
                                                        <a href="lokasi_wisata-edit/{{ $item_lokasi_wisata->id }}">
                                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                                        </a>
                                                        <span class="px-1">|</span>
                                                        <a href="#"
                                                            onclick="hapus('{{ $item_lokasi_wisata->id }}','lokasi_wisata')">
                                                            <i class="fa-regular fa-trash-can text-danger"></i>
                                                        </a>
                                                    </span>
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
    </div>






@endsection
