<?php
    require_once('../../libs/db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    $email = $_POST['email_prof'];
    foreach ($_POST['pergunta'] as $i => $pergunta)
    {
      $tipoPergunta = $_POST['tipo'][$i];
      $valor        = $_POST['valor'][$i];
    if($tipoPergunta == 'Aberta'){
    $abce = "INSERT into atividades(pergunta, tipoPergunta, valor, email_prof) VALUES ('$pergunta','$tipoPergunta','$valor','$email')";
    $resabce = mysqli_query($link, $abce);
    if(!$resabce)
		mysqli_error($abce);
    }
    if($tipoPergunta == 'CertoErrado'){
      $correta      = $_POST['correta'][$i];
    $abce = "INSERT into atividades(pergunta, tipoPergunta, valor, correta, email_prof) VALUES ('$pergunta','$tipoPergunta','$valor','$correta','$email')";
    $resabce = mysqli_query($link, $abce);
    if(!$resabce)
		mysqli_error($abce);
    }
    else if($tipoPergunta == 'Multipla'){
      $correta      = $_POST['correta'][$i];
      $alt1         = $_POST['alt1'][$i];
      $alt2         = $_POST['alt2'][$i];
      $alt3         = $_POST['alt3'][$i];
      $alt4         = $_POST['alt4'][$i];
      $alt5         = $_POST['alt5'][$i];
      $multipla = $alt1 . '|' . $alt2 . '|' . $alt3 . '|' . $alt4 . '|' . $alt5;
      $mult = "INSERT into atividades(pergunta, tipoPergunta, multipla, valor, correta,email_prof) VALUES ('$pergunta','$tipoPergunta','$multipla','$valor','$correta','$email')";
      $resmult = mysqli_query($link, $mult);
    }
  }
  header("Refresh:0; url=../../index.php");
?>