<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="front end/home/css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>

<body>


    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Ione Parcianello</h2>
            <ul>

                <div class="center">
                    <h3 class="h3-conta">Minha Conta</h3>
                </div>
                <div class="suaconta">
                    <div class="center">
                        <li class="li-conta"><a href="#">Meu Perfil</a></li>
                        <li class="li-conta"><a href="#">Minhas reservas</a></li>
                        <li class="li-conta"><a href="#">Livros lidos</a></li>
                    </div>
                </div>


                <div class="livros">
                    <div class="center">
                        <h3>Livros</h3>
                    </div>
                    <div class="center">
                        <li class="li-livro"><a href="#">Recomendados</a></li>
                        <li class="li-livro"><a href="#">Novos adicionados</a></li>
                        <li class="li-livro"><a href="#">Pesquisa por categoria</a></li>
                    </div>

                </div>

            </ul>

            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <div class="header">
                <div class="wrap">
                    <div class="search2">
                        <input type="text" class="searchTerm" placeholder="Pesquisar">
                        <button type="submit" class="searchButton">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="container-fuild">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center">
                            <h4 class="h4-filtro">Categorias</h4>
                        </div>
                        <!-- Filter buttons -->

                    </div>
                    <div id="myBtnContainer" class="col-md-12">

                        <button class="btn" onclick="filterSelection('fantasy')"> Fantasia</button>
                        <button class="btn" onclick="filterSelection('romance')"> Romance</button>
                        <button class="btn" onclick="filterSelection('autoBiograpghy')"> Auto bibiografia</button>
                        <button class="btn" onclick="filterSelection('crimeDrama')"> Crime-Drama</button>
                        <button class="btn" onclick="filterSelection('history')"> Historia</button>
                        <button class="btn" onclick="filterSelection('fiction')"> Ficção</button>
                        <button class="btn" onclick="filterSelection('childFiction')"> Infantil</button>
                        <button class="btn" onclick="filterSelection('nonFiction')"> Não ficção</button>
                        <button class="btn" onclick="filterSelection('thriller')"> Ação</button>
                        <button class="btn" onclick="filterSelection('mystery')"> Misterio</button>
                        <button class="btn" onclick="filterSelection('play')"> Play</button>
                        <button class="btn" onclick="filterSelection('memoir')"> Memoria</button>
                        <button class="btn" onclick="filterSelection('novel')"> Novela</button>
                        <button class="btn" onclick="filterSelection('critique')"> Critica</button>
                    </div>
                </div>
            </div>
            <div class="center">
                <div class="dropdown">
                    <button class="dropbtn">Categorias </button>
                    <div class="dropdown-content">
                        <a onclick="filterSelection('all')"> Mostrar todos</a>
                        <a onclick="filterSelection('fantasy')"> Fantasia</a>
                        <a onclick="filterSelection('romance')"> Romance</a>
                        <a onclick="filterSelection('autoBiograpghy')"> Auto bibiografia</a>
                        <a onclick="filterSelection('crimeDrama')"> Crime-Drama</a>
                        <a onclick="filterSelection('history')"> Historia</a>
                        <a onclick="filterSelection('childFiction')"> Infantil</a>
                        <a onclick="filterSelection('nonFiction')"> Não ficção</a>
                        <a onclick="filterSelection('thriller')"> Ação</a>
                        <a onclick="filterSelection('mystery')"> Misterio</a>
                        <a onclick="filterSelection('play')"> Play</a>
                        <a onclick="filterSelection('memoir')"> Memoria</a>
                        <a onclick="filterSelection('novel')"> Novela</a>
                        <a onclick="filterSelection('critique')"> Critica</a>
                    </div>
                </div>
                <div class="info">
                    <div>
                        <div class="center">
                            <h4>Recomendações: </h4>
                        </div>
                        <img class="img-livro" src="front end/imagens/livro.jpg">
                        <img class="img-livro" src="front end/imagens/livro2.jpg">
                        <img class="img-livro" src="front end/imagens/livro3.jpg">
                        <img class="img-livro" src="front end/imagens/livro4.jpg">
                        <img class="img-livro" src="front end/imagens/livro5.jpg">
                        <img class="img-livro" src="front end/imagens/livro6.jpg">

                    </div>
                    <div>
                        <div class="center">
                            <h4>Novos livros:</h4>
                        </div>
                        <img class="img-livro" src="front end/imagens/livro.jpg">
                        <img class="img-livro" src="front end/imagens/livro4.jpg">
                        <img class="img-livro" src="front end/imagens/livro5.jpg">
                        <img class="img-livro" src="front end/imagens/livro6.jpg">
                        <img class="img-livro" src="front end/imagens/livro3.jpg">
                        <img class="img-livro" src="front end/imagens/livro2.jpg">


                    </div>
                    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                    <script src="../javascript/script.js"></script>





</body>

</html>