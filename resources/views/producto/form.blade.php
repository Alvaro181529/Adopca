<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group row">
            <div class="col-3">
                {{ Form::label('prod_nombre') }}
                {{ Form::text('prod_nombre', $producto->prod_nombre, ['class' => 'form-control' . ($errors->has('prod_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Prod Nombre', 'maxlength' => '25']) }}
                {!! $errors->first('prod_nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3">
                {{ Form::label('Precio') }}
                {{ Form::number('prod_precio', $producto->prod_precio, ['class' => 'form-control' . ($errors->has('prod_precio') ? ' is-invalid' : ''), 'placeholder' => 'Prod Precio', 'max' => '9999', 'min' => '0']) }}
                {!! $errors->first('prod_precio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3">
                {{ Form::label('Moneda') }}
                <select name="prod_moneda" id="prod_moneda" class="form-control">
                    <option value="Bs" selected>Bolivianos</option>
                    <option value="$">Dolares</option>
                    <option value="€">Euros</option>
                </select>
                {{-- {{ Form::text('prod_moneda', $producto->prod_moneda, ['class' => 'form-control' . ($errors->has('prod_moneda') ? ' is-invalid' : ''), 'placeholder' => 'Prod Moneda']) }} --}}
                {!! $errors->first('prod_moneda', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3">
                {{ Form::label('Cantidad') }}
                {{ Form::number('prod_cantidad', $producto->prod_cantidad, ['class' => 'form-control' . ($errors->has('prod_cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Prod Cantidad', 'min' => '0', 'max' => '999']) }}
                {!! $errors->first('prod_cantidad', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-6">
                {{ Form::label('Categoria') }}
                {{ Form::select('id_categorias', $categorias, $producto->id_categorias, ['class' => 'form-control' . ($errors->has('id_categorias') ? ' is-invalid' : ''), 'placeholder' => 'S/N']) }}
                {!! $errors->first('id_categorias', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-6">
                {{ Form::label('Servicio') }}
                {{ Form::select('id_serperfiles', $serper, $producto->id_serperfiles, ['class' => 'form-control' . ($errors->has('id_serperfiles') ? ' is-invalid' : ''), 'placeholder' => 'S/N']) }}
                {!! $errors->first('id_serperfiles', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::textarea('prod_descripcion', $producto->prod_descripcion, ['class' => 'form-control' . ($errors->has('prod_descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Prod Descripcion', 'rows' => '1', 'cols' => '1']) }}
            {!! $errors->first('prod_descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-save"></i> Guardar</button>
        <a href="javascript:history.back()" class="btn btn-danger"><i class="fa fa-fw fa-ban"></i> Cancelar</a>
        <a href="{{ route('categorias.create') }}" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Agregar categoria</a>
        <a href="{{ route('servicioperfiles.create') }}" class="btn btn-secondary"><i class="fa fa-fw fa-plus"></i> Agregar Servicio</a>

    </div>
</div>
