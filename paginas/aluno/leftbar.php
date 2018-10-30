<div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
              <div class="row">
              <h5>Curso:</h5>
                <select class="browser-default">
                <option><?= $_SESSION['curso'] ?></option>
                </select>
              </div>
            </li>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a onclick="mostraDiv('home')" class="waves-effect waves-cyan">
                      <i class="material-icons">home</i>
                      <span class="nav-text">Home</span>
                    </a>
                </li>
                <li class="bold">
                  <a class="waves-effect waves-cyan" onclick="mostraDiv('ativ')">
                      <i class="material-icons">edit</i>
                      <span class="nav-text">Atividades</span>
                    </a>
                </li>
                <li class="bold">
                  <a onclick="mostraDiv('notas')" class="waves-effect waves-cyan">
                      <i class="material-icons">grade</i>
                      <span class="nav-text">Notas</span>
                    </a>
                </li>
                <li class="bold">
                  <a onclick="mostraDiv('materiais')" class="waves-effect waves-cyan">
                      <i class="material-icons">archive</i>
                      <span class="nav-text">Materiais</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://35.188.20.147/" target="_blank" class="waves-effect waves-cyan">
                      <i class="material-icons">group</i>
                      <span class="nav-text">Fórum</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="#modalLogoff" class="waves-effect waves-cyan btn-small modal-trigger">
                      <i class="material-icons">exit_to_app</i>
                      <span class="nav-text">Sair</span>
                    </a>
                </li>
              </ul>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>