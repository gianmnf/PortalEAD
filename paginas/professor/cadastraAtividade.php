<?php
    require_once('../../libs/db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    foreach ($_POST['pergunta'] as $i => $pergunta)
    {
      $tipoPergunta = $_POST['tipo'][$i];
      $valor        = $_POST['valor'][$i];
      $correta      = $_POST['correta'][$i];
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
      $alt1         = $_POST['alt1'][$i];
      $alt2         = $_POST['alt2'][$i];
      $alt3         = $_POST['alt3'][$i];
      $alt4         = $_POST['alt4'][$i];
      $alt5         = $_POST['alt5'][$i];
      $multipla = $alt1 . '|' . $alt2 . '|' . $alt3 . '|' . $alt4 . '|' . $alt5;
      $mult = "INSERT into atividades(pergunta, tipoPergunta, multipla, valor, correta) VALUES ('$pergunta','$tipoPergunta','$multipla','$valor','$correta')";
      $resmult = mysqli_query($link, $mult);
    }
    else if($tipoPergunta == 'Justifica'){
      $perg1        = $_POST['perg1'][$i];
      $perg2        = $_POST['perg2'][$i];
      $justifica = $perg1 . '|' . $perg2;
      $just = "INSERT into atividades(pergunta, tipoPergunta, valor, correta) VALUES ('$justifica','$tipoPergunta','$valor','$correta')";
      $resjust = mysqli_query($link, $just);
      if(!$resjust)
      mysqli_error($just);
    }
  }
?>