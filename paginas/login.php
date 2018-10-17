<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal EAD: Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Estilos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/login.css" />
</head>
<body>
<div>
<div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 300px;" src="../img/logoEAD.png" />
      <div class="section"></div>

      <h5 class="indigo-text">Bem-Vindo(a) ao Portal EAD!</h5>

      <div class="container">
        <div class="row" style="display: inline-block; padding: 22px 48px 0px 48px;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='usuario' id='usuario' />
                <label for='usuario'>Usuário</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='senha' id='senha' />
                <label for='senha'>Senha</label>
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#!'><b>Esqueceu a Senha?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="../js/script.js"></script>  
</body>
</html>