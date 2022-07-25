@extends('index')

@section('container')
    <div class="container p-4">
        <div class="card">
            <div class="card-header shadow-inner">
                <h1>INPUT DATA BARANG</h1>
            </div>

            <main class="inputBarang mt-1">
                <form action="/inputBarang" method="post" class="form-inputBarang" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-floating mt-1">
                            <input type="text" name="jenis_barang"
                                class="form-control @error('jenis_barang') is-invalid @enderror" id="jenis_barang"
                                placeholder="jenis_barang" required>
                            <label for="jenis_barang">jenis barang</label>
                        </div>

                        <div class="form-floating mt-1">
                            <input type="text" name="nama_barang"
                                class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang"
                                placeholder="nama_barang" required>
                            <label for="nama_barang">nama barang</label>
                        </div>
                        <div class="form-floating">
                            <div class="form-group mt-2">
                                <label class="form-control-label" for="kategori_id">kategori</label>
                                <select class="form-control" id="kategori_id" name="kategori_id" required>
                                    <option value="" selected disabled>--KATEGORI --</option>
                                    @foreach ($ktgr as $item)
                                        <option value={{ $item->id }}>{{ $item->kat }}</option>
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
                                <select class="form-control" id="kondisi_barang" name="kondisi_barang" required>
                                    <option value="" selected disabled>--KONDISI BARANG --</option>
                                    <option value="LAYAK" >LAYAK</option>
                                    <option value="LAYAK" >TIDAK LAYAK</option>
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
                            placeholder="deskripsi" id="deskripsi" style="height: 100px" required></textarea>
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
