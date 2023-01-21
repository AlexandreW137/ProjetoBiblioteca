<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="front end/cadastro.css">

</head> 

<body>
    
  <!-- partial:index.partial.html -->
  <div class="login-page">
    <div class="form">
      <form class="register-form">
        <input type="text" placeholder="Matricula" />
        <input type="password" placeholder="Senha" />
        <input type="text" placeholder="Endereço de e-mail" />
        <button class="entrar">Criar</button>
        <p class="message">Já tem uma conta? <a href="#">Entrar</a></p>
      </form>
      <form class="login-form">
        <input type="text" placeholder="Matricula" />
        <input type="password" placeholder="Senha" />
        <button class="entrar">Entrar</button>
        <p class="message">Não tem uma conta? <a href="#">Criar conta</a></p>
      </form>
      <a href="../../index.html">
        <button class="voltar">voltar</button>
      </a>
    </div>
  </div>
  <!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="front end/cadastro.js"></script>     

</body>

</html>