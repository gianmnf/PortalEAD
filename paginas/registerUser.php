<?php
	require_once('../libs/db.class.php');
	$usuario = $_POST['usuario'];
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $confSenha = md5($_POST['confSenha']);
	$nivel = $_POST['nivel'];
	$curso = $_POST['curso'];
    
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    $usuario_existe = false;
    $email_existe = false;
    
    	//verificar se o usuário já existe
	$sql = " select * from dados where usuario = '$usuario' ";
	if($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['usuario'])){
			$usuario_existe = true;
		}
	} else {
		echo 'Erro ao tentar localizar o registro de usuário';
	}
	//verificar se o e-mail já existe
	$sql = " select * from dados where email = '$email' ";
	if($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['email'])){
			$email_existe = true;
		} 
	} else {
		echo 'Erro ao tentar localizar o registro de email';
	}
	if($usuario_existe || $email_existe){
		$retorno_get = '';
		if($usuario_existe){
			$retorno_get.= "erro_usuario=1&";
		}
		if($email_existe){
			$retorno_get.= "erro_email=1&";
		}
		header('Location: login.php?'.$retorno_get);
		die();
    }
    
    $sql = "INSERT into dados(usuario, nome, sobrenome, email, senha, confSenha, nivel, curso) VALUES ('$usuario', '$nome', '$sobrenome', '$email', '$senha', '$confSenha', '$nivel', '$curso')";
	//executar a query
	if(mysqli_query($link, $sql)){
		header("Refresh:2; url=login.php");
	} else {
		echo 'Erro ao registrar o usuário!';
	}
?>