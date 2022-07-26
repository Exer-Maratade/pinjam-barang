@extends('index')

@section('container')


    <div class="card shadow" style="height: 20rem;">

        @if (session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show mt-3 mb-4" role="alert">
                {{ session('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <div class="header p-2 mt-0 rounded justify-content-center">
            <div class="container-sm">
                <div class="header-body">
                    <div class="row-lg-8 row-7 mt-4 justify-center">
                        <h1 class="text-dark d-inline-block mb-0">KATEGORI</h1>
                    </div>

                    <button type="button" class="btn btn-sm btn-primary mt-2 mb-3 " data-bs-toggle="modal"
                        data-bs-target="#inputKategori">
                        <i class="fa-solid fa-pen-to-square"></i>Input kategori
                    </button>
                </div>


                <div class="row align-items-center py-2">
                    <div class="row">
                        @foreach ($ktgr as $item)
                            <div class="col-xl-4 col-md-6">
                                <div class="card card-stats py-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">KATEGORI</h5>
                                                <span class="h2 font-weight-bold mb-0">
                                                    {{ $loop->iteration }}. {{ $item->kat }}</span>
                                                {{-- <button type="button" class="btn btn-sm btn-danger mt-1" data-bs-toggle="modal"
                                            data-bs-target="#hapusKategori{{ $item->id }}">
                                            <i class="fa-solid fa-trash-can"></i> hapus kategori
                                        </button> --}}
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                    <i class="far fa-books"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('modals.modalsKategori')
@endsection
