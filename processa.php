<?php
	session_start();
	include_once("conexao.php");


	$nome = filter_input(INPUT_POST, 'nome');
	$email = filter_input(INPUT_POST, 'email');
	$senha = filter_input(INPUT_POST, 'senha');

	//echo "Nome: $nome <br>";
	//echo "Email: $email <br>";
	//echo "senha: $senha	<br>";

	$ins_usuarios = "INSERT INTO usuarios (nome, email, senha, created) VALUES  ('$nome', '$email', '$senha', NOW())";
	$resultado_usuario = mysqli_query($conn, $ins_usuarios);

	if (mysqli_insert_id($conn)){
		$_SESSION['msg'] = "Usuário cadastrado com sucesso";
		header("location: index.php");
	}else {
		$_SESSION['msg'] = "Usuário não foi cadastrado com sucesso";
		header("location: index.php");
	}

?>