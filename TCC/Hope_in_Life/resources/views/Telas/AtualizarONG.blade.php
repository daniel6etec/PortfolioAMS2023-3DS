<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar dados ONG</title>
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/css/AtualizarONG.css', 
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

<h1>Atualizar dados</h1>
    <div class="container-sm atualizar">
        <div class="row">
            <div class="col imagem">
                <div class="img">
                    <img src="{{Vite::asset('resources/img/Frame 60 (1).png')}}"  min-width="200px" min-height="200px" alt="" class="img-fluid">
                    <div class="atualizar">
                        <button class="btn btn-primary" type="button">Atualizar imagem</button>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <form action="" method="post">
                <label for="" class="form-label">Nome da ONG:</label>
                <input type="text" class="form-control">
                <label for="" class="form-label">Email:</label>
                <input type="email" class="form-control">
                <label for="" class="form-label">CNPJ:</label>
                <input type="text" class="form-control">
                <label for="" class="form-label">Descrição:</label>
                <input type="text" class="form-control">
                <label for="" class="form-label">Data de fundação:</label>
                <input type="date" class="form-control">
                <label for="" class="form-label">Horário de funcionamento:</label>
                <input type="text" class="form-control">
                <label for="" class="form-label">Causa que apoia:</label>
                <select name="" id="" class="form-control">
                    <option value="">Roupas</option>
                    <option value="">Alimentos</option>
                    <option value=""></option>
                </select>
                <div class="submit">
                    <button class="btn btn-primary" type="button">Enviar</button>
                </div>
                </form>
            </div>
           
        </div>
    </div>
    <h1>Dados do responsável legal:</h1>
        <div class="container-sm responsavelLegal">
            <div class="row">
                <div class="col">
                    <form action="" method="post">
                    <label for="" class="form-label">Nome:</label>
                    <input type="text" class="form-control">
                    <label for="" class="form-label">Email:</label>
                    <input type="email" class="form-control">
                    <label for="" class="form-label">Endereço:</label>
                    <input type="text" class="form-control">
                    <label for="" class="form-label">Data de nascimento:</label>
                    <input type="date" class="form-control">
                    <label for="" class="form-label">CPF:</label>
                    <input type="text" class="form-control">
                    <label for="" class="form-label">RG:</label>
                    <input type="text" class="form-control">
                    <label for="" class="form-label">Telefone:</label>
                    <input type="tel" name="" id="" class="form-control">
                    <div class="submit">
                        <button class="btn btn-primary" type="button">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

                

        <div class="container-sm tabela">
            <div class="row">
                <div class="col">
                    <h2>Seus telefones</h2>
                </div>
            </div>
        
            <div class="row lista">
                <div class="col">
                <table class="table"> 
                    <thead>
                        <tr>
                            <th>Número</th>
                            <th>Operadora</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>+ 55 11 91111-1111</td>
                            <td>TIM</td>
                            <td>Whatsapp</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="row">
                <div class="col text-end">
                    <button href="" class="botao">Adicionar+</button>
                </div>
            </div>
        </div>

        </div>
                
        <div class="container-sm tabela">
        <h2>Seus Endereços</h2>
            <div class="row lista">
                <div class="col">
                    <table class="table"> 
                        <thead>
                            <tr>
                                <th>Rua</th>
                                <th>Número</th>
                                <th>Bairro</th>
                                <th>Complemento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rua Almeida</td>
                                <td>5</td>
                                <td>São Miguel</td>
                                <td>Ao lado do banco bradesco</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col align-self-end text-end">
                    <button href="" class="botao">Adicionar+</button>
                </div>
            </div>
        </div>

        
   

    <h1>Atualizar senha:</h1>
        <div class="container-sm senha">
            <div class="row">
                <div class="col">
                <form action="" method="post">
                    <label for="" class="form-label">Senha:</label>
                    <input type="text" class="form-control">
                    <label for="" class="form-label">Nova Senha:</label>
                    <input type="text" class="form-control">
                    <div class="submit">
                        <button class="btn btn-primary" type="button">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container Pagamento">
            <h1>Dados de pagamento</h1>
            <h5>Atualiza os seus dados de pagamento</h5>
            <button class="btn btn-primary " type="button">Pagamento</button>
        </div>

        <div class="container desativar">
            <h1>Desativar conta</h1>
            <button class="btn btn-primary" type="button">Excluir conta</button>
        </div>

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