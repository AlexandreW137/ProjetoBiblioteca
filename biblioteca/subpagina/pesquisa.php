<?php
include('../conexao.php');
$nome = $mysqli->real_escape_string($_GET['nome_livro']);
$sql_code = "SELECT * FROM livro WHERE nome LIKE '%$nome%'";

$sql_query = $mysqli->query($sql_code) or die("Erro ao consultar!" . $mysqli->error);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../front end/pesquisa.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <header class="o-header">
            
            <div class="menu">
                <h1>
                    <a href="../index.php">Ione Parcianello </a>
                </h1>

                <nav>
                    <ul>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Livros</a></li>
                        <li><a href="../cadastro.php">Login</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <main class="o-main">

            <div class="livro">
                <picture>
                    <?php
                    while($dados = $sql_query->fetch_assoc()){
                        ?>
                        <img id="ImagemParaMostrar" src="<?php echo $dados['imagem_livro']; ?>">

       
                 
                    
                </picture>
                <div class="info">

                <?php

                    echo "<h1>" . $dados['nome'] . "</h1>";

                    ?>
                    

                    <h3>Descrição:</h3>
                    <?php 
                    
                        echo $dados['descricao'] ;
                        
                    
                    
                
                    ?>
                    <br>

                    <h4>Autor:</h4>
                    <p><em>Lorem, ipsum dolor.</em></p>
                    <br>
                    <button class="reservar">reservar</button>

                </div>

            </div>
            <aside class="o-aside">
                <div class="autor">
                    <picture>
                        <img id="autor1" src="../../../imagens/autor.jfif" alt="">
                        <br>
                        <a class="pagina-autor" href="#">Lorem ipsum dolor sit.</a>
                    </picture>

                </div>
            </aside>

        </main>

        <section class="basic-info">
            <div class="basico">
                <h5>Número de páginas:</h5>
                <?php
             echo "<p>" . $dados['n_paginas'] . "</p>";
            }
                ?>
                
                <br>
                <h5>Idioma:</h5>
                <p>Português</p>
            </div>
        </section>


        <section class="recomendacoes">
            <article class="recentes">
                <h2 style=" font-size: 25px;text-align: center; margin-top:12px">Sugestões com base nesse livro:</h2>
                <div class="galeria">
                    <a href="livros.html"><img src="../../../imagens/livro.jfif" alt=""></a>
                    <a href="livros.html"><img src="../../../imagens/livro.jfif" alt=""></a>
                    <a href="livros.html"><img src="../../../imagens/livro.jfif" alt=""></a>
                    <a href="livros.html"><img src="../../../imagens/livro.jfif" alt=""></a>
                    <a href="livros.html"><img src="../../../imagens/livro.jfif" alt=""></a>
                    <a href="livros.html"><img src="../../../imagens/livro.jfif" alt=""></a>
                    <a href="livros.html"><img src="../../../imagens/livro.jfif" alt=""></a>
                    <a href="livros.html"><img src="../../../imagens/livro.jfif" alt=""></a>
                </div>
        </section>
        <footer class="o-footer">
            footer
        </footer>


    </div>

</body>

</html>