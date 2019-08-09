<?php
	require_once"conexao.php";
?>
<html>
	<head>
		<title>Update</title>
	</head>
	<body>
		<?php
		$nome = $_POST["nome"];
		$id = $_POST["id"];
		
	$query = "UPDATE categoria SET nome = '$nome' WHERE id_categoria = $id";
	$exe = mysqli_query ($conexao, $query);
	if($exe == 1){
		echo "<script>alert('Dado Atualizado') </script>";
	}else{
		echo "<script>alert ('Deu ruim') <script>";
	}
	
?>
