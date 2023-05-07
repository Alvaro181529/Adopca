@extends('layouts.app')

@section('template_title')
    {{ $servicioperfile->name ?? 'Show Servicioperfile' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vista {{{{ $servicioperfile->perfile->per_titulo }}}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicioperfiles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Perfiles:</strong>
                            {{ $servicioperfile->id_perfiles }}
                        </div>
                        <div class="form-group">
                            <strong>Id Servicio:</strong>
                            {{ $servicioperfile->id_servicio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
