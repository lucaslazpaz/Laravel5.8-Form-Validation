<!DOCTYPE html>
    <head>
        <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <style>
        body {
            padding: 15px;
        }
        .navbar {
            margin-bottom: 40px;
        }
    </style>
    </head>
    <body>
        
        <div class="container">
            @component('layout.component_navbar', ["current" => $current])
            @endcomponent
            <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
            </main>
        </div>
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>