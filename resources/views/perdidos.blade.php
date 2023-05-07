@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <div class="row">

            @foreach ($perfiles as $perfile)
            @endforeach


            <div class="col-12 border-left-info ">
                <h1>Perdidos</h1>
                <div class="row">

                    @foreach ($posteados as $posteado)
                        @guest
                            @if ($posteado->clasificado->cla_nombre == 'Perdidos' )
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
                            @endif
                        @else
                            @if ($posteado->clasificado->cla_nombre == 'Perdidos' && Auth::user()->name == $posteado->perfile->user->name)
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
                            @endif
                        @endguest
                        <!-- Portfolio Modal 1-->
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
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
