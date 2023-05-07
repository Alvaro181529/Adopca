<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group row">
            <div class="col-4">
                {{ Form::label('Nombre de Mascota') }}
                {{ Form::text('per_mascota', $mascota->per_mascota, ['class' => 'form-control' . ($errors->has('per_mascota') ? ' is-invalid' : ''), 'placeholder' => 'Arielito']) }}
                {!! $errors->first('per_mascota', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2">
                {{ Form::label('Edad de la mascota') }}
                {{ Form::number('per_edad', $mascota->per_edad, ['class' => 'form-control' . ($errors->has('per_edad') ? ' is-invalid' : ''), 'placeholder' => '4 meses', 'min' => '0', 'max' => '5']) }}
                {!! $errors->first('per_edad', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            {{-- <div class="col-3">
                {{ Form::label('Tipo de Mascota') }}
                <select name="" class="form-control" id="" {{ $errors->has('') ? ' is-invalid' : '' }}>
                    <option value="Canino" selected>Perro</option>
                    <option value="Felino">Gato</option>
                    <option value="Ave">Ave</option>
                    <option value="Roedor">Hamster</option>
                </select>
                {{-- {{ Form::text('per_raza', $mascota->per_raza, ['class' => 'form-control' . ($errors->has('per_raza') ? ' is-invalid' : ''), 'placeholder' => 'buldog']) }} 
            </div> --}}

            <div class="col-3">
                {{ Form::label('Tipo de Mascota') }}
                <select name="per_raza" class="form-control" id="per_raza" {{ $errors->has('') ? ' is-invalid' : '' }}>
                    <option value="Canino" selected>Perro</option>
                    <option value="Felino">Gato</option>
                    <option value="Ave">Ave</option>
                    <option value="Roedor">Hamster</option>
                </select>
                {{-- {{ Form::text('per_raza', $mascota->per_raza, ['class' => 'form-control' . ($errors->has('per_raza') ? ' is-invalid' : ''), 'placeholder' => 'buldog']) }} --}}
                {!! $errors->first('per_raza', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3">
                {{ Form::label('Nombre de Usuario') }}
                {{ Form::select('id_users', $user, $mascota->id_users, ['class' => 'form-control' . ($errors->has('id_users') ? ' is-invalid' : ''), 'placeholder' => 'null']) }}
                {!! $errors->first('id_users', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-9">
                {{ Form::label('Imagen de la mascota') }}
                {{-- <input type="file" class="form-control" id="per_imagen"
                    {{ $errors->has('per_imagen') ? ' is-invalid' : '' }}> --}}
                {{ Form::file('per_imagen', $mascota->per_imagen, ['class' => 'form-control' . ($errors->has('per_imagen') ? ' is-invalid' : ''), 'placeholder' => 'Per Imagen', 'width' => '100px']) }}
                {!! $errors->first('per_imagen', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
