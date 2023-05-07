@extends('layouts.app')
@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="col-12 border-left-primary ">
            <h1>Macotas</h1>
            <div class="row">
                {{-- 
                @foreach ($perfiles as $perfile) --}}
                {{-- <div class="col-3">
                    <div class="card" style="width: 17rem; margin-bottom:20px">
                        <img class="card-img-top " src="{{ asset('storage') . '/' . $perfile->per_imagenbaner }}" height="200px" alt="{{ $perfile->per_titulo }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $perfile->per_titulo }}</h5> --}}
                            {{-- @foreach ($servicioperfiles as $servicioperfile) --}}
                            {{-- <hr>
                            <p>{{$perfile->per_ciudad}}</p>
                            <p>{{$perfile->per_ubicacion}}</p>
                            <p>{{$perfile->per_telefono}}</p> --}}
                            {{-- @endforeach --}}
                        {{-- </div>
                    </div>
                </div>
                @endforeach
                @else
                @foreach ($perfiles as $perfile)
                <div class="col-3">
                    <div class="card" style="width: 17rem; margin-bottom:20px">
                        <img class="card-img-top " src="{{ asset('storage') . '/' . $perfile->per_imagenbaner }}" height="200px" alt="{{ $perfile->per_titulo }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $perfile->per_titulo }}</h5> --}}
                            {{-- @foreach ($servicioperfiles as $servicioperfile) --}}
                            {{-- <a class="btn btn-secondary" href="{{ url('perfil/' . $perfile->id) }}" role="button">Ver Perfil</a> --}}
                            {{-- @endforeach --}}
                        {{-- </div>
                    </div>
                </div>
                @endforeach --}}
                @foreach ($mascotas as $mascota)
                @if (Auth::user()->genero == 'Cliente')
                    @if (Auth::user()->name == $mascota->user->name && Auth::user()->genero == 'Cliente')
                        <div class="col-3">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                data-bs-target="#portfolioModal1{{ $mascota->id }}">
                                <div
                                    class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white">
                                    </div>
                                </div>
                                <img src="{{ asset('storage') . '/' . $mascota->per_imagen }}" height="200px"
                                    class="card-img-top zoom" alt="">
                                <h4 align="center">{{ $mascota->per_mascota }}</h4>
                                <div class="row">
                                    <div class="col-4">
                                        <strong>Dueñ@:</strong>
                                        {{ $mascota->user->name }} {{ $mascota->user->lastpat }}
                                    </div>

                                    <div class="col-4">
                                        <strong>Edad:</strong>
                                        {{ $mascota->per_edad }}
                                    </div>
                                    <div class="col-4">
                                        <strong>Tipo:</strong>
                                        {{ $mascota->per_raza }}
                                    </div>
                                </div>
                                <br>
                                <form align="center" action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
                                    <a class="btn btn-sm btn-success" href="{{ route('mascotas.edit', $mascota->id) }}"><i
                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                                        Borrar</button>
                                </form>
                            </div>
                        </div>

                        <!-- Portfolio Modal 1-->
                        <div class="portfolio-modal modal fade" id="portfolioModal1{{ $mascota->id }}" tabindex="-1"
                            aria-labelledby="portfolioModal1" aria-hidden="true">
                            <div class="modal-dialog modal-x">
                                <div class="modal-content">
                                    <div class="modal-body text-center pb-3">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <!-- Portfolio Modal - Title-->
                                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                        {{ $mascota->per_mascota }}</h2>
                                                    <!-- Icon Divider-->
                                                    <div class="divider-custom">
                                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    </div>
                                                    <!-- Portfolio Modal - Image-->
                                                    <img class="rounded m-1 zoom"
                                                        src="{{ asset('storage') . '/' . $mascota->per_imagen }}"
                                                        alt="..." width="250px" height="200px" />
                                                    <!-- Portfolio Modal - Text-->
                                                    <hr>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal"> <i class="fas fa-times fa-fw"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endif
                @endforeach
                 @foreach ($mascotas as $mascota)
                 @if (Auth::user()->genero == 'Publicador')
                    {{-- @if (Auth::user()->name == $mascota->user->name && Auth::user()->genero == 'Cliente') --}}
                        <div class="col-3">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                data-bs-target="#portfolioModal1{{ $mascota->id }}">
                                <div
                                    class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white">
                                    </div>
                                </div>
                                <img src="{{ asset('storage') . '/' . $mascota->per_imagen }}" height="200px"
                                    class="card-img-top zoom" alt="">
                                <h4 align="center">{{ $mascota->per_mascota }}</h4>
                                <div class="row">
                                    <div class="col-4">
                                        <strong>Dueñ@:</strong>
                                        {{ $mascota->user->name }} {{ $mascota->user->lastpat }}
                                    </div>

                                    <div class="col-4">
                                        <strong>Edad:</strong>
                                        {{ $mascota->per_edad }}
                                    </div>
                                    <div class="col-4">
                                        <strong>Tipo:</strong>
                                        {{ $mascota->per_raza }}
                                    </div>
                                </div>
                                <br>
                                <form align="center" action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
                                    <a class="btn btn-sm btn-success" href="{{ route('mascotas.edit', $mascota->id) }}"><i
                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                                        Borrar</button>
                                </form>
                            </div>
                        </div>

                        <!-- Portfolio Modal 1-->
                        <div class="portfolio-modal modal fade" id="portfolioModal1{{ $mascota->id }}" tabindex="-1"
                            aria-labelledby="portfolioModal1" aria-hidden="true">
                            <div class="modal-dialog modal-x">
                                <div class="modal-content">
                                    <div class="modal-body text-center pb-3">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <!-- Portfolio Modal - Title-->
                                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                        {{ $mascota->per_mascota }}</h2>
                                                    <!-- Icon Divider-->
                                                    <div class="divider-custom">
                                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    </div>
                                                    <!-- Portfolio Modal - Image-->
                                                    <img class="rounded m-1 zoom"
                                                        src="{{ asset('storage') . '/' . $mascota->per_imagen }}"
                                                        alt="..." width="250px" height="200px" />
                                                    <!-- Portfolio Modal - Text-->
                                                    <hr>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal"> <i class="fas fa-times fa-fw"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
</div>
</div>
@endsection