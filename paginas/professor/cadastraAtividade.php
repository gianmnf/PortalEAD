<?php
    require_once('../../libs/db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    $Atividade = $_POST['Atividade'];
    $valor = $_POST['valor'];
    $sql = "INSERT into atividades(Atividade, valor) VALUES ('$Atividade','$valor')";
    if(mysqli_query($link, $sql)){
		header("Refresh:2; url=../../index.php");
	}
?>