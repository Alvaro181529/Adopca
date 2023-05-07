@extends('layouts.app')
@section('content')
    <div class="container-fluid ">
        @guest
        @else
           @if (Auth::user()->genero == 'Publicador')
            <a href="{{ route('posteados.create') }}" class="btn btn-primary btn-sm float-right"><i
                    class="fa fa-fw fa-plus"></i>Crear</a>
                    @endif
        @endguest
        <div class="row">

            @foreach ($perfiles as $perfile)
            @endforeach
            <div class="row">
                @guest
                    @foreach ($posteados as $posteado)
                        <div class="col-3">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                data-bs-target="#portfolioModal1{{ $posteado->id }}">
                                <div
                                    class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white">
                                    </div>
                                </div>
                                <img src="{{ asset('storage') . '/' . $posteado->pos_img }}" height="200px"
                                    class="card-img-top zoom" alt="">
                                <h4>{{ $posteado->pos_titulo }}</h4>
                            </div>
                        </div>
                        <div class="portfolio-modal modal fade" id="portfolioModal1{{ $posteado->id }}" tabindex="-1"
                            aria-labelledby="portfolioModal1" aria-hidden="true">
                            <div class="modal-dialog modal-x">
                                <div class="modal-content">
                                    <div class="modal-body text-center pb-3">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <!-- Portfolio Modal - Title-->
                                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                        {{ $posteado->pos_titulo }}</h2>
                                                    <!-- Icon Divider-->
                                                    <div class="divider-custom">
                                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    </div>
                                                    <!-- Portfolio Modal - Image-->
                                                    <img class="rounded m-1 zoom"
                                                        src="{{ asset('storage') . '/' . $posteado->pos_img }}" alt="..."
                                                        width="250px" height="200px" />
                                                    <!-- Portfolio Modal - Text-->
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-4">
                                                                    <strong>Titulo:</strong>
                                                                    {{ $posteado->pos_titulo }}
                                                                </div>

                                                                <div class="col-4">
                                                                    <strong>Fecha:</strong>
                                                                    {{ $posteado->pos_fecha }}
                                                                </div>
                                                                <div class="col-4">
                                                                    <strong>Perfiles:</strong>
                                                                    {{ $posteado->perfile->per_titulo }}
                                                                </div>
                                                                <div class="col-4">
                                                                    <strong>Clasificados:</strong>
                                                                    {{ $posteado->clasificado->cla_nombre }}
                                                                </div>
                                                                <div class="col-4">
                                                                    <strong>Contenido:</strong>
                                                                    {{ $posteado->pos_contenido }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <i
                                                            class="fas fa-times fa-fw"></i>
                                                    </button>
                                                    <a class="btn btn-primary"
                                                        href="{{ url('perfil/' . $posteado->perfile->id) }}">
                                                        <i class="fas fa-timesfa-solid fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach ($posteados as $posteado)
                        @if (Auth::user()->genero == 'Cliente')
                            @if ($posteado->clasificado->cla_nombre == 'adopciones' ||
                                $posteado->clasificado->cla_nombre == 'Publicaciones' ||
                                $posteado->clasificado->cla_nombre == 'Adopciones')
                                <div class="col-5">
                                    <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                        data-bs-target="#portfolioModal1{{ $posteado->id }}">
                                        <div
                                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                            <div class="portfolio-item-caption-content text-center text-white">
                                            </div>
                                        </div>
                                        <img src="{{ asset('storage') . '/' . $posteado->pos_img }}" height="200px"
                                            class="card-img-top zoom" alt="">
                                        <h4>{{ $posteado->pos_titulo }}</h4>
                                    </div>
                                </div>
                                <div class="portfolio-modal modal fade" id="portfolioModal1{{ $posteado->id }}" tabindex="-1"
                                    aria-labelledby="portfolioModal1" aria-hidden="true">
                                    <div class="modal-dialog modal-x">
                                        <div class="modal-content">
                                            <div class="modal-body text-center pb-3">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-8">
                                                            <!-- Portfolio Modal - Title-->
                                                            <h2
                                                                class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                                {{ $posteado->pos_titulo }}</h2>
                                                            <!-- Icon Divider-->
                                                            <div class="divider-custom">
                                                                <div class="divider-custom-icon"><i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <!-- Portfolio Modal - Image-->
                                                            <img class="rounded m-1 zoom"
                                                                src="{{ asset('storage') . '/' . $posteado->pos_img }}"
                                                                alt="..." width="250px" height="200px" />
                                                            <!-- Portfolio Modal - Text-->
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group row">
                                                                        <div class="col-4">
                                                                            <strong>Titulo:</strong>
                                                                            {{ $posteado->pos_titulo }}
                                                                        </div>

                                                                        <div class="col-4">
                                                                            <strong>Fecha:</strong>
                                                                            {{ $posteado->pos_fecha }}
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <strong>Perfiles:</strong>
                                                                            {{ $posteado->perfile->per_titulo }}
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <strong>Clasificados:</strong>
                                                                            {{ $posteado->clasificado->cla_nombre }}
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <strong>Contenido:</strong>
                                                                            {{ $posteado->pos_contenido }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal"> <i class="fas fa-times fa-fw"></i>
                                                            </button>
                                                            <a class="btn btn-primary"
                                                                href="{{ url('perfil/' . $posteado->perfile->id) }}">
                                                                <i class="fas fa-timesfa-solid fa-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                        @if (Auth::user()->name == $posteado->perfile->user->name && Auth::user()->genero == 'Publicador')
                            <div class="col-5">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal1{{ $posteado->id }}">
                                    <div
                                        class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white">
                                        </div>
                                    </div>
                                    <img src="{{ asset('storage') . '/' . $posteado->pos_img }}" height="200px"
                                        class="card-img-top zoom" alt="">
                                    <h4>{{ $posteado->pos_titulo }}</h4>
                                </div>
                            </div>
                            <div class="portfolio-modal modal fade" id="portfolioModal1{{ $posteado->id }}" tabindex="-1"
                                aria-labelledby="portfolioModal1" aria-hidden="true">
                                <div class="modal-dialog modal-x">
                                    <div class="modal-content">
                                        <div class="modal-body text-center pb-3">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                            {{ $posteado->pos_titulo }}</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="rounded m-1 zoom"
                                                            src="{{ asset('storage') . '/' . $posteado->pos_img }}"
                                                            alt="..." width="250px" height="200px" />
                                                        <!-- Portfolio Modal - Text-->
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group row">
                                                                    <div class="col-4">
                                                                        <strong>Titulo:</strong>
                                                                        {{ $posteado->pos_titulo }}
                                                                    </div>

                                                                    <div class="col-4">
                                                                        <strong>Fecha:</strong>
                                                                        {{ $posteado->pos_fecha }}
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <strong>Perfiles:</strong>
                                                                        {{ $posteado->perfile->per_titulo }}
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <strong>Clasificados:</strong>
                                                                        {{ $posteado->clasificado->cla_nombre }}
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <strong>Contenido:</strong>
                                                                        {{ $posteado->pos_contenido }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal"> <i class="fas fa-times fa-fw"></i>
                                                        </button>
                                                        <a class="btn btn-primary"
                                                            href="{{ url('perfil/' . $posteado->perfile->id) }}">
                                                            <i class="fas fa-timesfa-solid fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- Portfolio Modal 1-->
                    @endforeach

                @endguest


            </div>
        </div>
    </div>
    </div>
@endsection
