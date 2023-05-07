@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12 border-left-warning ">
            <h1>Productos</h1>
            <div class="row">
                @guest
                    @foreach ($productos as $producto)
                        <div class="col-lg-3">
                            <div class="card bg-primary text-white shadow">
                                <div class="card-body">
                                    {{ $producto->prod_nombre }}
                                    <div class="text-white-50 small">
                                        {!! DNS1D::getBarcodeHTML("$producto->id", 'C128B') !!}
                                        {{ $producto->prod_precio }}
                                        {{ $producto->prod_moneda }}
                                        <p><b>Categoria: </b>{{ $producto->categoria->cat_nombre }}</p>
                                        {{-- <p><b>Cantidad: </b>{{ $producto->prod_cantidad }}</p> --}}
                                        <a class="btn btn-sm btn-secondary "
                                            href="{{ url('perfil/' . $producto->servicioperfile->perfile->id) }}"><i
                                                class="fa fa-fw fa-eye"></i>
                                            Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                @if (Auth::user()->genero == 'Cliente')
                 @foreach ($productos as $producto)
                        <div class="col-lg-3">
                            <div class="card bg-primary text-white shadow">
                                <div class="card-body">
                                    {{ $producto->prod_nombre }}
                                    <div class="text-white-50 small">
                                        {!! DNS1D::getBarcodeHTML("$producto->id", 'C128B') !!}
                                        {{ $producto->prod_precio }}
                                        {{ $producto->prod_moneda }}
                                        <p><b>Categoria: </b>{{ $producto->categoria->cat_nombre }}</p>
                                        {{-- <p><b>Cantidad: </b>{{ $producto->prod_cantidad }}</p> --}}
                                        <a class="btn btn-sm btn-secondary "
                                            href="{{ url('perfil/' . $producto->servicioperfile->perfile->id) }}"><i
                                                class="fa fa-fw fa-eye"></i>
                                            Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   @endif
                   
                    @foreach ($productos as $producto)
                         @if (Auth::user()->name == $producto->servicioperfile->perfile->user->name &&
                            Auth::user()->genero == 'Publicador')
                            <div class="col-lg-3">
                                <div class="card bg-primary text-white shadow">
                                    <div class="card-body">
                                        {{ $producto->prod_nombre }}
                                        <div class="text-white-50 small">
                                            {!! DNS1D::getBarcodeHTML("$producto->id", 'C128B') !!}
                                            {{ $producto->prod_precio }}
                                            {{ $producto->prod_moneda }}
                                            <p><b>Categoria: </b>{{ $producto->categoria->cat_nombre }}</p>
                                            {{-- <p><b>Cantidad: </b>{{ $producto->prod_cantidad }}</p> --}}
                                            <a class="btn btn-sm btn-secondary "
                                                href="{{ url('perfil/' . $producto->servicioperfile->perfile->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i>
                                                Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endif
                    @endforeach
                 
                @endguest
            </div>
        </div>
    </div>
@endsection
