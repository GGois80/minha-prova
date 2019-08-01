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
			$exe= mysqli_query($conexao, $query);
						
			echo "<table border='5px'>
			<tr>
				<td> Nome  </td>
				<td> Preço  </td>
				<td> Descrição   </td>
				<td> Categoria  </td>
				<td> Editar </td>
			
			</tr> ";
			
			while ($set=mysqli_fetch_array($exe)){
				echo"<tr>
					<form action='up_prato.php' method='post'>
					
						<td> <input type='text' name='nome' value='$set[nome_p]'/> </td>
						<td> <input type='text' name='valor' value='$set[preco]'/> </td>
						<td> <input type='text' name='descricao' value='$set[descricao]'/> </td>
			<td>			
			<select name='prato'/>";
					$queryCate="SELECT * FROM categoria WHERE id_categoria = ".$set['idCate']."";
					$exeCate=mysqli_query ($conexao,$queryCate);
					$arcate = mysqli_fetch_array($exeCate);
					echo"<option value='$arcate[id_categoria]'> $arcate[nome] </option>";
										
					$queryCate="SELECT * FROM categoria WHERE id_categoria != ".$set['idCate']."";
					$exeCate=mysqli_query ($conexao,$queryCate);
					while ($arcate = mysqli_fetch_array($exeCate)) {
						echo"<option value='$arcate[id_categoria]'> $arcate[nome] </option>";
					}
			echo "</select>
					</td>	
						<td> <input type='submit' value='OK'> </td>
						<input type='hidden' name='id' value='$set[id_prato]'/>
					
					</form>	
					</tr>";
			}
		?>
		</table>
	</body>
</html>