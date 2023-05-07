@extends('layouts.app')

@section('template_title')
    {{ $tipo->name ?? 'Show Tipo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vista Tipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tip Nombre:</strong>
                            {{ $tipo->tip_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tip Descripcion:</strong>
                            {{ $tipo->tip_descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
