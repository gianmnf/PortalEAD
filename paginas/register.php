<?php
  include 'headerlogin.php';
  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
  $erro_usuario = isset($_GET['erro_usuario'])  ? $_GET['erro_usuario'] : 0;
  $erro_email   = isset($_GET['erro_email'])  ? $_GET['erro_email'] : 0;
?>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<body style="background: url('../images/coding.jpg') no-repeat center center fixed !important; overflow: scroll !important; -webkit-background-size: cover !important;
  -moz-background-size: cover !important;
  -o-background-size: cover !important;
  background-size: cover !important;">
<div class="valign-wrapper row login-box" >
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4" style="border: 2px solid rgba(255,255,255,.5)!important;
    border-radius: 5px !important; ">
    <form action="registerUser.php" method="post" id="login-box" >
      <div class="card-content">
      	<img src="../images/logo/logo.png" width="96px" height="96px" style="display:block; margin:auto;">
        <br>
        <span class="card-title" style="text-align:center;">Bem-Vindo ao Portal EAD</span>
        <br>
        <div class="row">
          <div class="input-field col s6">
            <label for="text">Nome de Usuário</label>
            <input type="text" class="validate" name="usuario" id="user" style="color:black;" required autofocus/>
            <?php
              if($erro_usuario){ // 1/true 0/false
                echo '<font style="color:#FF0000">Usuário já existe</font>';
              }
            ?>
          </div>
          <div class="input-field col s6">
            <label for="email">Email</label>
            <input type="email" name="email" class="inp" style="color:black;" required><br>
                <?php
              if($erro_email){
                echo '<font style="color:#FF0000">Email já existe</font>';
              }
              ?>
          </div>
          <div class="input-field col s6">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="inp" style="color:black;" required>
          </div>
          <div class="input-field col s6">
          <label for="sobrenome">Sobrenome</label>
          <input type="text" name="sobrenome" class="inp" style="color:black;" required>
          </div>
          <div class="input-field col s6">
          <label for="senha">Senha</label>
          <input type="password" name="senha" class="inp" style="color:black;" required>
          </div>
          <div class="input-field col s6">
          <label for="confSenha">Confirmar Senha</label>
          <input type="password" name="confSenha" class="inp" style="color:black;" required>
          </div>
          <select name="nivel" id="nivel" class="browser-default">
            <option selected="selected" disabled="disabled">Selecione o tipo de Usuário</option>
            <option value="Aluno">Aluno</option>
            <option value="Professor">Professor</option>
          </select>
          <br>
          <select name="curso" id="curso" class="browser-default">
            <option selected="selected" disabled="disabled">Selecione o curso</option>
            <option value="Sistemas de Informação">Sistemas de Informação</option>
            <option value="Treinamento da Biblioteca">Treinamento da Biblioteca</option>
          </select>
        </div>
      </div>
      <div class="card-action right-align">
        <input type="submit" class="btn green waves-effect waves-light" value="Registrar" style="display:block; margin:auto;">
      </div>
    </form>
  </div>
</div>
  </div>
</div>
</body>
<?php include 'footerRegistro.php'; ?>
<script>
$('.entrar').click(function(){
          var campo_vazio = false;
          if($('#user').val() ==''){
            $('#user').css({'border-color': '#A94442'});
            campo_vazio=true;
          }
          else{
            $('#user').css({'border-color': '#CCC'});
          }
          if($('#pass').val() ==''){
            $('#pass').css({'border-color': '#A94442'});
            campo_vazio=true;
          }
          else{
            $('#pass').css({'border-color': '#A94442'});
          }
          if(campo_vazio) return false;
        });
</script>