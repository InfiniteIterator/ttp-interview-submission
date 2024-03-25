<html>

    <head>
        <title>Widgets</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Edit Widget</h1>

            {{ Form::model($widget, ['url' => '/widgets/' . $widget->id, 'method' => 'post']) }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    {{ Form::label('color', 'Color') }}
                    {{ Form::text('color', null, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('color'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('color') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    {{ Form::label('description', 'Description') }}
                    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                </div>
                {{ Form::submit('Update Widget', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}

        </div>
    </body>
</html>
