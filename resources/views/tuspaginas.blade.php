@extends('layouts.app')
@section('content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 border-left-primary ">
                <h1>Perfiles</h1>
                @foreach ($users as $user)
                @endforeach

                <div class="row">
                    @foreach ($perfiles as $perfile)
                        @if (Auth::user()->name ==$perfile->user->name && Auth::user()->genero == 'Publicador')
                            <div class="col-3">
                                <div class="card" style="width: 17rem; margin-bottom:20px">
                                    <img src="{{ asset('storage') . '/' . $perfile->per_imagenbaner }}" height="200px"
                                        class="card-img-top" alt="{{ $perfile->per_titulo }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $perfile->per_titulo }}</h5>
                                        <a class="btn btn-secondary" href="{{ url('perfil/' . $perfile->id) }}"
                                            role="button">Ver Perfil</a>
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
