<?php
	require_once 'conexao.php';

	$nome = $_POST['nome'];
	$preco = $_POST['valor'];
	$descricao = $_POST['descricao'];
	$prato = $_POST['prato'];
	$id = $_POST['id'];
	
	
	$query = "UPDATE prato SET nome_p = '$nome', preco = '$preco', descricao = '$descricao', idCate = '$prato' WHERE id_prato = $id";
	$exe = mysqli_query($conexao, $query);
	if($exe == 1){
		echo "<script>alert('Dado Atualizado') </script>";
	}else{
		echo "<script>alert ('Deu ruim') <script>";
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
		<form action="edi_prato.php" method="post"/>
			<p><input type="submit" value="Voltar" size="1000px"  /></p>
		</form>

	</body>
</html>