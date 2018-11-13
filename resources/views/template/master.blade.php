<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{url('/js/blog.js')}}"></script>
</head>
<body class="@yield('classes')">
    @if(!Auth::guest())

            <nav class="grey darken-4">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo"><strong>RE </strong>| BLOG</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">

                            @if(Auth::user()->tipo !== 'autor')
                                <li><a href="{{route('novaCategoria')}}">Criar categoria</a></li>

                                <li><a href="{{route('novoAutor')}}">Criar autor</a></li>

                            @endif

                            @if(Auth::user()->tipo == 'autor')

                                <li><a href="{{route('novoPost')}}">Criar publicação</a></li>

                            @endif
                                <li style="text-transform: capitalize">
                                    Bem vindo, {{Auth::user()->name}}
                                    <a class="material-icons" style="color: #d4e157; vertical-align: middle" href="{{route('logout')}}">exit_to_app</a>
                                </li>

                        </ul>
                    </div>
                </div>
            </nav>

    @endif

    <div class="conteudo">
        @yield('conteudo')
    </div>
</body>
</html>