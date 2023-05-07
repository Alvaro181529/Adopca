<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group row">
            <div class="col-6">
                {{ Form::label('Nombre') }}
                {{ Form::text('ser_nombre', $servicio->ser_nombre, ['class' => 'form-control' . ($errors->has('ser_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('ser_nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-6">
                {{ Form::label('Tipo') }}
                {{ Form::select('id_tipo',$tipo, $servicio->id_tipo, ['class' => 'form-control' . ($errors->has('id_tipo') ? ' is-invalid' : ''), 'placeholder' => 'S/N']) }}
                {!! $errors->first('id_tipo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::textarea('pos_descripcion', $servicio->pos_descripcion, ['class' => 'form-control' . ($errors->has('pos_descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion','rows'=>'1','cols'=>'1']) }}
            {!! $errors->first('pos_descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-save"></i> Guardar</button>
        <a href="{{ route('servicioperfiles.create') }}" class="btn btn-danger"><i class="fa fa-fw fa-ban"></i> Cancelar</a>
        <a href="{{ route('tipos.create') }}" class="btn btn-secondary"><i class="fa fa-fw fa-plus"></i> Agregar tipo</a>

    </div>
</div>
