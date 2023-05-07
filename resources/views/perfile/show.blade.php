@extends('layouts.app')

@section('template_title')
    {{ $perfile->name ?? 'Show Perfile' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Perfile</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('perfiles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Per Titulo:</strong>
                            {{ $perfile->per_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Per Descripcion:</strong>
                            {{ $perfile->per_descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Per Telefono:</strong>
                            {{ $perfile->per_telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Per Imagen:</strong>
                            {{ $perfile->per_imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Per Imagenbaner:</strong>
                            {{ $perfile->per_imagenbaner }}
                        </div>
                        <div class="form-group">
                            <strong>Per Ubicacion:</strong>
                            {{ $perfile->per_ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Per Ciudad:</strong>
                            {{ $perfile->per_ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Id Users:</strong>
                            {{ $perfile->id_users }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
