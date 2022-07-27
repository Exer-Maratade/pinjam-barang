<div class="modal fade" id="tambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">TAMBAH BARANG</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <main class="tambahUser text-dark"> 
                <form action="{{ route('tambahUser') }}" method="post" class="form-tambahUser"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mt-3">

                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="name" value="{{ old('name') }}" required>
                                <label class="small" for="name">NAMA PENGGUNA</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="nrp" class="form-control" id="nrp"
                                    placeholder="nrp" value="{{ old('nrp') }}" required>
                                <label class="small" for="nrp">NRP</label>
                                @error('nrp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="pangkat" class="form-control" id="pangkat"
                                    placeholder="pangkat" value="{{ old('pangkat') }}" required>
                                <label class="small" for="pangkat">pangkat</label>
                                @error('pangkat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="jabatan" class="form-control" id="jabatan"
                                    placeholder="jabatan" value="{{ old('jabatan') }}" required>
                                <label class="small" for="jabatan">jabatan</label>
                                @error('jabatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="password" value="{{ old('password') }}" required>
                                <label class="small" for="password">password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mt-4">
                                <label class="form-control-label" for="level">LEVEL</label>
                                <select class="form-control" id="level" name="level" required>
                                    <option value="" selected disabled>-- LEVEL PENGGUNA --</option>
                                    <option value="admin">admin</option>
                                    <option value="personil">personil</option>
                                </select>
                                @error('level')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-floating mb-3">
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="email" value="{{ old('email') }}" required>
                                <label class="small" for="email">email</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                </form>
            </main>
        </div>
    </div>
</div>


{{-- edit barang --}}

@foreach ($user as $item)
    <div class="modal fade" id="editUser{{ $item->id }}" tabindex="-1" aria-labelledby="editUser"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUser">EDIT USER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <main class="form-group">
                    <form action="/editUser/{{ $item->id }}" method="post" class="form-editUser"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">

                            <label class="small" for="name"><strong> NAMA </strong></label>
                            <div class="form mb-3">
                                <input type="text" name="name" class="form-control" id="name"
                                    value="{{ $item->name }}">
                            </div>

                            <label class="small" for="nrp"><strong> NAMA BARANG </strong></label>
                            <div class="form mb-3">
                                <input type="text" name="nrp" class="form-control" id="nrp"
                                    value="{{ $item->nrp }}">
                            </div>

                            <label class="small" for="pangkat"><strong> pangkat </strong></label>
                            <div class="form mb-3">
                                <input type="text" name="pangkat" class="form-control" id="pangkat"
                                    value="{{ $item->pangkat }}">
                            </div>

                            <label class="small" for="jabatan"><strong> jabatan </strong></label>
                            <div class="form mb-3">
                                <input type="text" name="jabatan" class="form-control" id="jabatan"
                                    value="{{ $item->jabatan }}">
                            </div>


                            <label class="small" for="level"><strong> level </strong></label>
                            <div class="form mb-3">
                                <select class="form-control" id="level" name="level" required>
                                    <option value="{{ $item->level }}" selected disabled>-- {{ $item->level }} --</option>
                                    <option value="admin">admin</option>
                                    <option value="personil">personil</option>
                                </select>
                            </div>

                            <label class="small" for="password"><strong> password </strong></label>
                            <div class="form mb-3">
                                <input type="text" name="password" class="form-control" id="password"
                                    value="{{ $item->password }}">
                            </div>
                         
                            <label class="small" for="email"><strong> email </strong></label>
                            <div class="form mb-3">
                                <input type="text" name="email" class="form-control" id="email"
                                    value="{{ $item->email }}">
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
@foreach ($user as $item)
    <div class="modal fade" id="hapusUser{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="hapus" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-sm" role="document">
            <div class="modal-content bg-gradient-danger">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification"></h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fal fa-exclamation-circle fa-7x"></i>
                        <h4 class="heading mt-4 text-dark">Hapus Data!
                            <br>
                            {{ $item->name }}
                        </h4>
                        <p class="text text-dark">Anda yakin ingin menghapus data ? <b></b>?</p>
                    </div>
                </div>
                <div class="modal-footer">

                    <form class="ml-auto" action="/hapusUser/{{ $item->id }}" method="post">
                        @method('post')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
