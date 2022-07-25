<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INVENTARIS SPN POLDA SULUT</title>

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    {{-- css style --}}
    <link rel="stylesheet" href="/css/login.css">

</head>

<body>

    <div class="background card-img-overlay">
        <div class="row d-flex justify-content-center">
            <div class="col m-md-4" style="none">
                <main class="form-Login rounded-3" style="width: 18rem">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('loginEror'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginEror') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                            <form action="/login" method="post">
                                @csrf
                                {{-- <img class="mb-4" src="#" alt="" width="72" height="57"> --}}

                                <div class="form-floating">
                                    <input type="text" name="nrp"
                                        class="form-control @error('nrp') is-invalid @enderror" id="nrp"
                                        placeholder="12345678" required value="{{ old('name') }}">
                                    <label for="nrp">Nrp</label>
                                    @error('nrp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="form-floating mt-1">
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Password" required>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                    {{-- <small class="d-block text-center mt-3">Belum Terdaftar ? <a href="Register">Daftar Sekarang</a></small> --}}
                </main>
            </div>
        </div>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>
