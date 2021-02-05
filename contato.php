<?Php include ("email.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Best of British | Entre em Contato </title>
		<link rel="icon" href="img/favicon.png"/>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/css.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body>
		<!-- menu -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="index.html">
						<img class="logo" src="img/logo.png" alt="Best of British"/>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html">Home</a></li>
						<li><a href="historia.html">História</a></li>
						<li><a href="aulas.html">Aulas</a></li>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="login.php">Área Restrita</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!--fim menu-->

<!-- contato -->
<section id="contato">
	<div class="overlay1">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="titulo">Entre em contato:</h2>
				</br>
					<p class="texto"> Prepare os seus materiais e entre em contato com a Best of British! 
						Invista em seu futuro através do conhecimento!
					</p> 
				</br>
					<address class="texto">
						<p><i class="fa fa-map-marker"></i>  Av. Júlio Prestes, 213 - Torres Tibagy </p>
						<p><i class="fa fa-phone"></i> (11) 948615606 / (11) 2452-2795 </p>
					</address>
					<p class="texto">Nos acompanhe nas redes sociais! </p>
					<a class="texto" href="https://instagram.com/bestofbritish.ec"><i class="fa fa-instagram"></i> instagram.com/bestofbritish.ec </a> </br>
					<a class="texto" href=""><i class="fa fa-facebook"></i> facebook.com/bestofbritish.ec </a>
				</div>
				<div id="mapa" class="col-md-6 fadeInUp">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.1204578038955!2d-46.552179385386694!3d-23.456119063598457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef5094b367ebb%3A0xa8c807560b24d895!2sAv.%20J%C3%BAlio%20Prestes%2C%20213%20-%20Vila%20Galvao%2C%20Guarulhos%20-%20SP%2C%2007063-010!5e0!3m2!1spt-BR!2sbr!4v1606389025403!5m2!1spt-BR!2sbr" width="400" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fim contato -->

<!--email-->
<div id="error"></div>
<div class="container">
	<h4 class="sent-notification"></h4>
	<h3 class="titulo"> Mande sua mensagem para nós! </h3>
	<form id="form" action="email.php" method="post">
			<div class="form-group>">
			<label class="texto1"> Nome: </label>
			<input id="name" class="form-control" type="text" name="name" placeholder="Digite seu nome" required> 
			</div>
			<br>
			<div class="form-group">
			<label class="texto1"> Email: </label>
			<input id="email" class="form-control" type="text" name="email" placeholder="Digite aqui o seu e-mail" required> 
			</div>

			<div class="form-group">
			<label class="texto1"> Assunto: </label>
			<input id="subject" class="form-control" type="text" name="subject" placeholder="Digite o assunto da mensagem" required> 
			</div>

			<div class="form-group">
			<label class="texto1"> Mensagem: </label>
			<textarea id="message" class="form-control" rows="5" cols="60" name="message" placeholder="Digite aqui sua mensagem" required></textarea>
			</div>
			
			<div class="form-group">
			<button type="submit" class="btn">Enviar</button>
			</div>
	</form>
</div>
<!-- fim email-->

<!-- rodape -->
<footer>
	<div id="rodape1">
		<div class="row">
			<p class="rodape"> Copyright © 2020 </p>
				<p> Desenvolvido por Start Web Desenvolvimento e Segurança </p>
		</div>
	</div>
</footer>
<!-- fim rodape -->
		
	</body>
	</html>