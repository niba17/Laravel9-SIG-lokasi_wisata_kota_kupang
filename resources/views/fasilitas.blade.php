@extends('layouts.master')
@section('title', 'SIG | Fasilitas')
@section('content')



    <div class="row p-4">

        <div class="tables-wrapper">
            <div class="card-style mb-30">
                <h3 class="mb-10">Fasilitas</h3>
                <hr>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="/fasilitas-add" class="btn btn-sm btn-primary mb-3">Tambah Fasilitas
                                <i class="fa-solid fa-plus"></i>
                            </a>
                            <div class="table-wrapper table-responsive">
                                <table class="table table-hover" id="myTable">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th style="width: 50px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fasilitas as $item_kriteria)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>{{ $item_kriteria->nama }}</td>
                                                <td>
                                                    <a href="fasilitas-edit/{{ $item_kriteria->id }}">
                                                        <i class="fa-solid fa-pen-to-square text-primary"></i>
                                                    </a>
                                                    <span class="px-1">|</span>
                                                    <a href="#"
                                                        onclick="hapus('{{ $item_kriteria->id }}','fasilitas')">
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
