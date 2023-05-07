@extends('layouts.app')

@section('template_title')
    Servicioperfile
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Servicioperfile') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('servicioperfiles.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    <i class="fa fa-fw fa-plus"></i> 
                                    {{ __('Crear') }}
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

                                        <th>Nombre del Perfil</th>
                                        <th>Ciudad del Perfil</th>
                                        <th>Servicios</th>
                                        <th>Servicios descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicioperfiles as $servicioperfile)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $servicioperfile->perfile->per_titulo }}</td>
                                            <td>{{ $servicioperfile->perfile->per_ciudad }}</td>
                                            <td>{{ $servicioperfile->servicio->ser_nombre }}</td>
                                            <td>{{ $servicioperfile->servicio->pos_descripcion }}</td>

                                            <td>
                                                <form
                                                    action="{{ route('servicioperfiles.destroy', $servicioperfile->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('servicioperfiles.show', $servicioperfile->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('servicioperfiles.edit', $servicioperfile->id) }}"><i
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
                {!! $servicioperfiles->links() !!}
            </div>
        </div>
    </div>
@endsection
