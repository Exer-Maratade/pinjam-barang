<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPN POLDA SULUT</title>

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    {{-- css style --}}
    <link rel="stylesheet" href="/css/css.css">

    <link rel="stylesheet" href="fontawesome/css/all.css">
   
</head>

<body>
    {{-- <img src="img/spn.jpeg" class="img-fluid card-img-bottom" alt="img"> --}}
    <main class="sideBar d-flex flex-grow-1" style="height: 45rem">
        <div class="d-flex flex-column flex-shrink-3 p-3 bg-dark" style="width: 400px;">
            <a href="home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
                <span class="fs-5">SPN POLDA SULUT</span>
            </a>
            <hr class="mt-3">
            <ul class="nav nav-pills flex-column mb-auto link-light">
                <li class="nav-item">
                    <a class="btn {{ Request::is('home') ? 'text-primary' : '' }}" href="/">
                        <svg class="bi pe-none" width="4" height="20">
                            <i class="bi bi-house-door-fill">
                            </i>
                        </svg>
                        Beranda
                    </a>
                </li>
                @if (auth()->user()->level == 'admin')
                    <li class="nav-item">
                        <a class="btn {{ Request::is('kategori') ? 'text-primary' : '' }}" href="kategori">
                            <svg class="bi pe-none" width="4" height="20">
                                <i class="fa-solid fa-list"></i>
                            </svg>
                            Kategori
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="btn {{ Request::is('barang') ? 'text-primary' : '' }}" href="barang">
                        <svg class="bi pe-none" width="4" height="20">
                            <i class="bi bi-clipboard2-data-fill"></i>
                            </i>
                        </svg>
                        Daftar Barang
                    </a>
                </li>
                @if (auth()->user()->level == 'admin')
                    <li class="nav-item">
                        <a class="btn {{ Request::is('permintaan') ? 'text-primary' : '' }}"
                            href="{{ route('permintaan') }}">
                            <svg class="bi pe-none" width="4" height="20">
                                <i class="bi bi-bell-fill"></i>
                                </i>
                            </svg>
                            Permintaan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn {{ Request::is('pengembalian') ? 'text-primary' : '' }}"
                            href="{{ route('pengembalian') }}">
                            <svg class="bi pe-none" width="4" height="20">
                                <i class="bi bi-bell-slash-fill"></i>
                                </i>
                            </svg>
                            Pengembalian
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="btn {{ Request::is('terpakai') ? 'text-primary' : '' }}" href="terpakai">
                        <svg class="bi pe-none" width="4" height="20">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </i>
                        </svg>
                        Terpakai
                    </a>
                </li>
                @if (auth()->user()->level == 'personil')
                    <li class="nav-item">
                        <a class="btn {{ Request::is('pinjaman-saya') ? 'text-primary' : '' }}" href="pinjaman-saya">
                            <svg class="bi pe-none" width="4" height="20">
                                <i class="fa-solid fa-inbox"></i>
                            </svg>
                            Pinjaman Saya
                        </a>
                    </li>
                @endif
                @if (auth()->user()->level == 'admin')
                    <li class="nav-item">
                        <a class="btn {{ Request::is('pinjaman-saya') ? 'text-primary' : '' }}"
                            href="{{ route('tambahUser') }}">
                            <svg class="bi pe-none" width="4" height="20">
                                <i class="fa-solid fa-inbox"></i>
                            </svg>
                            Daftar Pengguna
                        </a>
                    </li>
                @endif

            </ul>
            {{-- <hr class="mt-5"> --}}
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle"
                    id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">

                    <i class="fa-solid fa-user"> </i>
                    {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser">

                    <li><a class="dropdown-item" class="modal" data-bs-toggle="modal"
                            data-bs-target="#profile">Profile</a></li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="Logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        
            <div class="container ml-5">
                @yield('container')
            </div>
        
        

    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="sidebars.js"></script>

</body>
</html>
