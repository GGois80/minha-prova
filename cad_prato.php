<?php
	require_once 'conexao.php';
	require_once 'menu.php';
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<meta charset="utf-8"/>
		<title>
			prato
		</title>
	</head>
	<body>
		
		<h1> Cadastro de Prato </h1>
	
	<fieldset>
		<form action="into_prato.php" method="post">
			<p>Digite Nome:  <input type="text" name="nome"> </p>
			<p>Digite Valor: <input type="text" name="valor"> </p>
			<p>Faça a Descrição: <input type="text" name="descricao"> </p> 
		<p> Escolha a opção 
			<select name="categoria"/>
			
				<?php
					$query="SELECT * FROM categoria";
					$exe=mysqli_query ($conexao,$query);
					while ($arcate = mysqli_fetch_array($exe)) {
						echo"<option value='$arcate[id_categoria]'> $arcate[nome] </option>";
					}
				?>
				
			</select>
		</p>
			<p><input type="submit" value="Cadastrar"/></p>
		</form>
	</fieldset>	
		
	</body>
</div>
</div>


	
</html>