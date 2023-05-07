<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group row">
            <div class="col-3">
                {{ Form::label('Titulo') }}
                {{ Form::text('per_titulo', $perfile->per_titulo, ['class' => 'form-control' . ($errors->has('per_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo', 'maxlength' => '15']) }}
                {!! $errors->first('per_titulo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-4">
                {{ Form::label('Ubicacion') }}
                {{ Form::text('per_ubicacion', $perfile->per_ubicacion, ['class' => 'form-control' . ($errors->has('per_ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
                {!! $errors->first('per_ubicacion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3">
                {{ Form::label('Ciudad') }}
                <select name="per_ciudad" class="form-control" id="per_ciudad"
                    {{ $errors->has('per_ciudad') ? ' is-invalid' : '' }}>
                    <option value="Beni">Beni</option>
                    <option value="Cochabamba">Cochabamba</option>
                    <option value="Chuquisaca">Chuquisaca</option>
                    <option value="La Paz" selected>La Paz</option>
                    <option value="Oruro">Oruro</option>
                    <option value="Pando">Pando</option>
                    <option value="Potosi">Potosi</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    <option value="Tarija">Tarija</option>
                </select>
                {{-- {{ Form::text('per_ciudad', $perfile->per_ciudad, ['class' => 'form-control' . ($errors->has('per_ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Per Ciudad']) }} --}}
                {!! $errors->first('per_ciudad', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2">
                {{ Form::label('Telefono') }}
                {{ Form::number('per_telefono', $perfile->per_telefono, ['class' => 'form-control' . ($errors->has('per_telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono', 'max' => '999999999', 'min' => '0']) }}
                {!! $errors->first('per_telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-6">
                {{ Form::label('Imagen') }}
                <input type="file" name="per_imagen" id="per_imagen"
                    class="form-control"{{ $errors->has('per_imagen') ? ' is-invalid' : '' }}>
                {{-- {{ Form::text('per_imagen', $perfile->per_imagen, ['class' => 'form-control' . ($errors->has('per_imagen') ? ' is-invalid' : ''), 'placeholder' => 'Per Imagen']) }} --}}
                {!! $errors->first('per_imagen', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-6">
                {{ Form::label('Imagen baner') }}
                <input type="file" name="per_imagenbaner" id="per_imagenbaner"
                    class="form-control"{{ $errors->has('per_imagenbaner') ? ' is-invalid' : '' }}>
                {{-- {{ Form::file('per_imagenbaner', $perfile->per_imagenbaner, ['class' => 'form-control' . ($errors->has('per_imagenbaner') ? ' is-invalid' : ''), 'placeholder' => 'Per Imagenbaner']) }} --}}
                {!! $errors->first('per_imagenbaner', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-3">
                {{ Form::label('id_users') }}
                {{ Form::select('id_users',$user, $perfile->id_users, ['class' => 'form-control' . ($errors->has('id_users') ? ' is-invalid' : ''), 'placeholder' => 'Id Users']) }}
                {!! $errors->first('id_users', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-9">
                {{ Form::label('Descripcion') }}
                {{ Form::textarea('per_descripcion', $perfile->per_descripcion, ['class' => 'form-control' . ($errors->has('per_descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion de tu perfil', 'rows' => '2', 'cols' => '2']) }}
                {!! $errors->first('per_descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>

        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-save"></i> Guardar</button>
        <a href="javascript:history.back()" class="btn btn-danger"><i class="fa fa-fw fa-ban"></i> Cancelar</a>
    </div>
</div>


