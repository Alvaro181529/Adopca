@extends('layouts.app')

@section('template_title')
    {{ $mascota->name ?? 'Show Mascota' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mascota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mascotas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Per Mascota:</strong>
                            {{ $mascota->per_mascota }}
                        </div>
                        <div class="form-group">
                            <strong>Per Edad:</strong>
                            {{ $mascota->per_edad }}
                        </div>
                        <div class="form-group">
                            <strong>Per Imagen:</strong>
                            {{ $mascota->per_imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Per Raza:</strong>
                            {{ $mascota->per_raza }}
                        </div>
                        <div class="form-group">
                            <strong>Id Users:</strong>
                            {{ $mascota->id_users }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
