@extends('index')

@section('container')

    <div class="container p-4">
        <div class="card">
            <div class="card-header shadow-inner">
                <h1>EDIT </h1>
            </div>
            <main class="inputBarang mt-1">
                <form action="/editBarang/{{ $item->id }}" method="post" class="form-inputBarang" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-floating mt-1">
                            <input type="text" name="jenis_barang"
                                class="form-control @error('jenis_barang') is-invalid @enderror" id="jenis_barang"
                                placeholder="jenis_barang">
                            <label for="jenis_barang">{{$item->jenis_barang }}</label>
                        </div>

                        <div class="form-floating mt-1">
                            <input type="text" name="nama_barang"
                                class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang"
                                placeholder="nama_barang">
                            <label for="nama_barang">{{$item->nama_barang }}</label>
                        </div>
                        <div class="form-floating">
                            <div class="form-group mt-2">
                                <label class="form-control-label" for="kategori_id">kategori</label>
                                <select class="form-control" id="kategori_id" name="kategori_id">
                                    <option disabled value>pilih kategori</option>
                                    <option value="{{$item->kategori_id }}" selected disabled> {{$item->kategori->kat }}</option>
                                    @foreach ($ktgr as $item)
                                        <option value={{ $item->kategori }}>{{ $item->kat }}</option>
                                    @endforeach
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="form-group mt-2 mb-3">
                                <label class="form-control-label" for="kondisi_barang">kondisi</label>
                                <select class="form-control" id="kondisi_barang" name="kondisi_barang">
                                    <option value="" selected disabled>--{{$item->kondisi_barang }} --</option>
                                    <option value="LAYAK" selected>LAYAK</option>
                                    <option value="LAYAK" selected>TIDAK LAYAK</option>
                                    @error('kondis_barang')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-floating mt-2">
                            <label for="deskripsi">deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control  @error('deskripsi') is-invalid @enderror"
                            placeholder="deskripsi" id="deskripsi" style="height: 100px">{{$item->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </main>
        </div>
    </div>

@endsection
