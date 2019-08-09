<?php
	require_once"conexao.php";
?>
<html>
	<head>
		<title>Update</title>
	</head>
	<body>
		<?php
		
		$id = $_POST["id"];
		
	$query = "DELETE FROM categoria WHERE id_categoria = $id ";
	$exe = mysqli_query ($conexao, $query);
		if($exe == 1){
		echo "<script>alert('Dado Deletado') </script>";
	}else{
		echo "<script>alert ('Deu ruim') <script>";
	}
?>			