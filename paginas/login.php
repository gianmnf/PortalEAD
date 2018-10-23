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
<div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form action="loginUser.php" method="post" id="login-box">
      <div class="card-content">
        <span class="card-title">Bem-Vindo ao Portal EAD</span>
        <div class="row">
          <div class="input-field col s12">
            <label for="text">Nome de Usuário</label>
            <input type="text" class="validate" name="usuario" id="user" style="color:black;" required autofocus/>
          </div>
          <div class="input-field col s12">
            <label for="password">Senha </label>
            <input type="password" class="validate" name="senha" id="pass" style="color:black;" required autofocus/>
          </div>
        </div>
      </div>
      <div class="card-action right-align">
        <input type="submit" class="btn green waves-effect waves-light" value="Entrar">
      </div>
    </form>
  </div>
</div>
  </div>
</div>
</body>      

<?php include 'footerlogin.php' ?>
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