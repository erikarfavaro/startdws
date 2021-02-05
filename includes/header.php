<?php

  use \App\Session\Login;

  $usuarioLogado = Login::getUsuarioLogado();

  $usuario = $usuarioLogado ? ' <a href="logout.php" class="deslogar font-weight-bold mt-2 ml-2"> Sair </a>' : '';

?>
<!doctype html>
<html lang="en">
  <head>
  <style>
    .gerenciar{
        font-family: 'Open Sans', sans-serif;
        font-weight: 250;
        color: #a7182a;
    }

    .deslogar{
      color: #3c418b;
      margin-top:5px;
    }

    .deslogar:hover{
      color: a7182a;
    }
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" href="./img/favicon.png"/>
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/css.css">
    <title>Gerenciamento</title>
  </head>
  <body>
    		<!-- header -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
					<a href="index.html">
						<img class="logo" src="img/logo.png" alt="Best of British"/>
					</a>
          <h1 class="gerenciar"> Gerenciamento de Alunos e Aulas </h1>
          <div class='mt-2'>
            <?=$usuario?>
          </div>
          </div>
			</div>
		</nav>
		<!--fim header -->



