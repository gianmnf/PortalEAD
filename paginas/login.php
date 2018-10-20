<?php
  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
  $erro_usuario = isset($_GET['erro_usuario'])  ? $_GET['erro_usuario'] : 0;
  $erro_email   = isset($_GET['erro_email'])  ? $_GET['erro_email'] : 0;
?>

<form action="loginUser.php" method="post" id="login-box">
				<input type="text" name="usuario" placeholder="Usuário" id="user" class="inp" required autofocus><br>
				<input type="password" name="senha" placeholder="Senha" id="pass" class="inp" required><br>
				<a href="#" id="forgot">Esqueceu a senha?</a><br>
				<input type="submit" name="submit" value="Entrar" id="sub-btn" class="entrar">
            </form>
        

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