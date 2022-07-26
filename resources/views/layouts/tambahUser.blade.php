@extends('index')

@section('container')
    @if (session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible fade show mt-3 mb-4" role="alert">
            {{ session('berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('update'))
        <div class="alert alert-success alert-dismissible fade show mt-3 mb-4" role="alert">
            {{ session('update') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (auth()->user()->level == 'admin')
        <button type="button" class="btn btn-sm btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#tambahUser">
            <i class="fa-solid fa-keyboard"></i> Tambah Pengguna
        </button>
    @endif



    <table class="table table-striped mt-4">
        <thead class="table-head table-dark">
            <th scope="col">NO</th>
            <th scope="col">NAMA USER</th>
            <th scope="col">NRP</th>
            <th scope="col">PANGKAT</th>
            <th scope="col">JABATAN</th>
            <th scope="col">LEVEL</th>
            <th scope="col">E-MAIL</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="table-body table-light">
            @foreach ($user as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <th scope="col">{{ $item->name }}</th>
                    <th scope="col">{{ $item->nrp }}</th>
                    <th scope="col">{{ $item->pangkat }}</th>
                    <th scope="col">{{ $item->jabatan }}</th>
                    <th scope="col">{{ $item->level }}</th>
                    <th scope="col">{{ $item->email }}</th>
                    <th>
                        @if (auth()->user()->level == 'admin')
                            <button type="button" class="btn btn-sm btn-primary mt-3" data-bs-toggle="modal"
                                data-bs-target="#editUser{{ $item->id }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>

                            <button type="button" class="btn btn-sm btn-danger mt-3" data-bs-toggle="modal"
                                data-bs-target="#hapusUser{{ $item->id }}">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        @endif
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('Modals.modalsTambahUser')
@endsection
