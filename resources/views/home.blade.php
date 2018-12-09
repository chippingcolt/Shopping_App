<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ assets('css/app.css') }}" rel="stylesheet"/>

    </head>
    <body>
        <div id="app"><main-component></main-component></div>
        <script src="assets('js/app.js')"></script>
    </body>
</html>