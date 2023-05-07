@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto') }}
                            </span>

                            <div class="float-right">
                                <a href="javascript:history.back()" class="btn btn-secondary btn-sm"><i class="fa fa-fw fa-angle-left"></i>
                                    Regresar</a>
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    <i class="fa fa-fw fa-plus"></i>
                                    {{ __('Create') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="bootstrap-data-table-export" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Codigo</th>
                                        <th>Perfil</th>
                                        <th>Categorias</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Moneda</th>
                                        <th>Cantidad</th>
                                        <th>Para el Servicio</th>

                                        <th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{!! DNS1D::getBarcodeHTML("$producto->id", 'C128B') !!}</td>
                                            <td>{{ $producto->servicioperfile->servicio->ser_nombre }}</td>
                                            <td>{{ $producto->servicioperfile->perfile->per_titulo }}</td>
                                            <td>{{ $producto->prod_nombre }}</td>
                                            <td>{{ $producto->prod_precio }}</td>
                                            <td>{{ $producto->prod_moneda }}</td>
                                            <td>{{ $producto->prod_cantidad }}</td>
                                            <td>{{ $producto->categoria->cat_nombre }}</td>
                                            <td>{{ $producto->prod_descripcion }}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy', $producto->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('productos.show', $producto->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('productos.edit', $producto->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
