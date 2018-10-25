<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['email']);
header("Refresh:3; url=login.php");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Portal EAD UNIPAM.">
    <meta name="keywords" content="unipam, portal, ead">
    <title>Saindo...</title>
    <!-- Favicons-->
    <link rel="icon" href="../images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="../images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="../images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="../css//materialize.css" type="text/css" rel="stylesheet">
    <link href="../css//style.css" type="text/css" rel="stylesheet">
    <!-- CSS Personalizado-->
    <link href="../css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css" type="text/css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
  </head>
<body style="background: url('../images/coding.jpg') no-repeat center center fixed !important; overflow: scroll !important; -webkit-background-size: cover !important;
  -moz-background-size: cover !important;
  -o-background-size: cover !important;
  background-size: cover !important;">
<div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4" style="border: 2px solid rgba(255,255,255,.5)!important;
    border-radius: 5px !important; ">
      <div class="card-content">
        <img src="../images/logo/logo.png" width="96px" height="96px" style="display:block; margin:auto;">
        <br>
        <span class="card-title" style="display:block; text-align:center;">Volte Sempre!</span>
        <div class="row">
      </div>
  </div>
</div>
  </div>
</div>
</body>
</html>