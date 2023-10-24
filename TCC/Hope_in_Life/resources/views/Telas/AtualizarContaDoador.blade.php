<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar conta doador</title>
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/css/AtualizarContaDoador.css', 
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>

<header><!--cabecalho-->   
<nav class="navbar navbar-expand-lg" style="background:#41BFB3">

        <div class="container-fluid">
          <a class="navbar-brand" href="{{Route('home')}}"><img src="{{Vite::asset('resources/img/HL - Logotipo - SEM LETREIRO.png')}}" class="logo"></a>

         

              <div class="collapse navbar-collapse" id="navbarNav">
             
              <div id="divBusca"><input class="form-control" type="search" placeholder="Pesquisar..." aria-label="Search"></div>

              <ul class="nav navbar-nav" id="navbarNav">

                <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{Route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{Route('DoacoesRealizadas')}}">Minhas doações</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{Route('ListarONGs')}}">As ONGs</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{Route('ListarNecessidades')}}">Necessidades</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{Route('ListarConversas')}}">Chat</a>
                  </li>                 
             </ul>

             
             
             </div>

             
            <div class="botoes">

             <div class="dropdown" >
                        <button class="btn btn-secondary" type="button" style="background-color: #41BFB3;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <a href=""><img src="{{Vite::asset('resources/img/setaparabaixo.ico')}}" class="setab"></a>
                            <a href=""><img src="{{Vite::asset('resources/img/usuario.ico')}}" class="users"></a>
                        </button>
                        <ul class="dropdown-menu" >
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" href="#">Dados de pagamento</a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                        </ul>
             </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>

            <a><img src="{{Vite::asset('resources/img/notificacao.ico')}}" class="notification"></a>
            </div>

            </div>

      </nav>
</header>



<h1>Atualizar dados</h1>
    <div class="container atualizar">
        <div class="row">
            <div class="col-md-4 imagem">
                <div class="img">
                    <img src="{{Vite::asset('resources/img/Frame 60 (1).png')}}"  width="200px" height="200px" alt="" class="img-fluid">
                    <div class="atualizar">
                    <button class="btn btn-primary" type="button">Atualizar imagem</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="{{route("atualizarDoador")}}" method="post">
                    @csrf
                <label for="" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="Nome" value="{{$Doador->Nome}}">
                <label for="" class="form-label">Sobrenome:</label>
                <input type="text" class="form-control" name="Sobrenome" value="{{$Doador->Nome}}">
                <label for="" class="form-label">Email:</label>
                <input type="email" class="form-control" name="Email" value="{{$Doador->email}}">
                <label for="" class="form-label">Email Contato:</label>
                <input type="email" class="form-control" name="Email_Contato" value="{{$Doador->email_contato}}">
                <label for="" class="form-label">CPF:</label>
                <input type="text" class="form-control" name="CPF" value="{{$Doador->Tipo_Documento()->first()->NumeroDocumento}}">
                <label for="" class="form-label">Telefone:</label>
                <input type="tel" class="form-control"  name="Telefone" value="{{$Doador->Telefone()->first()->NumeroTelefone}}">
                <label for="" class="form-label">Endereco:</label>
                <input type="tel" class="form-control"  name="Endereco" value="{{$Doador->Endereco}}">
                <label for="" class="form-label">Data de nascimento:</label>
                <input type="text" class="form-control" name="Data" value="{{$Doador->Tipo_Origem->DataFundNasc}}">
                <div class="submit">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
                </form>
            </div>
           
        </div>
    </div>
    <h1>Atualizar senha</h1>
    <div class="container senha" style="max-width: 800px!important;">
        <div class="row">
            <div class="col">
            <form action="{{route('atualizarSenha')}}" method="post">
                @csrf
                <label for="" class="form-label">Senha:</label>
                <input type="text" name="password" class="form-control">
                <label for="" class="form-label">Nova Senha:</label>
                <input type="text" name="CadastrarSenha" class="form-control">
                <div class="submit">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container desativar">
    <h1>Desativar conta</h1>
        <a href="{{route('confirmarEmailDesativacao')}}"><button class="btn btn-primary" type="button">Excluir conta</button></a>
    </div>
    @if(session('success-update'))
        <p> Sucesso </p>
    @endif
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
    <a class="QS" href="{{Route('Informacoes')}}">Quem somos?</a>
    <a class="Info" href="{{Route('Informacoes')}}">Informações</a>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
   </footer>

        <!--fim do Rodapé-->
</body>
</html>