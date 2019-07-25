<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>CRUD - Cadastrar</title>
	<link rel="stylesheet" type="text/css" href="css/arquivo.css">
</head>
<body>

	<?php

	?>
	<center>
		
			<h1>Cadastrar Usuário</h1>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>

			<form method="POST" action="processa.php">

				Nome: <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
				Email: <input type="email" name="email" placeholder="Digite um E-mail"><br><br>
				Senha: <input type="password" name="senha" placeholder="Digite uma Senha"><br><br>

				<input type="submit" name="cadastrar" value="Cadastrar" >
		
	</form>
	</center>
</body>
</html>