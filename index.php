<?php

require_once 'menu.php';

?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Categoria</title>
	</head>
	<body>
		<h2>Cadastro das categorias<h2>
		<form action = "cadcat.php" method="post">
			<input type = "text" name = "nome"/>
			<input type = "submit" value="Cadastrar categoria"/>
		</form>
	</body>
</html>