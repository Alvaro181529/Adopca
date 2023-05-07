<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group row">
            <div class="col-4">
            {{ Form::label('Nombre categoria') }}
            {{ Form::text('cat_nombre', $categoria->cat_nombre, ['class' => 'form-control inline' . ($errors->has('cat_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre','maxlength'=>'20', 'style'=>'text-transforme:uppercase', 'style'=>'text-transform:capitalize']) }}
            {!! $errors->first('cat_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-save"></i> Guardar</button>
        <a href="{{route('productos.create')}}" class="btn btn-danger"><i class="fa fa-fw fa-ban"></i> Cancelar</a>
        <a href="{{route('categorias.index')}}" class="btn btn-secondary"><i class="fa fa-fw fa-align-justify"></i> listar categorias</a>
    </div>
</div>