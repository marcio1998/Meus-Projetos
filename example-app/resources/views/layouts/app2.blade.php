<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Projeto Nutricionista</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        a {
            color: white;
        }
        a:hover {
            background: green;
        }
        body {
            background: #e6ffec;
        }
        h2 {
            color: green;
            font-family: 'Courier New', Courier, monospace;
            font-size: 4em;
        }
        p {
            color: green;
            font-size: 1.2em;
            font-family: 'Courier New', Courier, monospace;
        }
        footer {
            color: black;
            font-weight: bold;
            font-family: 'Lucida Handwriting', '	Brush Script MT';
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</head>

<body>
    <script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <div id="menu">
        @component('component.menu2')
        @endcomponent
    </div>
    @yield('body')
</body>

</html>
