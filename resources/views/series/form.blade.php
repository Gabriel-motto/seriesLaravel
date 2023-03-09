<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $series->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Temporadas') }}
            {{ Form::number('seasons', $series->seasons, ['class' => 'form-control' . ($errors->has('seasons') ? ' is-invalid' : ''), 'placeholder' => 'Temporadas']) }}
            {!! $errors->first('Temporadas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Género') }}
            {{ Form::select('genre_id', $genre, $series->genre_id, ['class' => 'form-control' . ($errors->has('genre_id') ? ' is-invalid' : ''), 'placeholder' => 'Género']) }}
            {!! $errors->first('Género', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>