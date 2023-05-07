@extends('layouts.app')

@section('template_title')
    Perfile
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Perfile') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('perfiles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Per Titulo</th>
										<th>Per Descripcion</th>
										<th>Per Telefono</th>
										<th>Per Imagen</th>
										<th>Per Imagenbaner</th>
										<th>Per Ubicacion</th>
										<th>Per Ciudad</th>
										<th>Id Users</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($perfiles as $perfile)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $perfile->per_titulo }}</td>
											<td>{{ $perfile->per_descripcion }}</td>
											<td>{{ $perfile->per_telefono }}</td>
											<td>{{ $perfile->per_imagen }}</td>
											<td>{{ $perfile->per_imagenbaner }}</td>
											<td>{{ $perfile->per_ubicacion }}</td>
											<td>{{ $perfile->per_ciudad }}</td>
											<td>{{ $perfile->user->email }}</td>

                                            <td>
                                                <form action="{{ route('perfiles.destroy',$perfile->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('perfiles.show',$perfile->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('perfiles.edit',$perfile->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $perfiles->links() !!}
            </div>
        </div>
    </div>
@endsection
