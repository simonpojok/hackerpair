<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome to HackerPair</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div>
            @yield('content')
        </div>
        <div>
            @section('advertisement')
                <p>
                    Score some HackerPair swag in our store!
                </p>
            @show
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}" type="javascript"></script>
</html>
