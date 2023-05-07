<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group row">
            <div class="col-6">
                {{ Form::label('Nombre') }}
                {{ Form::text('tip_nombre', $tipo->tip_nombre, ['class' => 'form-control' . ($errors->has('tip_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre','maxlength'=>'15']) }}
                {!! $errors->first('tip_nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-6">
                {{ Form::label('Descripcion') }}
                {{ Form::textarea('tip_descripcion', $tipo->tip_descripcion, ['class' => 'form-control' . ($errors->has('tip_descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion','rows'=>'1','cols'=>'1']) }}
                {!! $errors->first('tip_descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-save"></i> Guardar</button>
        <a href="{{ route('servicios.create') }}" class="btn btn-danger"><i class="fa fa-fw fa-ban"></i> Cancelar</a>
        <a href="{{route('tipos.index')}}" class="btn btn-secondary"><i class="fa fa-fw fa-align-justify"></i> listar tipos</a>

    </div>
</div>
