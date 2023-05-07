<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group row">
            <div class="col-6">
            {{ Form::label('Selecciona tu perfil') }}
            {{ Form::select('id_perfiles',$perfil, $servicioperfile->id_perfiles, ['class' => 'form-control' . ($errors->has('id_perfiles') ? ' is-invalid' : ''), 'placeholder' => 'S/N']) }}
            {!! $errors->first('id_perfiles', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-6">
            {{ Form::label('Servicio') }}
            {{ Form::select('id_servicio',$servicio ,$servicioperfile->id_servicio, ['class' => 'form-control' . ($errors->has('id_servicio') ? ' is-invalid' : ''), 'placeholder' => 'S/N']) }}
            {!! $errors->first('id_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success"><i
            class="fa fa-fw fa-save"></i> Guardar</button>
        <a href="{{ route('productos.create') }}" class="btn btn-danger"><i class="fa fa-fw fa-ban"></i> Cancelar</a>
        <a href="{{ route('servicios.create') }}" class="btn btn-secondary"><i class="fa fa-fw fa-plus"></i> Agregar Servicio</a>

    </div>
</div>