<?php
	require_once 'conexao.php';
	

	$nome_p = $_POST["nome"];
	$preco = $_POST["valor"];
	$descricao = $_POST["descricao"];
	$idCate = $_POST["setor"];
	
	
	$query="INSERT INTO prato (nome_p, preco,  descricao, idCate) VALUES ('$nome_p', '$preco', '$descricao', '$idCate')";
	//echo $query;exit;
	$insere= mysqli_query ($conexao,$query);
	if($insere==1){
		echo "<script>alert ('Dados inseridos com sucesso') </script> ";
	}else{
		echo "<script>alert ('Deu ruim') </script> ";
	}
	
?>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<title>
		index
		</title>
	</head>
	<body>
		<form action="cad_prato.php" method="post"/>
			<p><input type="submit" value="Voltar"/></p>
		</form>

	</body>
</html>