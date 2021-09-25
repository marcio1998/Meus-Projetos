<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Projeto Nutricionista</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        a:hover {
            background: #add8e6;
        }

        a.disabled {
            pointer-events: none;
        }

        body {
            background: #f8f9fa;

        }

        h2 {
            color: black;
            font-family: Arial, Helvetica, sans-serif font-size: 2em;
        }

        p {
            color: grey;
            font-size: 1.2em;
            font-weight: 700;
            font-family: Arial, Helvetica, sans-serif;
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
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        @hasSection('javascript')
            @yield('javascript')
        @endif
    <main role="main">
        <div id="menu">
            @if (Auth::check())
                @switch(Auth::user()->nutricionista)
                    @case(1)
                        @component('component.menuNutricionista')
                        @endcomponent
                    @break
                    @case(0)
                        @component('component.menuPaciente')
                        @endcomponent
                    @break
                    @default
                        @component('component.menu')
                        @endcomponent
                    @break
                @endswitch
            @else
                @component('component.menu')
                @endcomponent
                @endif

            </div>
            @yield('body')
        </main>
    </body>

    </html>
