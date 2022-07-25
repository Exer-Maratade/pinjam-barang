<div class="modal fade" id="inputKategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TAMBAH BARANG</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <main class="inputKategori">
                <form action="/kategori" method="post" class="form-inputKategori" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mt-3">
                            <label class="form-control-label" for="kat">kategori</label>
                            <select class="form-control" id="kat" name="kat" required>
                                <option value="" selected disabled>-- KATEGORI --</option>
                                <option value="ELEKTRONIK">ELEKTTONIK</option>
                                <option value="YANMA">YANMA</option>
                                <option value="RANMOR">RANMOR</option>
                            </select>
                            @error('kategori')
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


{{-- hapus dataa --}}
@foreach ($ktgr as $item)
    <div class="modal fade" id="hapusKategori{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="hapus"
        aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-sm" role="document">
            <div class="modal-content bg-gradient-danger">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification"></h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa-solid fa-circle-exclamation fa-7x"></i>
                        <h4 class="heading mt-4">Hapus Data! {{ $item->nama_barang }}</h4>
                        <p>Anda yakin ingin menghapus data ? <b></b>?</p>
                    </div>
                </div>
                <div class="modal-footer">

                    <form class="ml-auto" action="/hapusKategori/{{ $item->id }}" method="post">
                        @method('post')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

