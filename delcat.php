<?php
	require_once"conexao.php";
	require_once 'menu.php';
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<title>Update</title>
	</head>
	<body>
		<?php
	$query = "SELECT * FROM categoria";
	$exe = mysqli_query ($conexao, $query);
	echo "<table border = '1px'>
	<tr>
		<td>
			categoria
		</td>
		<td>
			Editar categoria
		</td>
	</tr>
	";
	while ($set=mysqli_fetch_array($exe)){
		echo"<tr>
				<form action='catdeletado.php' method='post'>
				<td> <input type='text' name='nome' value='$set[nome]'/> </td>
				<td> <input type='submit' value='OK'> </td>
				<input type='hidden' name='id' value='$set[id_categoria]'/>
				</form>	
			</tr>"; 
	}
?>
</table>
	</body>
</html>
