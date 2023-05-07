<div class="box box-info">
    <div class="box-body">
        <div class="row">
            {{-- <div class="form-group">
            {{ Form::label('pag_cantidad') }}
            {{ Form::number('pag_cantidad', $pago->pag_cantidad, ['class' => 'form-control' . ($errors->has('pag_cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Pag Cantidad', 'max' => '999', 'min' => '1']) }}
            {!! $errors->first('pag_cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
            <div class="form-group col-3">
                <div class="">

                    <input type="number" name="pag_cantidad" class="form-control" min="1" max="9999"
                        {{ $errors->has('pag_cantidad') ? ' is-invalid' : '' }} value="{{ $pago->pag_cantidad }}"
                        id="" placeholder="Cantidad">
                    {!! $errors->first('pag_cantidad', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group col-3">

                <div class="">
                    <select name="select" class="form-control">
                        <option value="value1">Value 1</option>
                        <option value="value2" selected>Value 2</option>
                        <option value="value3">Value 3</option>
                    </select>
                </div>

            </div>
            <div class="form-group col-3">

                <div class="">
                    <input type="file" class="form-control" name="" id="">
                </div>

            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <a href="servicios.create">
            <button href="servicios.create" type="submit" class="btn btn-success"><i class="fa fa-fw fa-save"></i>
                Guardar</button>
        </a>
        <a type="submit" href="{{ route('pagos.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
</div>
