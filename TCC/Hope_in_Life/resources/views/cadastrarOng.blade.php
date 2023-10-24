<html>

<head>

    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMULÁRIO DE CADASTRO DA ONG | BY HOPE IN LIFE</title>

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
    </header>
    <br>
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
                <form id="formulario">

                    <fieldset><!--dadospessoais--->
          <h2>Dados da ONG</h2>
           <input type="text" class="form-control" id="nomedoador" placeholder="Nome da ONG:"><br>
         <input type="text" class="form-control" id="sobrenomedoador"placeholder="Data de fundação:"><br>
          <input type="text" class="form-control" id="sobrenomedoador"
                            placeholder="Data de Nascimento:"><br>
             <input type="text" class="form-control" id="sobrenomedoador" placeholder="CNPJ:"><br>
           <input type="text" class="form-control" id="sobrenomedoador" placeholder="Categoria:"><br>
                <input type="text" class="form-control" id="sobrenomedoador" placeholder="História:"><br>
            <input type="text" class="form-control" id="sobrenomedoador"
            placeholder="Horário de funcionamento:"><br>
           <input type="text" class="form-control" id="sobrenomedoador" placeholder="Endereço:"><br>
                        <button type="button" class="btn btn-success next acao" name="next">Próximo</button>
                    </fieldset><!--dadospessoais--->

                    <fieldset><!--meiosdecontatos--->
                 <h2>Dados do responsavel legal</h2>
               <input type="text" class="form-control" id="nomedoador" placeholder="Nome Completo:"><br>
                        <input type="text" class="form-control" id="sobrenomedoador" placeholder="Email:"><br>
             <input type="text" class="form-control" id="sobrenomedoador"placeholder="Data de nascimento:"><br>
                        <input type="text" class="form-control" id="sobrenomedoador"placeholder="Comprovante de endereço:"><br>
                        <input type="text" class="form-control" id="sobrenomedoador" placeholder="CPF:"><br>
         <input type="text" class="form-control" id="sobrenomedoador" placeholder="RG:"><br>
                        <input type="text" class="form-control" id="sobrenomedoador" placeholder="Telefone:"><br>
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
    <br>
    <!--Rodapé-->
<footer class="main-footer">
        <a class="QS" href="{{ Route('Informacoes') }}">Quem somos?</a>
  <a class="Info" href="{{ Route('Informacoes') }}">Informações</a>
<a href=""><img src="{{ Vite::asset('resources/img/instagram.png') }}" class="img1-footer"></a>
        <a href=""><img src="{{ Vite::asset('resources/img/linkedin.png') }}" class="img2-footer"></a>
    </footer>

    <!--fim do Rodapé-->
</body>


</html>
