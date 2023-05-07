

<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group row">
            <div class="col-6">
                {{ Form::label('Titulo') }}
                {{ Form::text('pos_titulo', $posteado->pos_titulo, ['class' => 'form-control' . ($errors->has('pos_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa un titulo']) }}
                {!! $errors->first('pos_titulo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-6">
                {{ Form::label('Descripcion') }}
                {{ Form::textarea('pos_contenido', $posteado->pos_contenido, ['class' => 'form-control' . ($errors->has('pos_contenido') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion','cols'=>'1','rows'=>'1']) }}
                {!! $errors->first('pos_contenido', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4">
                {{ Form::label('Imagen') }}
                <input type="file" name="pos_img" id="pos_img" class="form-control"
                    {{ $errors->has('pos_img') ? ' is-invalid' : '' }}>
                {{-- {{ Form::text('pos_img', $posteado->pos_img, ['class' => 'form-control' . ($errors->has('pos_img') ? ' is-invalid' : ''), 'placeholder' => 'Pos Img']) }} --}}
                {!! $errors->first('pos_img', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-4">
                {{ Form::label('Titulo de la imagen') }}
                {{ Form::text('pos_imgtitulo', $posteado->pos_imgtitulo, ['class' => 'form-control' . ($errors->has('pos_imgtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
                {!! $errors->first('pos_imgtitulo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-4">
                {{ Form::label('Fecha') }}
                <input type="date" name="pos_fecha" class="form-control" value="{{ $fcha }}" readonly>
                {{-- {{ Form::date('pos_fecha',$fcha, $posteado->pos_fecha, ['class' => 'form-control' . ($errors->has('pos_fecha') ? ' is-invalid' : ''), 'placeholder' => 'Pos Fecha']) }} --}}
                {!! $errors->first('pos_fecha', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-6">
                {{ Form::label('Perfil') }}
                {{ Form::select('id_perfiles', $perfil, $posteado->id_perfiles, ['class' => 'form-control' . ($errors->has('id_perfiles') ? ' is-invalid' : ''), 'placeholder' => 'S/N']) }}
                {!! $errors->first('id_perfiles', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-6">
                {{ Form::label('Clasificado') }}
                {{ Form::select('id_clasificados', $clasificado, $posteado->id_clasificados, ['class' => 'form-control' . ($errors->has('id_clasificados') ? ' is-invalid' : ''), 'placeholder' => 'S/N']) }}
                {!! $errors->first('id_clasificados', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-save"></i> Guardar</button>
        <a href="javascript:history.back()" class="btn btn-danger"><i class="fa fa-fw fa-ban"></i> Cancelar</a>
        <a href="{{ route('clasificados.create') }}" class="btn btn-secondary"><i class="fa fa-fw fa-angle-right"></i> Agregar Clacificados</a>
    </div>
</div>


