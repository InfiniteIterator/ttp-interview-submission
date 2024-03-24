<html>

    <head>
        <title>Widgets</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <h2 class="mt-5 mb-3">Add a New Widget</h2>
            {{ Form::open(['url' => '/widgets', 'class' => '']) }}
                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('color', 'Color') }}
                    {{ Form::text('color', null, ['class' => 'form-control']) }}
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
