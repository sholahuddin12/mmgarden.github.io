<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/icon.png" type="image/x-icon">
    <title>MMGarden || {{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <!-- CSS Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    {{-- <link href="dashboard.css" rel="stylesheet"> --}}
</head>
<body>
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-2 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-10 text-white" href="/">MMGarden</a>
        <form action="/database" method="GET" class="w-100 input-group pe-5">
            <input class="form-control rounded-0" id="search" type="text" name="search" placeholder="Cari sesuai nama..." aria-label="Search" aria-describedby="button-addon2">
            <button class="btn btn-light" id="button-addon2">Cari</button>
        </form>
        <div class="ps-3 fs-10 text-white">{{ auth()->user()->name }}</div>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link px-3" href="#"><i class="bi bi-box-arrow-right"></i> Keluar</button>
            </form>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <main class="px-md-4">
                
            <section>
                @yield('container')
            </section>

            </main>
        </div>
    </div>


<script src="/dashboard.js"></script></body>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>

</body>
</html>
