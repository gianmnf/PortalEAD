<?php
  
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location: paginas/login.php');
  }
  require_once('libs/db.class.php');
  $objDb = new db();
  $link = $objDb->conecta_mysql();
  $id_usuario = $_SESSION['id_usuario'];


  if($_SESSION['nivel'] == 'Aluno'){
    include 'paginas/aluno/header.php';
    include 'paginas/aluno/navbar.php';
    include 'paginas/aluno/leftbar.php';
    include 'paginas/aluno/home.php';
    include 'paginas/aluno/rightbar.php';
    include 'paginas/aluno/footer.php';
  }

  else if($_SESSION['nivel'] == 'Professor'){
    include 'paginas/professor/header.php';
    include 'paginas/professor/navbar.php';
    include 'paginas/professor/leftbar.php';
    include 'paginas/professor/home.php';
    include 'paginas/professor/rightbar.php';
    include 'paginas/professor/footer.php';
  }
?>