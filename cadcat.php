<?php
	require_once "conexao.php";
	$nome = $_POST["nome"];
	
	$query = "INSERT INTO categoria (nome) VALUES ('$nome')";
	$insere = mysqli_query ($conexao, $query);
	if ($insere == 1){
		echo "<script> alert ('Dados cadastrados com sucesso, clique em voltar') </script>";
	}else{
		echo "<script> alert ('Ops ... Houve um erro') </script>";
	}
?>
<html>
	<head>
		<title>
			cadastramento de categoria
		</title>
	</head>
	<body>
		<form action = "index.php" method="post">
		<input type="submit" value = "Voltar"/>
		</form>
	</body>
</html>