<?php
    require_once('../../libs/db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    $pergunta = isset($_POST['pergunta']) ? $_POST['pergunta'] : '';
    $tipoPergunta = isset($_POST['tipo']) ? $_POST['tipo'] : '';
    $valor = isset($_POST['valor']) ? $_POST['valor'] : '';
    $correta = isset($_POST['correta']) ? $_POST['correta'] : '';
    if($tipoPergunta == 'Aberta'){
    $abce = "INSERT into atividades(pergunta, tipoPergunta, valor) VALUES ('$pergunta','$tipoPergunta','$valor')";
    $resabce = mysqli_query($link, $abce);
    if(!$resabce)
		mysqli_error($abce);
    }
    if($tipoPergunta == 'CertoErrado'){
    $abce = "INSERT into atividades(pergunta, tipoPergunta, valor, correta) VALUES ('$pergunta','$tipoPergunta','$valor','$correta')";
    $resabce = mysqli_query($link, $abce);
    if(!$resabce)
		mysqli_error($abce);
    }
    else if($tipoPergunta == 'Multipla'){
      $multipla = $_POST['alt1'] . '|' . $_POST['alt2'] . '|' . $_POST['alt3'] . '|' . $_POST['alt4'] . '|' . $_POST['alt5'];
      $mult = "INSERT into atividades(pergunta, tipoPergunta, multipla, valor, correta) VALUES ('$pergunta','$tipoPergunta','$multipla','$valor','$correta')";
      $resmult = mysqli_query($link, $mult);
    }
    else if($tipoPergunta == 'Justifica'){
      $justifica = $_POST['perg1'] . '|' . $_POST['perg2'];
      $just = "INSERT into atividades(pergunta, tipoPergunta, valor, correta) VALUES ('$justifica','$tipoPergunta','$valor','$correta')";
      $resjust = mysqli_query($link, $just);
      if(!$resjust)
      mysqli_error($just);
    }
?>