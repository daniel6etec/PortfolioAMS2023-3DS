<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Conversas</title>
    @vite([
        'resources/css/app.css', 
        'resources/css/ListarConversas.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
    
<header><!--cabecalho-->   
<nav class="navbar navbar-expand-lg" style="background:#41BFB3">
        
        <div class="container-fluid">
          <a class="navbar-brand" href="{{Route('home')}}"><img src="{{Vite::asset('resources/img/HL - Logotipo - SEM LETREIRO.png')}}" class="logo"></a>
          
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" hidden>
                  <span class="navbar-toggler-icon"></span>
                  </button>
      
                  
              <div id="divBusca"><input class="form-control" type="search" placeholder="Pesquisar..." aria-label="Search"></div>  
              <ul class="nav nav-underline" id="">
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
                      <a class="nav-link active" href="{{Route('ListarConversas')}}">Chat</a>
                  </li>
                  <li class="nav-item">
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
                  </li>
                  <li class="nav-item">
                    <a href=""><img src="{{Vite::asset('resources/img/notificacao.ico')}}" class="notification"></a>
                  </li>
             </ul>
       </div>
      </nav>
</header>

<h1>Conversas</h1>

<div class="container pesquisa">
    <div class="row">
        <div class="col">
            <form class="d-flex container-sm" role="search" width="10%">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    
            </form>
        </div>
    </div>
</div>
    <div class="container contato">
            <div class="row">
            <div class="col-2">
                <div class="imagem">
                    <div class="foto">
                            <img src="{{Vite::asset('resources/img/CAF.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col">

            <h5> Casa Filadelfia</h5>
                    <p> Ola, boa tarde,como vai?</p>

                    <h6>Data: 11/10/2020</h6>
            </div>
    </div>
    </div>

    <div class="container contato">
            <div class="row">
            <div class="col-2">
                <div class="imagem">
                    <div class="foto">
                            <img src="{{Vite::asset('resources/img/CasaRonaldMcDonald.png')}}" alt="" style="background-color: blue;">
                    </div>
                </div>
            </div>
            <div class="col">

            <h5> Casa Ronald McDoanld</h5>
                    <p> Muito obrigado pela doação!</p>

                    <h6>Data: 11/10/2020</h6>
            </div>
    </div>
    </div>

    <div class="container contato">
            <div class="row">
            <div class="col-2">
                <div class="imagem">
                    <div class="foto">
                            <img src="{{Vite::asset('resources/img/Refugio343.png')}}" alt="" >
                    </div>
                </div>
            </div>
            <div class="col">

            <h5> Refugio 343</h5>
                    <p> Estamos aguardando</p>

                    <h6>Data: 11/10/2020</h6>
            </div>
    </div>
    </div>
<br><br><br>
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