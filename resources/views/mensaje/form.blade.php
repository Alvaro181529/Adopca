<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('men_text') }}
            {{ Form::text('men_text', $mensaje->men_text, ['class' => 'form-control' . ($errors->has('men_text') ? ' is-invalid' : ''), 'placeholder' => 'Men Text']) }}
            {!! $errors->first('men_text', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_perfiles') }}
            {{ Form::text('id_perfiles', $mensaje->id_perfiles, ['class' => 'form-control' . ($errors->has('id_perfiles') ? ' is-invalid' : ''), 'placeholder' => 'Id Perfiles']) }}
            {!! $errors->first('id_perfiles', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>