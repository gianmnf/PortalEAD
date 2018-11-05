<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['email']);
header("Refresh:0; url=login.php");
?>