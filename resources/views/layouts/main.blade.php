<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="/img/icon.png" type="image/x-icon">

    <!-- CSS Bootstrap5 -->
    <link href="bootstrap-5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- Css Sendiri --}}
    <link rel="stylesheet" href="/style.css">

    <title>MMGarden | {{ $title }}</title>
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg container">
            <div class="container">
                <a class="navbar-brand fs-2" href="/">
                    <img src="/img/LOGO BP.png" alt="Logo" height="50" class="d-inline-block align-text-top">
                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENU</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end fs-5 flex-grow-1 pe-3">
                            <li class="nav-item garisbawah">
                                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
                            </li>
                            <li class="nav-item garisbawah">
                                <a class="nav-link {{ Request::is('listkavling') ? 'active' : '' }}" href="/listkavling">List Kavling</a>
                            </li>
                            <li class="nav-item garisbawah">
                                <a class="nav-link {{ Request::is('panduan') ? 'active' : '' }}" href="/panduan">Panduan Pemesanan</a>
                            </li>
                            @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="/database"><i class="bi bi-database"></i> Database</a></li>
                                  <li>
                                    <hr class="dropdown-divider">
                                  </li>
                                  <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Keluar</button>
                                    </form>
                                </li>
                                </ul>
                              </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section>
        @yield('container')
    </section>

    <section id="footer" class="footer">
        <div class="container">
            <div class="row justify-content-between pt-2">
                <div class="col-md-4 col-12 pt-3">
                    <p><strong>Lokasi Kavling Makam Madinah Memorial Garden :</strong></p>
                    <p>Kamp. Kebun Kopi, RT 03/02, Desa Sirnasari, Kec. Tanjungsari, Kab. Bogor, Prov Jawa Barat.</p>
                    <div class="text-center">
                        <a href="https://api.whatsapp.com/send?phone={{ $noWA }}" class="whatsapp">Hubungi Kami <i class="bi bi-whatsapp "></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-12 pt-3 tengah">
                    <p><strong>Dikelola oleh :</strong></p>
                    <p>PT. Bogor Timur Perkasa.</p>
                    <p><strong>Alamat :</strong></p>
                    <p>Kamp. Sodong, RT 020/010, Desa Tanjungrasa, Kec. Tanjungsari, Kab. Bogor, Prov. Jawa Barat.</p>
                </div>
                <div class="col-md-4 col-12 pt-3 kanan">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/listkavling">List Kavling</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/panduan">Panduan Pemesanan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/database">Dashbord</a>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
        <div class="text-center c-right">
            <small class="block">&copy; 2023 Madinah Memorial Garden. All Right Reserved</small>
        </div>
    </section>
    <!-- JS Bootstratp5 -->
    <script src="bootstrap-5/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
