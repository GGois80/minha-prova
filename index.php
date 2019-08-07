<?php

require_once 'menu.php';

?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<meta charset="utf-8"/>
		<title>Categoria</title>
	</head>
	<body>
	<div class="categoria">
		<h2>Cadastro das categorias<h2>
		<form action = "cadcat.php" method="post">
			<input type = "text" name = "nome"/>
			<input type = "submit" value="Cadastrar categoria"/>
		</form>
	</div>	
	</body>
</html>