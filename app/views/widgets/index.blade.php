<html>

    <head>
        <title>Widgets</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

        {{ Form::open(['url' => '/widgets', 'class' => '']) }}
            <div>
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null) }}
            </div>
            <div>
                {{ Form::label('color', 'Color') }}
                {{ Form::text('color', null) }}
            </div>
            <div>
                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', null) }}
            </div>
            {{ Form::submit('Add Widget') }}
        {{ Form::close() }}

    </body>
</html>
