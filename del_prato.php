<?php
	require_once 'conexao.php';
	require_once 'menu.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>
		atualização
		</title>
	</head>
	<body>
	
		<?php
			$query = "SELECT * FROM prato";
			$exe= mysqli_query ($conexao, $query);
			echo "<table border='5px'>
			<tr>
				<td> Nome Prato </td>
				<td> Excluir </td>
			</tr> ";
			
			while ($set=mysqli_fetch_array($exe)){
				echo"<tr>
					<form action='delete_prato.php' method='post'>
					
						<td> $set[nome_p] </td>
						<td> <input type='submit' value='OK'> </td>
						<input type='hidden' name='id' value='$set[id_prato]'/>
					</form>	
					</tr>";
			}
		?>
		</table>
	</body>
</html>