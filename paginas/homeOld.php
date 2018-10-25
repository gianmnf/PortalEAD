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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal EAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Importando Estilos CSS-->
    <link rel="stylesheet" href="../css/estilos.css"/>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mdb.min.css">
    <!-- Importando FontAwesome -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar sticky-top">
      <span class="navbar-brand">Portal EAD</span>
      <form class="form-inline my-2 my-lg-0">
      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <span class="fa-stack fa-1x" id="xx">
  <i class="fas fa-user fa-stack-1x fa-inverse"></i>
</span>
<span id="xy"><?= $_SESSION['usuario'] ?></span>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <span class="mr-sm-2" style="color:black;">Curso: </span>
      <select name="curso" class="my-2 my-sm-0 mdb-select md-form colorful-select dropdown-info" id="selectcurso">
        <option disabled>Selecione um Curso...</option>
        <option selected value="sistemas">SISTEMAS DE INFORMAÇÃO</option>
        <option value="treinamento">TREINAMENTO BIBLIOTECA</option>
      </select>
      <span class="fa-stack fa-1x" id="xx">
  <i class="fas fa-sign-out-alt fa-stack-1x fa-inverse" style="color:black;"></i>
</span>
  <a href="logoff.php" style="color:black;">Sair</span>
  </div>
</div>
      
    </form>
      </nav>
<div class="w3-sidebar w3-bar-block w3-black w3-xlarge" style="width:60px">
  <a href="#" class="w3-bar-item w3-button" title="Home"><i class="fa fa-home"></i></a> 
  <a href="#ativ" class="w3-bar-item w3-button" title="Atividades"><i class="fas fa-edit"></i></a> 
  <a href="#notas" class="w3-bar-item w3-button" title="Notas"><i class="far fa-list-alt"></i></a> 
  <a href="#materiais" class="w3-bar-item w3-button" title="Materiais"><i class="fas fa-archive"></i></a>
  <a href="#" class="w3-bar-item w3-button" title="Fórum"><i class="fas fa-users"></i></a>
  <a href="#chat" class="w3-bar-item w3-button" title="Chat"><i class="fas fa-comments"></i></a>
</div>

<div style="margin-left:70px">

<div class="w3-container center">
<h2>Gerenciamento de Memória</h2>
</div>
<div class="w3-container center" id="ativ">
<form class="text-center border border-light p-5" style="background-color: white;" action="javascript:alert('Enviado!')">

    <p class="h4 mb-4">Atividades</p>

    <p class="h5 mb-4">Para que serve o Garbage Collector?</p>

    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="4" placeholder="Resposta"></textarea>

    <br>

    <p class="h5 mb-4">Quais são os Algoritmos de Substituição de Página?</p>

    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5" placeholder="Resposta"></textarea>

    <br>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit">Enviar</button>

</form>
<!-- Default form contact -->
</div>
<div class="w3-container center" id="notas">
    <form class="text-center border border-light p-5" style="background-color: white; height: 90vh;" action="javascript:alert('Enviado!')">

    <p class="h4 mb-4">Notas</p>

    <table>
  <tr>
    <th>Atividade</th>
    <th>Valor</th>
    <th>Valor Obtido</th>
  </tr>
  <tr>
    <td>Gerenciamento de Memória</td>
    <td id="ptsTotal">5.0</td>
    <td id="ptsObtidos">3.75</td>
  </tr>
  </tr>
</table>
<hr>
<span>Distribuição de Pontos</span>
<div class="chart-container" style="position: relative; height:10vh;">
    <canvas id="myChart"></canvas>
</div>
</form>
</div>
<div class="w3-container center" id="materiais">
    <form class="text-center border border-light p-5" style="background-color: white;" method="POST">

    <p class="h4 mb-4">Materiais</p>

    <input type="text" name="busca" id="busca" placeholder="Procurar Material">
    <button id="Opcoes" type="button" onclick="pesquisa()"><span class="fa-stack fa-1x" data-toggle="tooltip" data-placement="right" title="Pesquisa Avançada">
      <i class="fas fa-circle fa-stack-2x"></i>
      <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
    </span></button><br>
    <br>
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
    <button type="button" class="btn btn-info waves-effect waves-light" onclick="resPesquisa()"><i class="fas fa-search"></i> Pesquisar</button>
    <h4 id="pesqTitle" style="display:none;">Resultados da Pesquisa</h4>
        <div id="resultadosPesquisa">
          <table id="tableRes" style="display:none;">
            <tr>
            <th>Arquivo</th>
            <th>Opções</th>
            </tr>
            <tr>
              <td>gerenciamentoMemoria.pdf</td>
              <td><button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">Visualizar/Baixar</button>
            </tr>
          </table>
        </div>
</form>
</div>
<br><br>
<div class="w3-container1 center" id="chat">
<div class="messaging">
      <div class="inbox_msg" style="background-color: white;">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Chat</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Pesquisar" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat">
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Gui Chilom <span class="chat_date">Set 28</span></h5>
                  <p>Teste visual mensagens </p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Gian Michelle <span class="chat_date">Set 28</span></h5>
                  <p>Teste visual mensagens </p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Cyborg <span class="chat_date">Set 28</span></h5>
                  <p>Teste visual mensagens </p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Oliver <span class="chat_date">Set 28</span></h5>
                  <p>Teste visual mensagens </p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Steven <span class="chat_date">Set 28</span></h5>
                  <p>Teste visual mensagens </p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Chilon <span class="chat_date">Set 28</span></h5>
                  <p>Teste visual mensagens </p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Mad Max <span class="chat_date">Set 28</span></h5>
                  <p>Teste visual mensagens </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mesgs" style="background-color:white;">
          <div class="msg_history">
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Teste visual de mensagem para remetente</p>
                  <span class="time_date"> 10:01 AM    |    Setembro 28</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Teste visual para destinatário</p>
                <span class="time_date"> 11:01 AM    |   Setembro 28</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Teste visual de mensagem para remetente</p>
                  <span class="time_date"> 11:11 AM    |    Setembro 28</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Teste visual para destinatário</p>
                <span class="time_date"> 11:16 AM    |    Setembro 28</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Teste de usabilidade de chat realizado simples é mais</p>
                  <span class="time_date"> 11:20 AM    |    Setembro 28</span></div>
              </div>
            </div>
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" placeholder="Digite uma Mensagem" />
              <button class="msg_send_btn" type="button"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>      
    </div>
    </div>
    </div>
</div>
<!-- Importando Scripts no fim do código para acelerar o carregamento da páginas -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.2/popper.min.js"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="../js/mdb.min.js"></script>
<script src="../js/script.js"></script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>
window.onload = function () {
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: [ "Gerenciamento de Memória","Distribuídos"],
        datasets: [{
            label: "Distribuição de Pontos",
            backgroundColor: ["lightgreen","#C0392B"],
            borderColor: 'rgb(255, 99, 132)',
            data: [3.75,5],
        }]
    },

    // Configuration options go here
    options: {
      responsive:true,
      maintainAspectRatio:true
    }
});
}
</script>
</body>
</html>