    @extends('layouts.per')
    @section('content')
        <header class=" py-5 bg-image-full"
            style="background: url('{{ asset('storage') . '/' . $perfile->per_imagenbaner }}') no-repeat center center/cover; height:470px;">

            <div class="text-center p-5 mt-5" style="">
                <img class="img-fluid rounded-circle mb-4" src="{{ asset('storage') . '/' . $perfile->per_imagen }}"
                    width="350px" height="150px" alt="..." />
                <h1 class="border-bottom-primary text-ligth" align="center">{{ $perfile->per_titulo }}</h1>
            </div>
        </header>
        @if (Auth::user()->rol == 'Publicador')
            <div class="d-sm-flex align-items-center justify-content-between m-2">
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
        @endif
        <div class="row mt-4">
            <!-- Content Column -->
            <div class="col-lg-9 mb-4">
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        @if (Auth::user()->genero == 'Publicador'&&$perfile->user->name ==Auth::user()->name )
                            <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"><i
                                        class="fa fa-fw fa-plus"></i>Agregar</a>
                                <a href="{{ route('productos.index') }}" class="btn btn-sm btn-secondary mr-2"><i
                                        class="fa fa-fw fa-align-justify"></i> listar Productos</a>
                            </div>
                            <h6 class="m-0 font-weight-bold text-primary"> Productos/Servicios</h6>
                        @endif
                    </div>

                    <div class="row p-3">
                        {{-- @for ($i = 1; $i < ($count = 4); $i++) --}}
                        @foreach ($productos as $producto)
                            @if ($producto->servicioperfile->perfile->id == $perfile->id)
                                <div class="col-lg-4 mb-4">
                                    <div class="card bg-primary text-white shadow">

                                        <div class="card-body">
                                            {{ $producto->prod_nombre }}
                                            <div class="text-white-50 small">
                                                {{ $producto->prod_precio }}
                                                {{ $producto->prod_moneda }}
                                                <p><b>Categoria: </b>{{ $producto->categoria->cat_nombre }}</p>
                                                @if (Auth::user()->genero == 'Publicador'&&$perfile->user->name ==Auth::user()->name  )
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('productos.edit', $producto->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                                @endif
                                                {{-- <p><b>Cantidad: </b>{{ $producto->prod_cantidad }}</p> --}}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        {{-- @endfor --}}

                    </div>
                </div>

                <div class="row">
                    <!-- Content Column -->
                    <div class="col-12 mb-4">
                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            @if (Auth::user()->genero == 'Publicador'&&$perfile->user->name  ==Auth::user()->name )
                                <div class="card-header">
                                    <div class="float-right">
                                        <a href="{{ route('posteados.index') }}" class="btn btn-sm btn-secondary mr-2"><i
                                                class="fa fa-fw fa-align-justify "></i> listar Post</a>
                                       
                                    </div>
                                    <h6 class="m-0 font-weight-bold text-primary"> Post</h6>
                                </div>
                            @endif
                            <div class="row m-2">

                                @foreach ($posteados as $posteado)
                                    @if ($posteado->perfile->id == $perfile->id)
                                        <div class="col-4">
                                            <div class="card mb-4" style="width: 14rem;">
                                                <img src="{{ asset('storage') . '/' . $posteado->pos_img }}" height="200px"
                                                    class="card-img-top" alt="{{ $posteado->pos_img }}">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $posteado->pos_titulo }}</h5>
                                                    @if (Auth::user()->genero == 'Publicador'&&$perfile->user->name  ==Auth::user()->name )
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('posteados.edit', $posteado->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endif
                                                    <p align="justify">
                                                        {{ $posteado->pos_fecha }} <br>
                                                        {{ $posteado->perfile->per_titulo }} <br>
                                                        {{ $posteado->clasificado->cla_nombre }} <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-3 mb-4">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        @if (Auth::user()->genero == 'Publicador' &&$perfile->user->name  ==Auth::user()->name )
                            <div class="float-right">

                                <a
                                    href="{{ route('perfiles.edit', $perfile->id) }}"class="btn btn-primary btn-sm float-right"><i
                                        class="fa fa-fw fa-plus"></i>Editar</a>
                                <hr>
                                <a
                                    href="{{ route('servicios.create', $perfile->id) }}"class="btn btn-primary btn-sm float-right"><i
                                        class="fa fa-fw fa-plus"></i>Servicio</a>
                            </div>
                        @endif
                        <h6 class="m-0 font-weight-bold text-primary">Descripcion</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            @foreach ($servicioperfiles as $servicioperfile)
                                @if ($servicioperfile->perfile->id == $perfile->id)
                                    <div class="col-lg-12 mb-4">
                                        <div class="card bg-success text-white shadow">
                                            <div class="card-body">
                                                {{ $servicioperfile->servicio->ser_nombre }}
                                                <div class="text-white-50 small">
                                                    {{ $servicioperfile->servicio->pos_pago }}
                                                    {{ $servicioperfile->servicio->pos_tipop }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- @else --}}
                                @endif
                            @endforeach
                        </div>
                        <div class="text-center">
                            <strong>{{ $servicioperfile->perfile->cre_razon }}
                        </div>
                        <p>
                            {{ $servicioperfile->perfile->per_descripcion }}
                            <br>
                        </p>
                        <p> Contactos
                            {{ $servicioperfile->perfile->per_telefono }}
                        </p>
                        <p>
                            Ubicado en
                            {{ $servicioperfile->perfile->per_ubicacion }}
                        </p>
                        <div align="center">
                            <hr>
                            <h4>Contactos</h4>
                            <a target="_blank" rel="nofollow"
                                href="https://wa.me/{{ $servicioperfile->perfile->per_telefono }}/?text=Hola "
                                role="button"><img
                                    src="https://es.logodownload.org/wp-content/uploads/2018/10/whatsapp-logo-11.png"
                                    alt="" width="50px" height="50px" value="Hola estoy interesado">
                            </a>
                            <a target="_blank" rel=""
                                href="https://wa.me/{{ $servicioperfile->perfile->per_telefono }}/?text=Hola "
                                role="button"><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1024px-Facebook_Logo_%282019%29.png"
                                    alt="" width="42px" height="42px">
                            </a>
                            {{ $num = $perfile->per_telefono }}
                            <div style="margin-top: 15px;">
                                {!! DNS2D::getBarcodeHTML("https://wa.me/$num/?text=Hola", 'DATAMATRIX') !!}</div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    @endsection
