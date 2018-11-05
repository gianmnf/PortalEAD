<?php
  $con=mysqli_connect("localhost","root","","bancoead");
  $sql = "SELECT * FROM atividades";
  $resultado = mysqli_query($con,$sql);
  $notif = 0;
  while($colAt = $resultado->fetch_assoc()){ $colNotificacoes[] = $colAt; $notif++; }
  ?>
  <body id="bodyX" style="background:url('../../images/gallary/bkg.jpeg') no-repeat center center fixed !important; -webkit-background-size: cover !important;
  -moz-background-size: cover !important;
  -o-background-size: cover !important;
  background-size: cover !important;">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-cyan lighten-1">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="#" class="brand-logo darken-1">
                    <img src="../../images/logo/logo.png" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Portal EAD - Fórum</span>
                  </a>
                </h1>
              </li>
            </ul>
            <ul class="right hide-on-med-and-down">
              <li>
              <a href="#modalLogoff" class="waves-effect waves-cyan btn-small modal-trigger">
                  <span>
                  <i class="material-icons">exit_to_app</i>
                  </span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="../../images/avatar/avatar-12.png" alt="avatar">
                    <i></i>
                  </span>
                  <span><?= $_SESSION['usuario'] ?></span>
                </a>
              </li>
              <li>
                <a href="#" data-activates="chat-out" tooltip="Chat" class="waves-effect waves-block waves-light chat-collapse">
                  <i class="material-icons">chat</i>
                </a>
              </li>
            </ul>
            <!-- notifications-dropdown -->
            <ul id="notifications-dropdown" class="dropdown-content">
              <li>
                <h6>NOTIFICAÇÕES
                  <span class="new badge">0</span>
                </h6>
              </li>
              <li class="divider"></li>
            </ul>
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Perfil</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Opções</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- end header nav-->
    </header>
    <!-- END HEADER -->