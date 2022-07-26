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




    <table class="table table-striped mt-4">
        <thead class="table-head table-dark">
            <th scope="col">NO</th>
            <th scope="col">NAMA PEMINJAM</th>
            <th scope="col">JENIS BARANG</th>
            <th scope="col">NAMA BARANG</th>
            <th scope="col">KATEGORI</th>
            <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody class="table-body table-light">
            @forelse ($items as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->barang->jenis_barang }}</td>
                    <td>{{ $item->barang->nama_barang }}</td>
                    <td>{{ $item->barang->kategori->kat }}</td>

                    <td>
                        <form action="{{ route('approve', $item->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary mt-3">
                                <i class="fa-solid fa-check"></i> Setujui
                            </button>
                        </form>
                    </td>
                   
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center fw-lighter fst-italic my-5">Belum ada permintaan</td>
                </tr>
            @endforelse

        </tbody>
    </table>
@endsection
