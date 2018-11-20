<?php
    require '../../libs/PHPMailer/PHPMailerAutoload.php';
    $idPergunta = 0;
    $idResposta = 0;
    $c = 1;
    $corpo_pergP = "";
    $corpo_pergA = "";
    $corpo_respP = "";
    $corpo_respA = "";
    $corpo_corretaA = "";
    require_once('../../libs/db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    //Definindo Variáveis do email
    $id = $_POST['idUser'];
    $mailCon = ("SELECT nome,sobrenome,email from dados where id = $id");
    $mailProf = ("SELECT distinct d.nome,d.sobrenome,d.email from dados as d inner join atividades as a on a.email_prof = d.email where d.nivel = 'Professor'");
    $sql = "SELECT * FROM atividades";
    $mailP = new PHPMailer;
    $mailA = new PHPMailer;
    $mailP->CharSet = "UTF-8";
    $mailA->CharSet = "UTF-8";
    $mailP->Encoding = "base64";
    $mailA->Encoding = "base64";
    if ($result=mysqli_query($link,$mailCon)){
        while ($row=mysqli_fetch_row($result))
        {
            $nome = $row[0];
            $sobrenome = $row[1];
            $email = $row[2];
        }
        mysqli_free_result($result);
    }
    if ($resultP=mysqli_query($link,$mailProf)){
        while ($row=mysqli_fetch_row($resultP))
        {
            $nomeP = $row[0];
            $sobrenomeP = $row[1];
            $emailP = $row[2];
        }
        mysqli_free_result($resultP);
    }
    $resultado = mysqli_query($link,$sql);
    while($colunaAtividades = $resultado->fetch_assoc()){ $colunaAtiv[] = $colunaAtividades; }
    $assunto_prof = "Atividades do(a) Aluno(a) " . $nome . " " . $sobrenome;
    $assunto_aluno = "Respostas da Atividade - Professor " . $nomeP . " " . $sobrenomeP;
    $corpo_iniP = "Perguntas: <br><br>";
    $corpo_iniA = "Perguntas: <br><br>";
    foreach($colunaAtiv as $coluna){
        $idPergunta++;
        $corpo_pergP .= "Pergunta " . $idPergunta . ": " . $coluna['pergunta'] . "<br><br>";
        $corpo_pergA .= "Pergunta " . $idPergunta . ": " . $coluna['pergunta'] . "<br><br>";
        $corpo_corretaA .= "Alternativa Correta " . $idPergunta . ": " . $coluna['correta'] . "<br><br>";
    }
    $respostas = isset($_POST['resposta']) ? $_POST['resposta'] : '';
    if( is_array( $respostas ) ) {
    foreach ($respostas as $resposta) {
        $idResposta++;
        $data1 = mysqli_real_escape_string($link,$resposta);
        mysqli_query($link,"UPDATE atividades SET resposta='$data1' WHERE id_atividade='$idResposta'") or die(mysqli_error($link));
        if($c==1) {
        $c++; 
        $cabRespA = "Respostas: <br><br>";
        $cabRespP = "Respostas do Aluno: <br><br>";
        }
        $corpo_respP .= "Resposta " . $idResposta . ": " . $data1 . "<br>";
        $corpo_respA .= "Resposta " . $idResposta . ": " . $data1 . "<br><br>";
    }
  }
  $bodyProf = $corpo_iniP . $corpo_pergP . $cabRespP . $corpo_respP;
  $bodyAluno = $corpo_iniA . $corpo_pergA . $cabRespA . $corpo_respA . $corpo_corretaA;

  //Envio dos Emails - Aluno
    $mailA->isSMTP();
    $mailA->Host = 'smtp.gmail.com:587';
	$mailA->SMTPAuth = true;
	$mailA->SMTPSecure = 'tls';

	$mailA->Username = 'portaleaddemo@gmail.com';
	$mailA->Password = 'eaddemoportal';
	$mailA->Port = 587;

	$mailA->setFrom('professorportalead@gmail.com', $nomeP . " " . $sobrenomeP);
	$mailA->AddAddress($email);

	$mailA->isHtml(true);
	
	$mailA->Subject= $assunto_aluno;
    $mailA->Body = $bodyAluno;
    if(!$mailA->send())
	{
		echo 'Não foi possível enviar a mensagem.<br>';
		echo'Erro: ' . $mailA->ErrorInfo;
	}
	else
	{
		header("Refresh:0; url=../../index.php");
    }
    //Envio dos Emails - Professor
    $mailP->isSMTP();
    $mailP->Host = 'smtp.gmail.com:587';
	$mailP->SMTPAuth = true;
	$mailP->SMTPSecure = 'tls';

	$mailP->Username = 'portaleaddemo@gmail.com';
	$mailP->Password = 'eaddemoportal';
	$mailP->Port = 587;

	$mailP->setFrom('portaleaddemo@gmail.com', $nome . " " . $sobrenome);
	$mailP->AddAddress($emailP);

	$mailP->isHtml(true);
	
	$mailP->Subject= $assunto_prof;
    $mailP->Body = $bodyProf;
    if(!$mailP->send())
	{
		echo 'Não foi possível enviar a mensagem.<br>';
		echo'Erro: ' . $mailP->ErrorInfo;
	}
	else
	{
		header("Refresh:0; url=../../index.php");
	}
?>