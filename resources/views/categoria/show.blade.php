@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? 'Show Categoria' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vista de {{ $categoria->cat_nombre }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> <i class="fa fa-fw fa-angle-left"></i>Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de la categoria:</strong>
                            {{ $categoria->cat_nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
