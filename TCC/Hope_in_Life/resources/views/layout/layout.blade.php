<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela chat</title>
        @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'resources/css/TelaChat.css', 
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,-25" />
</head>
<body>
    
<nav class="navbar navbar-expand-lg" style="background:#41BFB3">
        
        <div class="container-fluid">
          <a href=""><img src="{{Vite::asset('resources/img/HL - Logotipo.png')}}" class="logo"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" hidden>
                  <span class="navbar-toggler-icon"></span>
                  </button>
      
                  
              <div id="divBusca"><input class="form-control me-20" type="search" placeholder="Search" aria-label="Search"></div>  
              <ul class="nav nav-underline">
                  
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{Route('home')}}">Home</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link " href="{{Route('DoacoesRealizadas')}}">Doações</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link " href="{{Route('ListarONGs')}}">ListarONGs</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link " href="{{Route('ListarNecessidades')}}">Necessidades</a>
                  </li>
                
             </ul>
       </div>
</nav>


@yield('conteudo')





<footer class="main-footer ">
    <a class="QS" href="{{Route('Informacoes')}}">Quem somos?</a>
    <a class="Info" href="{{Route('Informacoes')}}">Informações</a>
    <a href=""><img src="{{Vite::asset('resources/img/instagram.png')}}" class="img1-footer"></a>
    <a href=""><img src="{{Vite::asset('resources/img/linkedin.png')}}" class="img2-footer"></a>
</footer>
</body>
</html>