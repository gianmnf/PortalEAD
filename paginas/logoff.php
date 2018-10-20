<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['email']);
echo 'alert(\'Logoff efeutado com sucesso\')';
header("Refresh:0; url=login.php");
?>