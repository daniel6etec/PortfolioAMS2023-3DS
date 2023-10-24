<html>

<head>

    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMULÁRIO DE CADASTRO DO DOADOR | BY HOPE IN LIFE</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/functions.js', 'resources/css/style.css', 'node_modules/bootstrap/dist/css/bootstrap.min.css', 'node_modules/bootstrap/dist/js/bootstrap.bundle.js'])

</head>

<body style="background:#64CCC9">

    <header><!--cabecalho-->
        <nav class="navbar navbar-expand-lg" style="background:#41BFB3">

            <div class="container-fluid">
                <a class="navbar-brand" href="{{ Route('home') }}"><img
                        src="{{ Vite::asset('resources/img/HL - Logotipo - SEM LETREIRO.png') }}" class="logo"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" hidden>
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div id="divBusca"><input class="form-control" type="search" placeholder="Pesquisar..."
                        aria-label="Search"></div>
                <ul class="nav nav-underline" id="">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ Route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ Route('DoacoesRealizadas') }}">Minhas
                            doações</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('ListarONGs') }}">As ONGs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('ListarNecessidades') }}">Necessidades</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('ListarConversas') }}">Chat</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary" type="button" style="background-color: #41BFB3;"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <a href=""><img src="{{ Vite::asset('resources/img/setaparabaixo.ico') }}"
                                        class="setab"></a>
                                <a href=""><img src="{{ Vite::asset('resources/img/usuario.ico') }}"
                                        class="users"></a>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Dados de pagamento</a></li>
                                <li><a class="dropdown-item" href="#"></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href=""><img src="{{ Vite::asset('resources/img/notificacao.ico') }}"
                                class="notification"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header><br><!--cabecalho-->

    <div class="container" style="background-color:#9BF2EA"><br><!-- formulario -->
        <div class="row titulos">
            <div class="col Cadastro">
                <div class="titulo">
                    <h4>Cadastre-se</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form id="formulario" action={{ route('cadastrarDoador') }} method="POST">
                    @csrf
                    <fieldset><!--dadospessoais--->
                        <h2>Dados Pessoais</h2>
                        <input type="text" class="form-control" id="Nome" placeholder="Nome:"
                            name="Nome"><br>
                        <input type="text" class="form-control" id="Sobrenome" placeholder="SobreNome:"
                            name="Nome"><br>
                        <input type="text" class="form-control" id="Data" placeholder="Data de Nascimento:"
                            name="Data"><br>
                        <input type="text" class="form-control" id="CPF" placeholder="CPF:" name="CPF"><br>
                        <input type="text" class="form-control" id="Endereco" placeholder="Endereço:"
                            name="Endereco"><br>
                        <input type="text" class="form-control" id="Email" placeholder="Email:"
                            name="Email_Contato"><br>
                        <input type="text" class="form-control" id="Telefone" placeholder="Telefone:"
                            name="Telefone"><br>
                        <button type="button" class="btn btn-success next acao" name="next">Próximo</button>
                    </fieldset><!--dadospessoais--->

                    <fieldset><!--meiosdecontatos--->
                        <h2>Dados de login</h2>
                        <input type="text" class="form-control" id="Email_Contato" placeholder="Email:"
                            name="Email"><br>
                        <input type="text" class="form-control" id="Senha" placeholder="Senha:"
                            name="Senha"><br>
                        <input type="text" class="form-control" id="Senha_confirmation"
                            placeholder="Confirmar senha:" name="Senha_confirmation"><br>
                        <button type="button" class="btn btn-success prev acao" name="prev">Anterior</button>
                        <button type="submit" class="btn btn-success next acao" name="next">Próximo</button>
                    </fieldset><!--meiosdecontatos--->

                    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
                        crossorigin="anonymous"></script>
                    @vite(['resources/js/functions.js'])
                </form>
            </div>
        </div>
    </div><!-- formulario -->
    <br><br><br><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!--Rodapé-->
    <footer class="main-footer">
        <a class="QS" href="{{ Route('Informacoes') }}">Quem somos?</a>
        <a class="Info" href="{{ Route('Informacoes') }}">Informações</a>
        <a href=""><img src="{{ Vite::asset('resources/img/instagram.png') }}" class="img1-footer"></a>
        <a href=""><img src="{{ Vite::asset('resources/img/linkedin.png') }}" class="img2-footer"></a>
    </footer>

    <!--fim do Rodapé-->

</body><br><br>



</html>
