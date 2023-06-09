@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? 'Show Servicio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ser Nombre:</strong>
                            {{ $servicio->ser_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Pos Descripcion:</strong>
                            {{ $servicio->pos_descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo:</strong>
                            {{ $servicio->id_tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
