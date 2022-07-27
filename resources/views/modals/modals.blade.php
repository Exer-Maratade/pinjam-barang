{{-- tambah barang --}}

@foreach ($kats as $kat)
    <div class="modal fade" id="inputBarang{{ $item->kat }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TAMBAH BARANG</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <main class="inputBarang">
                    <form action="/barang/{{ $item->kat }}" method="post" class="form-inputBarang" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">

                            <div class="form-floating mb-3">
                                <input type="text" name="jenis_barang"
                                    class="form-control @error('jenis_barang') is-invalid @enderror" id="jenis_barang"
                                    placeholder="jenis_barang" value="{{ old('jenis_barang') }}" required>
                                <label class="small" for="jenis_barang">JENIS BARANG</label>
                                @error('jenis_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-floating mb-3">
                                <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                                    placeholder="nama_barang" value="{{ old('judul_buku') }}" required>
                                <label class="small" for="nama_barang">NAMA BARANG</label>
                                @error('nama_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                    placeholder="deskripsi" value="{{ old('deskripsi') }}" required>
                                <label class="small" for="deskripsi">DESKRIPSI</label>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-control-label" for="kategori">kategori</label>
                                <select class="form-control" id="kategori" name="kategori" required>
                                    <option value="{{ $item->kategorii_id }}" selected disabled>--KATEGORI --</option>
                                    @foreach ($kats as $kat)
                                        <option value={{ $kat->kategori->kat }}>{{ $kat->kategori->kat }}</option>
                                    @endforeach
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-control-label" for="kondisi_barang">KONDISI</label>
                                <select class="form-control" id="kondisi_barang" name="kondisi_barang" required>
                                    <option value="" selected disabled>-- Kondisi komputer --</option>
                                    <option value="LAYAK">LAYAK</option>
                                    <option value="TIDAK LAYAK">TIDAK LAYAK</option>
                                </select>
                                @error('kondisi_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpang</button>
                            </div>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
@endforeach


 {{--  edit barang  --}}

@foreach ($kats as $item)
    <div class="modal fade" id="editBarang{{ $item->id }}" tabindex="-1" aria-labelledby="editBarang"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editBarang">EDIT BARANG</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <main class="form-group">
                    <form action="/editBarang/{{ $item->id }}" method="post" class="form-editBarang"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">

                            <label class="small" for="jenis_barang"><strong> JENIS BARANG </strong></label>
                            <div class="form mb-3">
                                <input type="text" name="jenis_barang" class="form-control" id="jenis_barang"
                                    value="{{ $item->jenis_barang }}">
                            </div>

                            <label class="small" for="nama_barang"><strong> NAMA BARANG </strong></label>
                            <div class="form mb-3">
                                <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                                    value="{{ $item->nama_barang }}">
                            </div>

                            <label class="small" for="deskripsi"><strong> DESKRIPSI </strong></label>
                            <div class="form mb-3">
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                    value="{{ $item->deskripsi }}">
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-control-label" for="kategori_id">KATEGORI</label>
                                <select class="form-control" name="kategori_id" id="kategori_id">
                                    <option value="{{ $item->kategori }}" selected disabled>--
                                        {{ $item->kategori->kat }} --</option>
                                    <option value="ELEKTRONIK">ELEKTRONIK</option>
                                    <option value="YANMA">YANMA</option>
                                    <option value="RANMOR">RANMOR</option>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-control-label" for="kondisi_barang">KONDISI</label>
                                <select class="form-control" name="kondisi_barang" id="kondisi_barang">
                                    <option value="{{ $item->kondisi_barang }}" selected disabled>--
                                        {{ $item->kondisi_barang }} --</option>
                                    <option value="LAYAK">LAYAK</option>
                                    <option value="TIDAK LAYAK">TIDAK LAYAK</option>
                                </select>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpang</button>
                            </div>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
@endforeach



{{-- hapus dataa --}}
@foreach ($kats as $item)
    <div class="modal fade" id="hapusBarang{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="hapus"
        aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-sm" role="document">
            <div class="modal-content bg-gradient-danger">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification"></h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fal fa-exclamation-circle fa-7x"></i>
                        <h4 class="heading mt-4">Hapus Data! <br> {{ $item->nama_barang }}</h4>
                        <p>Anda yakin ingin menghapus data ? <b></b>?</p>
                    </div>
                </div>

                <div class="modal-footer">
                    <form class="ml-auto" action="/hapusBarang/{{ $item->id }}" method="post">
                        @method('post')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
