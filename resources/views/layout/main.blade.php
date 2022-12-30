<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Alika</title>
        <link rel="shortcut icon" href="/img/alika.png" type=" image/x-icon">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/dashboard.css" rel="stylesheet">
    </head>

    <body class="d-flex flex-column vh-100">
        <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#" style="font-size: 20px;"><img src="/img/alika.png" width="25" height="25"> &nbsp;APIK</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </header>

        <div class="container-fluid flex-grow-1">
            <div class="row h-100">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                    <div class="position-sticky pt-3">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
                                
                        </h6>
                        <ul class="nav flex-column">
                            <li class="nav-item m-0 p-0">
                                <a class="nav-link active pb-1" href="/transaksi-bri">
                                    BRI
                                </a>
                            </li>
                            <li class="nav-item m-0 p-0">
                                <a class="nav-link active pb-1" href="/transaksi-bni">
                                    BNI
                                </a>
                            </li>
                            <li class="nav-item m-0 p-0">
                                <a class="nav-link active pb-1" href="/transaksi-mandiri">
                                    Mandiri
                                </a>
                            </li>
                            <li class="nav-item m-0 p-0">
                                <a class="nav-link active pb-1" href="/lot-lelang">
                                    Lot Lelang
                                </a>
                            </li>
                            <li class="nav-item m-0 p-0">
                                <a class="nav-link active pb-1" href="/gfx-bni">
                                    GFX BNI
                                </a>
                            </li>
                        </ul>
                        <a href="" class="btn btn-sm btn-outline-primary mt-3 ml-4">Keluar Aplikasi</a>
                    </div>
                </nav>
                <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 d-flex flex-column">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">{{$pagetitle}}</h1>
                    </div>
                    <div class="row flex-grow-1">
                        <div class="col">
                            @yield('content')
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center pt-3 pb-2 mb-3 border-top">
                        @section('pagination')
                            
                        @show
                    </div>
                </main>
            </div>
        </div>

        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>
    </body>
</html>