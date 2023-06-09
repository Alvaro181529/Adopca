@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->prod_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->prod_precio }}
                        </div>
                        <div class="form-group">
                            <strong>Moneda:</strong>
                            {{ $producto->prod_moneda }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $producto->prod_cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->prod_descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Serperfiles:</strong>
                            {{ $producto->id_serperfiles }}
                        </div>
                        <div class="form-group">
                            <strong>Id Categorias:</strong>
                            {{ $producto->id_categorias }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
