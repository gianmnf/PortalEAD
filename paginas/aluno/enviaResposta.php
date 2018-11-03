<?php
    $idResposta = 0;
    require_once('../../libs/db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    $respostas = isset($_POST['resposta']) ? $_POST['resposta'] : '';
    if( is_array( $respostas ) ) {
    foreach ($respostas as $resposta) {
        $idResposta++;
        $data1 = mysqli_real_escape_string($link,$resposta);
        mysqli_query($link,"UPDATE atividades SET resposta='$data1' WHERE id_atividade='$idResposta'") or die(mysqli_error($link));
    }
  }
?>