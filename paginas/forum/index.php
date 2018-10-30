<?php
header('X-Frame-Options: GOFORIT');
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: ../login.php');
}
require_once('../../libs/db.class.php');
$objDb = new db();
$link = $objDb->conecta_mysql();
$id_usuario = $_SESSION['id_usuario'];

if($_SESSION['nivel'] == 'Aluno' || $_SESSION['nivel'] == 'Professor'){
include '../forum/header.php';
include '../forum/navbar.php';
include '../forum/home.php';
include '../forum/footer.php';
}
?>