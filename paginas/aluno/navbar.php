  <body>
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
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="index.html" class="brand-logo darken-1">
                    <img src="images/logo/materialize-logo.png" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Portal EAD</span>
                  </a>
                </h1>
              </li>
            </ul>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                  <i class="material-icons">notifications_none
                    <small class="notification-badge pink accent-2">3</small>
                  </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                  <span><?= $_SESSION['usuario'] ?></span>
                </a>
              </li>
              <li>
                <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                  <i class="material-icons">format_indent_increase</i>
                </a>
              </li>
            </ul>
            <!-- translation-button -->
            <ul id="translation-dropdown" class="dropdown-content">
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-gb"></i> English</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-fr"></i> French</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-cn"></i> Chinese</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-de"></i> German</a>
              </li>
            </ul>
            <!-- notifications-dropdown -->
            <ul id="notifications-dropdown" class="dropdown-content">
              <li>
                <h6>NOTIFICAÇÕES
                  <span class="new badge">3</span>
                </h6>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle cyan small">assignment_turned_in</span> Atividade Postada: Algoritmos II - Struct</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">agora</time>
              </li>
               <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle cyan small">assignment_turned_in</span> Atividade Postada: Algoritmos II - Arquivo</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 horas atrás</time>
              </li>
               <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle cyan small">assignment_turned_in</span> Atividade Postada: Algoritmos II - Código Morse</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 dias atrás</time>
              </li>
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