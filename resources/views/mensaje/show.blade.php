@extends('layouts.app')

@section('template_title')
    {{ $mensaje->name ?? 'Show Mensaje' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mensaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mensajes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Men Text:</strong>
                            {{ $mensaje->men_text }}
                        </div>
                        <div class="form-group">
                            <strong>Id Perfiles:</strong>
                            {{ $mensaje->id_perfiles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
