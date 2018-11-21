<?php
$id = 4;
$con=mysqli_connect("localhost","root","","bancoead");
$ago = mysqli_query($con,"SELECT count(month(dataAcesso)) FROM acessos where id_aluno=$id and month(dataAcesso) = 08 and Year(dataAcesso) = 2018");
$set = mysqli_query($con,"SELECT count(month(dataAcesso)) FROM acessos where id_aluno=$id and month(dataAcesso) = 09 and Year(dataAcesso) = 2018");
$out = mysqli_query($con,"SELECT count(month(dataAcesso)) FROM acessos where id_aluno=$id and month(dataAcesso) = 10 and Year(dataAcesso) = 2018");
$nov = mysqli_query($con,"SELECT count(month(dataAcesso)) FROM acessos where id_aluno=$id and month(dataAcesso) = 11 and Year(dataAcesso) = 2018");
$dez = mysqli_query($con,"SELECT count(month(dataAcesso)) FROM acessos where id_aluno=$id and month(dataAcesso) = 12 and Year(dataAcesso) = 2018");
$rowAgo= mysqli_fetch_array($ago);
$rowSet= mysqli_fetch_array($set);
$rowOut= mysqli_fetch_array($out);
$rowNov= mysqli_fetch_array($nov);
$rowDez= mysqli_fetch_array($dez);
?>

<span><?php echo $rowNov[0] ?></span>