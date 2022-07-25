@extends('index')


@section('container')
<div class="d-flex justify-content-center mt-2">
        
        <div class="container text-center mt-4 p-1" style="width: 100%">
            <div class="container-header shadow-lg container-primary">
                <h3> SPN POLDA SULUT </h3>
            </div>
            <div class="container-body mt-5" style="height: 13.8cm ;">
                {{-- <h5 class="container-title mb-4 text-primary">APLIKASI PINJAM BARANG</h5> --}}
                <tr>
                    <th scope="row">
                        <img src="img/spn.jpeg" class="rounded" alt="image" style="width: 45%">
                    </th>
                    <th scope="col">
                        <img src="img/kaspn.jpg" class="rounded" alt="image" style="width: 51%">
                    </th>
                </tr>


            </div>
            <div class="container-footer text-muted">
                SPN POLDA SULUT <br> <small>Karombasan Utara, No.322, Kec. Wanea, Kota Manado, Sulawesi utara</small>
            </div>
        </div>
    </div>

@endsection
