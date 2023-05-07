<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <div class="col-4">
            {{ Form::label('Nombre') }}
            {{ Form::text('cla_nombre', $clasificado->cla_nombre, ['class' => 'form-control' . ($errors->has('cla_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre','maxlength'=>'20', 'style'=>'text-transform:capitalize']) }}
            {!! $errors->first('cla_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-save"></i> Guardar</button>
        <a href="{{route('clasificados.index')}}" class="btn btn-danger"><i class="fa fa-fw fa-ban"></i> Cancelar</a>
    </div>
</div>