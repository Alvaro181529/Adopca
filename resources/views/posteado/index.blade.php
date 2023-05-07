@extends('layouts.app')

@section('template_title')
    Posteado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Posteado') }}
                            </span>
                            
                             <div class="float-right">
                                <a href="javascript:history.back()" class="btn btn-sm btn-secondary mr-2"><i
                                    class="fa fa-fw fa-angle-left"></i> Regresar</a>
                                <a href="{{ route('posteados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    <i class="fa fa-fw fa-plus"></i> {{ __('Create') }}
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
                                        
										<th>Img</th>
										<th>Titulo</th>
										<th>Contenido</th>
										<th>Fecha</th>
										<th>Perfiles</th>
										<th>Clasificados</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posteados as $posteado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td><img src="{{ asset('storage') . '/' . $posteado->pos_img }}" alt="{{ $posteado->pos_imgtitulo }}"
                                                width="60" height="60"></td>
											<td>{{ $posteado->pos_titulo }}</td>
											<td>{{ $posteado->pos_contenido }}</td>
											<td>{{ $posteado->pos_fecha }}</td>
											<td>{{ $posteado->perfile->per_titulo }}</td>
											<td>{{ $posteado->clasificado->cla_nombre}}</td>

                                            <td>
                                                <form action="{{ route('posteados.destroy',$posteado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('posteados.show',$posteado->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('posteados.edit',$posteado->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $posteados->links() !!}
            </div>
        </div>
    </div>
@endsection
