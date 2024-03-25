<html>

    <head>
        <title>Widgets</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <h1 class="mb-4">Widgets</h1>

            @if($widgets->count() > 0)
                <div class="border">
                    <?php $alt = false; ?>
                    <ul class="list-group">
                        @foreach ($widgets as $widget)
                            <a href="{{ route('widgets.edit', $widget->id) }}" class="list-group-item list-group-item-action {{ $alt ? 'list-group-item-secondary' : '' }}" style="text-decoration: none;">
                                <b>{{ $widget->name }}</b> - Color: {{ $widget->color }} | Description: {{ $widget->description }}
                            </a>
                            <?php $alt = !$alt; ?>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h2 class="mt-5 mb-3">Add a New Widget</h2>
            {{ Form::open(['url' => '/widgets', 'class' => '']) }}
                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <b>{{ $errors->first('name') }}</b>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    {{ Form::label('color', 'Color') }}
                    {{ Form::text('color', null, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('color'))
                        <span class="invalid-feedback" role="alert">
                            <b>{{ $errors->first('color') }}</b>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    {{ Form::label('description', 'Description') }}
                    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                </div>
                {{ Form::submit('Add Widget', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}

        </div>
    </body>
</html>
