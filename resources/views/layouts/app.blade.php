<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'adopca') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/zoomy.min.js') }}" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.zoom').zoomy();
        });
    </script>
</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="navbar-brand sidebar-brand-text mx-3">
                    Adopca
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/home') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Paginas
            </div>
            {{-- <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Paginas</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Paginas:</h6>
                        <a class="collapse-item" href="{{ route('perfiles.index') }}">{{ __('perfiles') }}</a>
                    
                        <a class="collapse-item"
                            href="{{ route('conversaciones.index') }}">{{ __('conversaciones') }}</a>
                    </div>
                </div>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('perfiles.create') }}">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>{{ __('Perfil') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tipos.index') }}">
                    <i class="fas fa-fw fa-user-tag"></i>
                    <span>{{ __('tipos') }}</span></a>
            </li> --}}
            @guest
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('productos.index') }}">
                        <i class="fas fa-fw fa-bookmark"></i>
                        <span>{{ __('Produtos') }}</span></a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('publicaciones.index') }}">
                        <i class="fas fa-fw fa-list-ul"></i>
                        <span>{{ __('Publicaciones') }}</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">
                        <i class="fas fa-fw fa-list-ul"></i>
                        <span>{{ __('Perfiles') }}</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('perdidos.index') }}">

                        <i class="fas fa-fw fa-dog"></i>
                        <span>{{ __('Perdidos') }}</span></a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('mensajes.index') }}">

                        <i class="fas fa-fw fa-cat"></i>
                        <span>{{ __('mensajes') }}</span></a>
                </li> --}}
            @else
                @if (Auth::user()->genero == 'Cliente')
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos.index') }}">
                            <i class="fas fa-fw fa-bookmark"></i>
                            <span>{{ __('Produtos') }}</span></a>
                    </li> --}}
                       <li class="nav-item">
                    <a class="nav-link" href="{{ route('publicaciones.index') }}">
                        <i class="fas fa-fw fa-list-ul"></i>
                        <span>{{ __('Publicaciones') }}</span></a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home')}}">
                            <i class="fas fa-fw fa-list-ul"></i>
                            <span>{{ __('Perfiles') }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('perdidos.index') }}">

                            <i class="fas fa-fw fa-dog"></i>
                            <span>{{ __('Perdidos') }}</span></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('mensajes.index') }}">

                            <i class="fas fa-fw fa-cat"></i>
                            <span>{{ __('mensajes') }}</span></a>
                    </li> --}}
                @endif
                @if (Auth::user()->genero == 'Publicador')
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-list-ul"></i>
                            <span>{{ __('Mis Publicaciones') }}</span>
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Tipos:</h6>
                                <a class="collapse-item" href="{{ route('publicaciones.index') }}">Todos</a>
                                <a class="collapse-item" href="{{ route('perdidos.index') }}">Perdidos</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos.index') }}">
                            <i class="fas fa-fw fa-bookmark"></i>
                            <span>{{ __('Mis Produtos') }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tuspaginas.index') }}">
                            <i class="fas fa-fw fa-list-ul"></i>
                            <span>{{ __('Mis Paginas') }}</span></a>
                    </li>
                @endif
            @endguest

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" id="texto"
                                placeholder="Buscar" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <script>
                        window.addEventListener('load', function() {
                            document.getElementById("texto").addEventListener("keyup", () => {
                                if ((document.#getElementById(" texto ")..value.length) >= 1)
                                    fetch('home/buscador ? texto' = $ {
                                        document.getElementById("texto").value
                                    }, {
                                        method: 'get'
                                    })
                                    .then(response =>
                                        response.text())
                                then(html => {
                                    document.getElementById("resultados")..innerHTML = html
                                })
                                else
                                    document.getElementById("resultados").innerHTML = ""
                            })
                        });
                    </script>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fas fa-bell fa-home"></i>
                                <!-- Counter - Alerts -->
                            </a>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->

                        <li class="nav-item dropdown no-arrow">

                            <!-- Dropdown - User Information -->
                            <!-- Right Side Of Navbar -->
                        <li class="navbar-nav ms-auto">

                            @if (session('status'))
                                <div
                                    style="margin-top:30px; width: 10px; height: 10px; -moz-border-radius: 50%; -webkit-border-radius: 50%;border-radius: 50%; background: rgba(232, 7, 22,.6);">
                                    {{ session('status') }}
                                </div>
                            @else
                                <div
                                    style="margin-top:30px; width: 10px; height: 10px; -moz-border-radius: 50%; -webkit-border-radius: 50%;border-radius: 50%; background: rgba(92, 184, 92,.6);">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                        {{ Auth::user()->name }} {{ Auth::user()->lastpat }}</span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->genero == 'Publicador')
                                        <a class="dropdown-item" href="{{ route('perfiles.create') }}">
                                            {{ __('Crear Perfil') }}
                                        </a>
                                    @endif

                                    @if (Auth::user()->genero == 'Cliente')
                                        <a class="dropdown-item" href="{{ route('mascotas.index') }}">
                                            <span>{{ __('Mis Mascotas') }}</span>
                                        </a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </li>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div id="app">

                    <main class="py-2">
                        @yield('content')
                    </main>

                    <!-- Bootstrap core JavaScript-->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="js/sb-admin-2.min.js"></script>

                    <!-- Page level plugins -->
                    <script src="vendor/chart.js/Chart.min.js"></script>

                    <!-- Page level custom scripts -->
                    <script src="js/demo/chart-area-demo.js"></script>
                    <script src="js/demo/chart-pie-demo.js"></script>

                    <!-- Page level plugins -->
                    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

                    <!-- Page level custom scripts -->
                    <script src="js/demo/datatables-demo.js"></script>

                    <script src="vendor/data-table/datatables.min.js"></script>
                    <script src="vendor/data-table/dataTables.buttons.min.js"></script>
                    <script src="vendor/data-table/buttons.flash.min.js"></script>
                    <script src="vendor/data-table/jszip.min.js"></script>
                    <script src="vendor/data-table/pdfmake.min.js"></script>
                    <script src="vendor/data-table/vfs_fonts.js"></script>
                    <script src="vendor/data-table/buttons.html5.min.js"></script>
                    <script src="vendor/data-table/buttons.print.min.js"></script>
                    <script src="vendor/data-table/datatables-init.js"></script>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
