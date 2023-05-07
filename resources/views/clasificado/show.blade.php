@extends('layouts.app')

@section('template_title')
    {{ $clasificado->name ?? 'Show Clasificado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">   Vista {{ $clasificado->cla_nombre }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clasificados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de clasificado:</strong>
                            {{ $clasificado->cla_nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
