<?php
  
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location: home.php?erro=1');
  }
  require_once('../libs/db.class.php');
  $objDb = new db();
  $link = $objDb->conecta_mysql();
  $id_usuario = $_SESSION['id_usuario'];

?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal EAD</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="../img/material/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="../img/material/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="../img/material/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="../img/material/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="../css/mdlSelect/getmdl-select.min.css">
    <link rel="stylesheet" href="../css/mdl-jquery-modal-dialog.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/material/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <style>
    *{
      margin: 0px; padding: 0px;
    }
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    main{
    background:url('../img/demosi.jpg') !important;
    background-size: cover !important;
    background-repeat: no-repeat;
  }
    </style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Portal EAD</span>
          <div class="mdl-layout-spacer"></div>
           <div class="mdl-textfield mdl-js-textfield getmdl-select">
        <input type="text" value="" class="mdl-textfield__input" id="sample1" readonly>
        <input type="hidden" value="" name="sample1">
        <label for="sample1" class="mdl-textfield__label" style="color:black;">CURSO</label>
        <ul for="sample1" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
            <li class="mdl-menu__item" data-val="sistemas">Sistemas de Informação</li>
            <li class="mdl-menu__item" data-val="treinamento">Treinamento da Biblioteca</li>
        </ul>
    </div>
    </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="https://lostnexusgames.github.io/img/jc.jpg" class="demo-avatar" style="width:48px; height:48px;">
          <br>
          <div class="demo-avatar-dropdown">
            <span><?= $_SESSION['usuario'] ?></span>
            <div class="mdl-layout-spacer"></div>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="#home"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="color:white !important;">home</i>Home</a>
          <a class="mdl-navigation__link" href="#ativ"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="color:white !important;">edit</i>Atividades</a>
          <a class="mdl-navigation__link" href="#notas"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="color:white !important;">grade</i>Notas</a>
          <a class="mdl-navigation__link" href="#materiais"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="color:white !important;">archive</i>Materiais</a>
          <a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="color:white !important;">group</i>Fórum</a>
          <a class="mdl-navigation__link" href="#chat"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="color:white !important;">chat_bubble</i>Chat</a>
           <a class="mdl-navigation__link" href="logoff.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="color:white !important;">exit_to_app</i>Sair</a>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid">
          <div class="mdl-grid">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--12-col" style="height:40em;" id="home">
              <div class="mdl-card__title mdl-card--expand">
              <h2 class="mdl-card__title-text" style="color:white;">Gerenciamento de Memória</h2>
            </div></div>
            <div class="mdl-layout-spacer"></div>
          </div>
        </div>
        <div class="mdl-grid" id="ativ">
          <div class="mdl-grid" style="background-color: white;">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--12-col">
              <div class="mdl-card__title mdl-card--expand">
              <h2 class="mdl-card__title-text">Atividades</h2>
            </div>
            <div class="mdl-card__supporting-text">
            1 - Para que serve o Garbage Collector?
            </div>
            <form action="#">
              <div class="mdl-textfield mdl-js-textfield">
                <textarea class="mdl-textfield__input" id="resp" rows="4"></textarea>
                <label class="mdl-textfield__label" for="resp">Responda Aqui</label>
              </div>
            </form>
            <div class="mdl-card__supporting-text">
            2 - Quais são os Algoritmos de Substituição de Página?
            </div>
            <form action="#">
              <div class="mdl-textfield mdl-js-textfield">
                <textarea class="mdl-textfield__input" id="resp" rows="4"></textarea>
                <label class="mdl-textfield__label" for="resp">Responda Aqui</label>
              </div>
            </form>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="background-color:#4C8FC8 !important;">
                Enviar
              </a>
            </div></div>
            <div class="mdl-layout-spacer"></div>
          </div>
        </div>
        <div class="mdl-grid">
          <div class="mdl-grid">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--12-col" id="notas">
              <h4 style="color:white; text-align:center;">Notas</h4>
              <table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
                <thead>
                  <tr>
                    <th class="mdl-data-table__cell--non-numeric">Atividade</th>
                    <th>Valor</th>
                    <th>Valor Obtido</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="mdl-data-table__cell--non-numeric">Gerenciamento de Memória</td>
                    <td>5</td>
                    <td>3.75</td>
                  </tr>
                </tbody>
              </table>
              <div class="mdl-layout-spacer"></div>
              <hr>
              <div id="container" style="min-width: 320px; height: 400px; max-width: 600px; margin: 0 auto"></div>
            </div>
            <div class="mdl-layout-spacer"></div>
          </div>
        </div>
        <div class="mdl-grid" id="materiais">
          <div class="mdl-grid" style="background-color: white;">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--12-col">
              <div class="mdl-card__title mdl-card--expand">
              <h2 class="mdl-card__title-text">Materiais</h2>
            </div>
            <div class="mdl-card__supporting-text">
            <input type="text" class="mdl-textfield__input" id="busca" placeholder="Pesquise por um material">
            <br>
            <button id="Opcoes" type="button" onclick="pesquisa()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><i class="material-icons">add</i> Pesquisa Avançada</button>
            </div>
            <div id="materiaisOpcoes" style="display:none;">
              <h5>Argumentos da Pesquisa</h5>
                <label>Palavras Chaves:</label>
                <input type="text" name="chave">
                <br>
                <label>Nome Responsável:</label>
                <input type="text" name="resp">
                <br>
                <label>Pasta:</label>
                <input type="text" name="pasta">
                <br>
                <label>Data Postagem Início:</label>
                <input type="date" name="dataEnvio">
                <br>
                <label>Data Postagem Fim:</label>
                <input type="date" name="dataFim">
                <br>
                <input type="checkbox" id="checkSemestre"><label> Listar os materiais que foram postados em aulas nesse semestre.</label>
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <button id="Opcoes" type="button" onclick="resPesquisa()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><i class="material-icons">search</i> Pesquisar</button>
            </div>
            <h4 id="pesqTitle" style="display:none;">Resultados da Pesquisa</h4>
            <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css">
                <div id="resultadosPesquisa">
                  <table id="tableRes" style="display:none;">
                    <tr>
                    <th>Arquivo</th>
                    <th>Opções</th>
                    </tr>
                    <tr>
                      <td>gerenciamentoMemoria.pdf</td>
                      <td><button type="button" class="btn btn-success btn-md" id="btnPDF"  data-toggle="modal" data-target="#myModal">Visualizar/Baixar</button></td>
                    </tr>
                  </table>
                </div>
               <div class="modal fade" id="myModal" role="dialog" data-backdrop="false">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Visualizando PDF</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <object data="../arquivos/gerenciamentoMemoria.pdf" style="height: 400px;"></object>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
            <div class="mdl-layout-spacer"></div>
          </div>
          </div>
        </div>
        <div class="mdl-grid">
          <div class="mdl-grid">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--12-col" id="chat">
              <h4 style="color:white;">Chat</h4>
              <br>
              <div id="chatbox">
                <style type="text/css">#chatbox,#friendslist{position:absolute;height:484px;width:290px}#profile p,#profile p.animate{-webkit-transition:all .2s cubic-bezier(0,.995,.99,1);-moz-transition:all .2s cubic-bezier(0,.995,.99,1);-ms-transition:all .2s cubic-bezier(0,.995,.99,1);-o-transition:all .2s cubic-bezier(0,.995,.99,1)}#searchfield:focus,#sendmessage button:focus,#sendmessage input:focus{outline:0}#close:hover,#profile p.animate,#view-code:hover{opacity:1}#view-code{color:#89a2b5;opacity:.7;font-size:14px;text-transform:uppercase;font-weight:700;text-decoration:none;position:absolute;top:660px;left:50%;margin-left:-50px;z-index:200}#chatbox{background:#fff;border-radius:6px;overflow:hidden;left:50%;margin-left:-155px}#friendslist{top:0;left:0}#topmenu{height:69px;width:290px;border-bottom:1px solid #d8dfe3}#topmenu span{float:left;width:96px;height:70px;background:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/top-menu.png) -3px -118px no-repeat}.floatingImg,.friend img{width:40px;border-radius:50%}#topmenu span.friends{margin-bottom:-1px}#topmenu span.chats{background-position:-95px 25px;cursor:pointer}#topmenu span.chats:hover{background-position:-95px -46px;cursor:pointer}#topmenu span.history{background-position:-190px 24px;cursor:pointer}#topmenu span.history:hover{background-position:-190px -47px;cursor:pointer}.friend{height:70px;border-bottom:1px solid #e7ebee;position:relative}.friend:hover{background:#f1f4f6;cursor:pointer}.friend img{margin:15px;float:left}.floatingImg{position:absolute;top:0;left:12px;border:3px solid #fff}.friend p{padding:15px 0 0;float:left;width:220px}.friend p strong{font-weight:600;font-size:15px;color:#597a96}.friend p span{font-size:13px;font-weight:400;color:#aab8c2}.friend .status{background:#26c281;border-radius:50%;width:9px;height:9px;position:absolute;top:31px;right:17px}#chatview,#search{width:290px;position:absolute;left:0}.friend .status.away{background:#ffce54}.friend .status.inactive{background:#eaeef0}#search{background:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/search.png) -11px 0 no-repeat #e3e9ed;height:60px;bottom:0}#searchfield{background:#e3e9ed;margin:21px 0 0 55px;border:none;padding:0;font-size:14px;font-family:"Open Sans",sans-serif;font-weight:400px;color:#8198ac}#chatview{height:484px;top:0;display:none;background:#fff}#profile{height:153px;overflow:hidden;text-align:center;color:#fff}.p1 #profile{background:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/timeline1.png) no-repeat #fff}#profile .avatar{width:68px;border:3px solid #fff;margin:23px 0 0;border-radius:50%}#profile p{font-weight:600;font-size:15px;margin:118px 0 -1px;opacity:0;transition:all .2s cubic-bezier(0,.995,.99,1)}#profile p.animate{margin-top:97px;transition:all .2s cubic-bezier(0,.995,.99,1)}#profile span{font-weight:400;font-size:11px}#chat-messages{opacity:0;margin-top:30px;width:290px;height:270px;overflow-y:scroll;overflow-x:hidden;padding-right:20px;-webkit-transition:all .2s cubic-bezier(0,.995,.99,1);-moz-transition:all .2s cubic-bezier(0,.995,.99,1);-ms-transition:all .2s cubic-bezier(0,.995,.99,1);-o-transition:all .2s cubic-bezier(0,.995,.99,1);transition:all .2s cubic-bezier(0,.995,.99,1)}#chat-messages.animate{opacity:1;margin-top:0}#chat-messages label{color:#aab8c2;font-weight:600;font-size:12px;text-align:center;margin:15px 0;width:290px;display:block}#chat-messages div.message{padding:0 0 30px 58px;clear:both;margin-bottom:45px}#chat-messages div.message.right{padding:0 58px 30px 0;margin-right:-19px;margin-left:19px}#chat-messages .message img{float:left;margin-left:-38px;border-radius:50%;width:30px;margin-top:12px}#chat-messages div.message.right img{float:right;margin-left:0;margin-right:-38px}.message .bubble{background:#f0f4f7;font-size:13px;font-weight:600;padding:12px 13px;border-radius:5px 5px 5px 0;color:#8495a3;position:relative;float:left}#chat-messages div.message.right .bubble{float:right;border-radius:5px 5px 0}.bubble .corner{background:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/bubble-corner.png) no-repeat;position:absolute;width:7px;height:7px;left:-5px;bottom:0}div.message.right .corner{background:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/bubble-cornerR.png) no-repeat;left:auto;right:-5px}#sendmessage,.bubble span{right:0;position:absolute}.bubble span{color:#aab8c2;font-size:11px;bottom:-22px}#sendmessage{height:60px;border-top:1px solid #e7ebee;bottom:0;width:290px;background:#fff;padding-bottm:50px}#sendmessage input{background:#fff;margin:21px 0 0 21px;border:none;padding:0;font-size:14px;font-family:"Open Sans",sans-serif;font-weight:400px;color:#aab8c2}#sendmessage button{background:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/send.png) 0 -41px no-repeat #fff;width:30px;height:30px;position:absolute;right:15px;top:23px;border:none}#sendmessage button:hover{cursor:pointer;background-position:0 0}#close{position:absolute;top:8px;opacity:.8;right:10px;width:20px;height:20px;cursor:pointer}.cx,.cy{background:#fff;position:absolute;width:0;top:15px;right:15px;height:3px;-webkit-transition:all 250ms ease-in-out;-moz-transition:all 250ms ease-in-out;-ms-transition:all 250ms ease-in-out;-o-transition:all 250ms ease-in-out;transition:all 250ms ease-in-out}.cx.s1,.cy.s1,.cy.s2{-webkit-transition:all .1s ease-out}.cx.s1,.cy.s1{right:0;width:20px;-moz-transition:all .1s ease-out;-ms-transition:all .1s ease-out;-o-transition:all .1s ease-out;transition:all .1s ease-out}.cy.s2,.cy.s3{-moz-transition:all .1s ease-out;-ms-transition:all .1s ease-out;-o-transition:all .1s ease-out}.cy.s2{-ms-transform:rotate(50deg);-webkit-transform:rotate(50deg);transform:rotate(50deg);transition:all .1s ease-out}.cx.s1,.cy.s3{-webkit-transition:all .1s ease-out}.cy.s3{-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);transform:rotate(45deg);transition:all .1s ease-out}.cx.s1,.cx.s2{-moz-transition:all .1s ease-out;-o-transition:all .1s ease-out}.cx.s1{right:0;width:20px;-ms-transition:all .1s ease-out;transition:all .1s ease-out}.cx.s2{-ms-transform:rotate(140deg);-webkit-transform:rotate(140deg);transform:rotate(140deg);-webkit-transition:all .1s ease-out;-ms-transition:all 100ease-out;transition:all .1s ease-out}.cx.s3{-ms-transform:rotate(135deg);-webkit-transform:rotate(135deg);transform:rotate(135deg);-webkit-transition:all 100ease-out;-moz-transition:all .1s ease-out;-ms-transition:all .1s ease-out;-o-transition:all .1s ease-out;transition:all .1s ease-out}#chatview,#sendmessage{overflow:hidden;border-radius:6px}</style>
  <div id="friendslist">
      <div id="topmenu">
          <span class="friends"></span>
            <span class="chats"></span>
            <span class="history"></span>
        </div>
        
        <div id="friends">
          <div class="friend">
              <img src="https://lostnexusgames.github.io/img/jc.jpg" style="width:40px; height:40px;" />
                <p>
                  <strong>José Carlos</strong>
                  <span>jcarlos_2013@hotmail.com</span>
                </p>
                <div class="status available"></div>
            </div>
            
            <div class="friend">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2_copy.jpg" />
                <p>
                  <strong>Guilherme Chilon</strong>
                  <span>gchilon@gmail.com</span>
                </p>
                <div class="status away"></div>
            </div>
            
            <div class="friend">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3_copy.jpg" />
                <p>
                  <strong>Sandro Matias</strong>
                  <span>sandro@unipam.edu.br</span>
                </p>
                <div class="status inactive"></div>
            </div>
            
            <div class="friend">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4_copy.jpg" />
                <p>
                  <strong>Enrique Surita</strong>
                  <span>enriquesurita@gmail.com</span>
                </p>
                <div class="status inactive"></div>
            </div>
            
            <div class="friend">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/5_copy.jpg" />
                <p>
                <strong>Daniel Lima</strong>
                  <span>daniellima2121@gmail.com</span>
                </p>
                <div class="status inactive"></div>
            </div>
            
            <div id="search">
              <input type="text" id="searchfield" value="Search contacts..." />
            </div>
            
        </div>                
        
    </div>  
    
    <div id="chatview" class="p1">      
        <div id="profile">

            <div id="close">
                <div class="cy"></div>
                <div class="cx"></div>
            </div>
            
            <p>José Carlos</p>
            <span>jcarlos_2013@hotmail.com</span>
        </div>
        <div id="chat-messages">
          <label>Quarta 02</label>
            
            <div class="message">
              <img src="https://lostnexusgames.github.io/img/jc.jpg" style="width:30px; height:30px;"  />
                <div class="bubble">
                  Me passa a resposta da atividade 1 do Zezin
                    <div class="corner"></div>
                    <span>3 min</span>
                </div>
            </div>
            
            <div class="message right">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2_copy.jpg" />
                <div class="bubble">
                  Ta ai: 1 - Engenharia de Software....
                    <div class="corner"></div>
                    <span>1 min</span>
                </div>
            </div>
            
            <div class="message">
              <img src="https://lostnexusgames.github.io/img/jc.jpg" style="width:30px; height:30px;"  />
                <div class="bubble">
                  Valeu
                    <div class="corner"></div>
                    <span>Agora</span>
                </div>
            </div>
            
            <div class="message right">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2_copy.jpg" />
                <div class="bubble">
                  Amanhã tem prova do Sandro?
                    <div class="corner"></div>
                    <span>1 min</span>
                </div>
            </div>
            
            <div class="message">
              <img src="https://lostnexusgames.github.io/img/jc.jpg" style="width:30px; height:30px;"  />
                <div class="bubble">
                  Tem.
                    <div class="corner"></div>
                    <span>Agora</span>
                </div>
            </div>
            
        </div>
      
        <div id="sendmessage">
          <input type="text" value="Send message..." />
            <button id="send"></button>
        </div>
    
    </div>        
</div>  
            </div>
            <div class="mdl-layout-spacer"></div>
          </div>
        </div>
      </main>
      <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script defer src="../js/mdlSelect/getmdl-select.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="../js/mdl-jquery-modal-dialog.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
    <script type="text/javascript">
      Highcharts.chart('container', {
          chart: {
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Gráfico de Notas'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                      style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                      }
                  }
              }
          },
          series: [{
              name: 'Gerenciamento de Memória',
              colorByPoint: true,
              data: [{
                  name: 'Obtido',
                  y: 75,
                  sliced: true,
                  selected: true
              },{
                  name: 'Restante',
                  y: 25
              } ]
          }]
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
  
  var preloadbg = document.createElement("img");
  preloadbg.src = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/timeline1.png";
  
  $("#searchfield").focus(function(){
    if($(this).val() == "Search contacts..."){
      $(this).val("");
    }
  });
  $("#searchfield").focusout(function(){
    if($(this).val() == ""){
      $(this).val("Search contacts...");
      
    }
  });
  
  $("#sendmessage input").focus(function(){
    if($(this).val() == "Send message..."){
      $(this).val("");
    }
  });
  $("#sendmessage input").focusout(function(){
    if($(this).val() == ""){
      $(this).val("Send message...");
      
    }
  });
    
  
  $(".friend").each(function(){   
    $(this).click(function(){
      var childOffset = $(this).offset();
      var parentOffset = $(this).parent().parent().offset();
      var childTop = childOffset.top - parentOffset.top;
      var clone = $(this).find('img').eq(0).clone();
      var top = childTop+12+"px";
      
      $(clone).css({'top': top}).addClass("floatingImg").appendTo("#chatbox");                  
      
      setTimeout(function(){$("#profile p").addClass("animate");$("#profile").addClass("animate");}, 100);
      setTimeout(function(){
        $("#chat-messages").addClass("animate");
        $('.cx, .cy').addClass('s1');
        setTimeout(function(){$('.cx, .cy').addClass('s2');}, 100);
        setTimeout(function(){$('.cx, .cy').addClass('s3');}, 200);     
      }, 150);                            
      
      $('.floatingImg').animate({
        'width': "68px",
        'height': "68px",
        'left':'108px',
        'top':'20px'
      }, 200);
      
      var name = $(this).find("p strong").html();
      var email = $(this).find("p span").html();                            
      $("#profile p").html(name);
      $("#profile span").html(email);     
      
      $(".message").not(".right").find("img").attr("src", $(clone).attr("src"));                  
      $('#friendslist').fadeOut();
      $('#chatview').fadeIn();
    
      
      $('#close').unbind("click").click(function(){       
        $("#chat-messages, #profile, #profile p").removeClass("animate");
        $('.cx, .cy').removeClass("s1 s2 s3");
        $('.floatingImg').animate({
          'width': "40px",
          'top':top,
          'left': '12px'
        }, 200, function(){$('.floatingImg').remove()});        
        
        setTimeout(function(){
          $('#chatview').fadeOut();
          $('#friendslist').fadeIn();       
        }, 50);
      });
      
    });
  });     
});
    </script>
  </body>
</html>
