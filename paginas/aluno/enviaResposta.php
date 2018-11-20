<?php
    require '../../libs/PHPMailer/PHPMailerAutoload.php';
    $idResposta = 0;
    require_once('../../libs/db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    $id = $_POST['idUser'];
    $mailCon = ("SELECT nome,sobrenome,email from dados where id = $id");
    $resultado = mysqli_query($con,$sql);
    while($colunaAtividades = $resultado->fetch_assoc()){ $colunaAtiv[] = $colunaAtividades; }
    //Definindo Variáveis do email
    $assunto_prof = "Atividades do(a) Aluno(a)" . $nome . $sobrenome;
    $corpo_ini = "Seguem as respostas do aluno:";
    foreach($colunaAtiv as $coluna){
        $idPergunta++;
        $corpo_pergP .= "Pergunta" . $idPergunta . ": " . $coluna['pergunta'];
    }
    if ($result=mysqli_query($con,$mailCon)){
        while ($row=mysqli_fetch_row($result))
        {
            $nome = $row[0];
            $sobrenome = $row[1];
            $email = $row[2];
        }
        mysqli_free_result($result);
        }

    $respostas = isset($_POST['resposta']) ? $_POST['resposta'] : '';
    if( is_array( $respostas ) ) {
    foreach ($respostas as $resposta) {
        $idResposta++;
        $data1 = mysqli_real_escape_string($link,$resposta);
        mysqli_query($link,"UPDATE atividades SET resposta='$data1' WHERE id_atividade='$idResposta'") or die(mysqli_error($link));
        $corpo_respP = "Resposta" . $idResposta . ": " . $data1;
    }
  }
  $bodyProf = $corpo_ini . $corpo_pergP . $corpo_respP;
?>