

<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content justify-content-center">
            <div class="modal-header">
                <h3 class="modal-title text-dark" id="exampleModalLabel">Data Pengguna</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body text-dark ">
                    <h4 class="text text-strong">
                      <li > Nama : {{ auth()->user()->name }}</li>
                      <li>Nrp : {{ auth()->user()->nrp }}</li>
                      <li>Pangkat : {{ auth()->user()->pangkat }}</li>
                      <li>Jabatan : {{ auth()->user()->jabatan }}</li>
                    </h4>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
