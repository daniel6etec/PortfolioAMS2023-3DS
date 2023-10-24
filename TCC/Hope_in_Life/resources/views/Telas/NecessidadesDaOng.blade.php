<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Necessidades da ONG</title>
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/css/NecessidadesDaOng.css', 
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
                      <a class="nav-link" href="{{Route('ListarConversas')}}">Chat</a>
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



<h1>Minhas necessidades</h1>


    <div class="container procurar text-center">
            <div class="row ">
                <div class="col pesquisa">
                    <div class="input">
                        <form class="d-flex pesquisar" role="search">
                                <input class="form-control me-2" type="search" placeholder="insira o nome de uma ong ou a descrição de uma doação..." aria-label="Search">
                        </form>
                    </div>
                </div>
                <div class="row ordena">
                <div class="col">
                    <div class="ordenar">
                        <label for="">Ordenar por:</label>
                        <select name="Ordem" id="">
                                    <option value="Nome">Nome</option>
                                    <option value="Data">Data</option>
                                    <option value="Id">Id</option>
                        </select>
                        <img src="{{Vite::asset('resources/img/Arrow 8 (1).png')}}" alt="" width="20px" height="20px">
                    </div>
                    
                </div>
                </div>
        </div>
    </div>


    <div class="container tabela">
    <table class="table">
        <thead>
            <tr>
                <th  scope="col">Nome</th>
                <th  scope="col">ID necessidade</th>
                <th >Meta</th>
                <th  scope="col">Categoria</th>
                <th  scope="col">Descrição</th>
                <th  scope="col">Data de criação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">Fraldas Geriatricas</td>
                <td>001</td>
                <td class="doacoes"><div>3/10</div> <div class="meta"><img src="{{Vite::asset('resources/img/Arrow 9.png')}}" alt="" width="30px" height="15px"></div></td>
                <td>Roupas</td>
                <td>3 agasalhos, 2 casacos, uma calça e um gorro</td>
                <td>05/08/2023</td>


            </tr>
                <br>
            <tr>
               
                <td scope="row">Casa Ronald McDonald</td>
                <td>002</td>
                <td class="doacoes"><div>04/10</div> <div class="meta"><img src="{{Vite::asset('resources/img/Arrow 9.png')}}" alt="" width="30px" height="15px"></div></td>
                <td>Alimentos</td>
                <td>3 agasalhos, 2 casacos, uma calça e um gorro</td>
                <td>05/08/2023</td>


            </tr>

        </tbody>
    </table>
    

</div>
        <div class="container">
            <div class="row">
                <div class="col desativadas">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Necessidades desativadas
                        </label>
                    </div>
                </div>
                <div class="col-7 botoes">
                    <div class="botao">
                    <button>Atualizar</button>
                    </div>
                    <div class="botao">
                    <button>Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>

<br><br><br><br><br><br>


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