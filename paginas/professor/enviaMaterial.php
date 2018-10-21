<?php
    require '../../libs/db.class.php';
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    $cursoDir = $_POST['curso'];
    $cursoTemp = explode(' ',trim($cursoDir));
    $curso = $cursoTemp[0];
    $arquivo = $_FILES['arquivo']['name'];
    $diretorio = "../../materiais/".$curso."/";
    $nome_temp = $_FILES['arquivo']['tmp_name']; 
    if(isset($arquivo)){
        $dataUpload = date("y-m-d");   
        move_uploaded_file($nome_temp, $diretorio.$arquivo);
    }
    $insere = "INSERT INTO materiais(arquivo, curso, dataUpload) VALUES ('$arquivo','$curso','$dataUpload')";
    $res = mysqli_query($link, $insere);
    if($res){
    header("Refresh:0; url=../../index");
    }else{
        mysqli_error($res);
    }
?>