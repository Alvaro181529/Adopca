@if (Auth::user()->genero == 'Cliente')

    @extends('layouts.app')

    @section('template_title')
        Mascota
    @endsection

    @section('content')
        <div class="container col-12 border-left-info ">
            <a href="{{ route('mascotas.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                {{ __('Añadir Mascota') }}
            </a>
            <h1>Mascotas de <span>{{ Auth::user()->name }} {{ Auth::user()->lastpat }}</span> </h1>
            
            <div class="row">
                @foreach ($mascotas as $mascota)
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
                @endforeach
                {{-- <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Mascota') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('mascotas.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Crear Nuevo') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif --}}
                {{-- <thead class="thead">
                        <tr>
                            <th>No</th>
                            
                            <th>Nombre Mascota</th>
                            <th>Edad</th>
                            <th>Imagen</th>
                            <th>Tipo</th>
                            <th>Usuario</th>

                            <th></th>
                        </tr>
                    </thead> --}}
                {{-- <tbody>
                        @foreach ($mascotas as $mascota)
                            <div class="row">

                                <div class="col-3">
                                    <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                        data-bs-target="#portfolioModal1{{ $mascota->id }}">
                                        <div
                                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                            <div class="portfolio-item-caption-content text-center text-white">
                                            </div>
                                        </div>
                                        <img src="{{ asset('storage') . '/' . $mascota->per_imagen }}"
                                            height="200px" class="card-img-top zoom" alt="">
                                        <h4>{{ $mascota->per_mascota }}</h4>
                                        <hr>
                                        <h3>{{ $mascota->per_edad }}</h3>
                                        <h3>{{ $mascota->per_raza }}</h3>
                                    </div>
                                </div>
                            </div>
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $mascota->per_mascota }}</td>
                                <td>{{ $mascota->per_edad }}</td>
                                <td><img src="{{ asset('storage') . '/' . $mascota->per_imagen }}"
                                        width="60" height="60"></td>
                                <td>{{ $mascota->per_raza }}</td>
                                <td>{{ $mascota->user->name }} {{ $mascota->user->lastpat }}</td>

                                <td>
                                    <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary "
                                            href="{{ route('mascotas.show', $mascota->id) }}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('mascotas.edit', $mascota->id) }}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa fa-fw fa-trash"></i> Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}
            </div>
        </div>
        </div>
        {!! $mascotas->links() !!}
        </div>
        </div>
        </div>
    @endsection
@endif
