<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body>
	
		<header class="menu">
				<h3 class="nome">Restaurante XPTO</h3>
				<hr/>
			<ul>
			<li>
				<button class="btn btn-info" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Categoria
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="index.php">Cadastrar</a>
					<a class="dropdown-item" href="update.php">Atualizar</a>
					<a class="dropdown-item" href="delcat.php">Deletar</a>
				</div>
			</li>
			<li>
				<button class="btn btn-info" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Pratos
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="cad_prato.php">Cadastrar</a>
					<a class="dropdown-item" href="edi_prato.php">Atualizar</a>
					<a class="dropdown-item" href="del_prato.php">Deletar</a>
				</div>
			</li>
			<li>
					<button class="btn btn-info" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Cardapio
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Entrada</a>
						<a class="dropdown-item" href="#">Prato Principal</a>
						<a class="dropdown-item" href="#">Sobremesa</a>
					</div>
			<li>		
			</ul>		
		</header>
	

	</body>
</html>