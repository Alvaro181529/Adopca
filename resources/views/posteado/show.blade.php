@extends('layouts.app')

@section('template_title')
    {{ $posteado->name ?? 'Show Posteado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Posteado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('posteados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <div class="form-group">
                            <strong>Pos Img:</strong>
                            <img src="{{ asset('storage') . '/' . $posteado->pos_img  }}" alt="{{ $posteado->pos_imgtitulo }}"
                                                    width="400" height="200">
                        </div>
                        <div class="form-group">
                            <strong>Pos Titulo:</strong>
                            {{ $posteado->pos_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Pos Contenido:</strong>
                            {{ $posteado->pos_contenido }}
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="form-group">
                            <strong>Pos Fecha:</strong>
                            {{ $posteado->pos_fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Id Perfiles:</strong>
                            {{ $posteado->id_perfiles }}
                        </div>
                        <div class="form-group">
                            <strong>Id Clasificados:</strong>
                            {{ $posteado->id_clasificados }}
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
