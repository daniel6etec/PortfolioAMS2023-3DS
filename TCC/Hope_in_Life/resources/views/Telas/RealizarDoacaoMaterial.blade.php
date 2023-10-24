<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação Material</title>

    @vite([
        'resources/css/app.css', 
        'resources/css/RealizarDoacaoMaterial.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootsrap/dist/js/bootstrap.bundle.js'
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

    <h2>Página de Doação</h2>

    <h2>Necessidade: Roupas para o Inverno</h2>

<div class="container Descricao">
    <h3>Doação Material:</h3>
        <div class="Campo">
            <h4>Descrição da doação:</h4>

            <textarea name="Descricao" id="">

    </textarea>
        </div>
</div>
            <div class="container titulo">
                <div class="row">
                    <div class="col">
                        <h4>Adicionar imagens da doação:</h4>
                    </div>
                </div>
            </div>
            <div class="container imagens">
                    <div class="row">
                        <div class="col">
                            <img src="{{Vite::asset('resources/img/RoupasInverno.png')}}" alt="" width="200px" height="200px">
                        </div>
                    </div>

                </div>
                <br>

<div class="doar">
<button type="button" class="btn btn-primary Botao">Concluir doação material</button>
</div>


                




    <div class="container Contato">
            <h4>Precisa contactar a ONG?</h4>

            <div class="row chat">

                <div class="col text-center">
                
                    <img src="{{Vite::asset('resources/img/chat.png')}}"  alt="">

                    <p>Chat</p>

                </div>

                <div class="col text-center">

                    <p>Número de telefone: (11)12345-1234</p>

                    <p>São Paulo, SP - Itaquera, Praça Itaquera</p>

                </div>

            </div>







    




    </div>
    <script>
    var arquivos = new Array
    var imagem = 0
    var NovaImagem = new Array


        function AdicionarImagem(event){    
            for (let index = 0; index < event.target.files.length; index++) {
                arquivos.push(imagem, event.target.files[index])
                var Image = document.createElement("img")
                NovaImagem.push([imagem, Image])
                var reader = new FileReader();
            
                var url = reader.readAsDataURL(event.target.files[0])

                reader.onload = function(){

                NovaImagem[imagem][1].src = reader.result

                alert(reader.result)

                document.getElementById('Previsualizacao').appendChild(NovaImagem[imagem][1])
                imagem += 1
                
                
            }
           

            }
        }




        function removerImagem(){

        }
        
        
    </script>



<footer class="main-footer">
    <div class="parte">
    <a class="QS" href="{{Route('Informacoes')}}">Quem somos?</a>
    <a class="Info" href="{{Route('Informacoes')}}">Informações</a>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
    </div>
   </footer>

</body>



</html>