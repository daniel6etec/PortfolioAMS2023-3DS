<html>

<head>

    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INDEX DOADOR | BY HOPE IN LIFE</title>

    @vite([
    'resources/css/app.css',
    'resources/css/index.css',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/bootstrap-icons/font/bootstrap-icons.css',
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    'resources/js/slider.js'
    ])

    <script type="module">
        import {
            rolagem
        } from "{{Vite::asset('resources/js/slider.js')}}"

        $('.proximo-1').on('click', function() {
            rolagem($('.lista-1'), $('.lista-1 .col'), 1)
        })

        $('.anterior-1').on('click', function() {
            rolagem($('.lista-1'), $('.lista-1 .col'), 0)
        })

        $('.proximo-2').on('click', function() {
            rolagem($('.lista-2'), $('.lista-2 .col'), 1)
        })

        $('.anterior-2').on('click', function() {
            rolagem($('.lista-2'), $('.lista-2 .col'), 0)
        })
    </script>




</head>

<body style="background:#64CCC9">
    <style>
        /* modal */

        .modal-body {
            text-align: center;
        }

        .modal-body img {
            display: inline-block;
        }

        .modal-content {
            background-color: #64CCC9 !important;
        }
    </style>

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
                        <a class="nav-link active" aria-current="page" href="{{Route('home')}}">Home</a>
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
                        <div class="dropdown">
                            <button class="btn btn-secondary" type="button" style="background-color: #41BFB3;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <a href=""><img src="{{Vite::asset('resources/img/setaparabaixo.ico')}}" class="setab"></a>
                                <a href=""><img src="{{Vite::asset('resources/img/usuario.ico')}}" class="users"></a>
                            </button>
                            <ul class="dropdown-menu">
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
    </header><!--cabecalho-->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{Vite::asset('resources/img/hope in life.png')}}" class="img-fluid" alt="..." width="100%">
            </div>
            <div class="carousel-item">
                <img src="{{Vite::asset('resources/img/hope in life.png')}}" class="img-fluid" alt="..." width="100%">
            </div>
            <div class="carousel-item">
                <img src="{{Vite::asset('resources/img/hope in life.png')}}" class="img-fluid" alt="..." width="100%">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br><br>
    <center>
        <h1 style="font-family: Italianno">Necessidades</h1>
    </center><br><br><br>

    <div class="container-fluid necessidades" style="background-color:#9BF2EA; padding: 20px; border-radius: 5px;">

        <div class="row lista lista-1">
            @for($i =0; $i < 10; $i++)
            <div class="col">

                <div class="card">
                    <img src="{{Vite::asset('resources/img/Fraldas.png')}}">
                    <div class="card-body">
                        <h5 class="card-title">Fralda Geriátrica</h5>

                        <p class="card-text">Necessita-se de 10 pacotes de fraldas geriátricas para doar a duas famílias de idosos.</p>

                    </div>
                </div>

            </div>
            @endfor

        </div>
        <div class="anterior anterior-1">
            <i class="bi bi-arrow-left-short" width="70px"></i>
        </div>

        <div class="proximo proximo-1">
            <i class="bi bi-arrow-right-short" width="70px"></i>
        </div>
    </div>



    <center>
        <h1 style="font-family: Italianno">ONGs</h1>
    </center><br><br><br><br>

    <div class="container-fluid necessidades" style="background-color:#9BF2EA; border-radius: 5px !important; padding: 20px;">
        <div class="row lista lista-2">
        
        @for ($i = 0; $i < 10; $i++)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{Vite::asset('resources/img/CAF.png')}}">
                    <div class="card-body">
                        <h5 class="card-title">Fralda Geriátrica</h5>
                        <p class="card-text">Necessita-se de 10 pacotes de fraldas geriátricas para doar a duas famílias de idosos.</p>
                    </div>
                </div>
            </div>
        @endfor

        </div>

        <div class="anterior anterior-2">
            <i class="bi bi-arrow-left-short" width="70px"></i>
        </div>

        <div class="proximo proximo-2">
            <i class="bi bi-arrow-right-short" width="70px"></i>
        </div>

    </div>
    <br>
    <br>
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