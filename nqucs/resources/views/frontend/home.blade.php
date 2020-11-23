<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <global-navbar imgs="{{json_encode(array(
            asset('img/navbar-1.jpg'),
            asset('img/navbar-2.png'),
            asset('img/navbar-3.jpg'),
            ))}}">></global-navbar>
        <div class="container">
            <div>
                @include('frontend.header')
            </div>
            <silde-img imgs="{{json_encode(array(
            asset('img/index-silde1.jpg'),
            asset('img/index-silde2.jpg'),
            asset('img/index-silde3.jpg'),
            ))}}">
            </silde-img>
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />

        </div>
    </div>

</body>

</html>