<?php
$con=mysqli_connect("localhost","root","","bancoead");
$sql = "SELECT * FROM atividades";
$id = $_SESSION['id_usuario'];
$pessoa ="SELECT nome FROM dados where id=$id";
$resultado = mysqli_query($con,$sql);
while($coluna = $resultado->fetch_assoc()){ $colunaResp[] = $coluna; }
if ($result=mysqli_query($con,$pessoa)){
  while ($row=mysqli_fetch_row($result))
  {
      $nome = $row[0];
  }
  mysqli_free_result($result);
  }
?>
<section id="content" style="background:transparent !important;">
          <!--start container-->
          <div class="container" style=" ">
          <div id="conteudo">
          <div id="home">
            <br>
            <h5 style="display:block; margin:auto; text-align:center; font-size: 2em;">Seja Bem-Vindo(a) ao Portal EAD, <strong><?php echo utf8_encode($nome) ?></strong></h5>
            <br>
            <h5 style="display:block; margin:auto; text-align:center; font-size: 2em;">Para navegar no portal,clique nos botões na lateral da página.</h5>
            <br>
            <img src="images/home.png" alt="conversa" class="responsive-img" style="display:block; margin:auto;">
          </div>
          </div>
          <div id="home" style="display:none;">
            <br>
            <h5 style="display:block; margin:auto; text-align:center; font-size: 2em;">Seja Bem-Vindo(a) ao Portal EAD, <strong><?php echo utf8_encode($nome) ?></strong></h5>
            <br>
            <h5 style="display:block; margin:auto; text-align:center; font-size: 2em;">Para navegar no portal,clique nos botões na lateral da página.</h5>
            <br>
            <img src="images/home.png" alt="conversa" class="responsive-img" style="display:block; margin:auto;">
          </div>
          <div id="ativ" style="display:none; margin:auto; height:100%;">
            <h4 style="text-align:center; color:white">Enviar Atividade</h4>
            <form action="paginas/professor/cadastraAtividade.php" method="post" id="FormAtividade">
            
            </form>
          </div>
          <div id="ativConj" style="display:none; margin:auto; height:100%;">
            <h4 style="text-align:center; color:white">Enviar Conjunto de Atividades</h4>
            <form action="paginas/professor/cadastraAtividade.php" method="post" id="FormAtividades">
            <table class="table table-responsive" id="questoes">
            <tr>
            <td><select id="opt1" name="tipo[]" onchange="checkQuest(this)" class="browser-default"> <option selected="selected" disabled="disabled">Selecione um tipo</option> <option value="Aberta">Aberta</option> <option value="Multipla">Múltipla Escolha</option> <option value="CertoErrado">Certo ou Errado</option> <option value="Justifica">A primeira justifica a Segunda</option></select> <div id="perg1"></div> <div id="pergCont1"></div> <label>Insira o valor desta Atividade</label> <input type="text" id="valor1" name="valor"></td>
            <td><button type="button" name="addPerg" id="addPerg" onclick="addQuestao()">Adicionar Pergunta</button></td>
            </tr>
            </table>
            <input class="btn waves-effect waves-light gradient-45deg-light-blue-indigo" type="submit" value="Enviar">
            </form>
          </div>
          <div id="notas" style="display:none; margin:auto; height:100%;">
            <h4 style="text-align:center; color:white">Lançar Notas</h4>
            <form action="paginas/professor/cadastraNota.php" method="post" id="FormNota">
            <table class="centered responsive-table">
        <thead>
          <tr>
              <th style="color:white;">Atividade</th>
              <th style="color:white;">Valor</th>
              <th style="color:white;">Resposta</th>
              <th style="color:white;">Valor Obtido</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($colunaResp as $colResp) { ?>
          <tr>
            <td style="color:white;"><?php echo utf8_encode($colResp["pergunta"]) ?></td>
            <td style="color:white;"><?php echo $colResp["valor"] ?></td>
            <td style="color:white;"><?php echo utf8_encode($colResp["resposta"]) ?></td>
            <td style="color:white;"><input style="color:white;" type="number" name="nota[<?php $colResp["id_atividade"] ?>]" id="nota" placeholder="Insira o valor obtido"></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <input class="btn waves-effect waves-light gradient-45deg-light-blue-indigo" style="display:block;margin:auto;" type="submit" name="action" value="Lançar">
      <br>
      </form>
          </div>
          <div id="materiais" style="display:none; margin:auto; height:100%;">
            <h4 style="text-align:center; color:white">Enviar Materiais</h4>
            <div id="search" style="display:block; text-align:center; margin:auto;">
            <form action="paginas/professor/enviaMaterial.php" method="post" enctype="multipart/form-data" id="FormMaterial">
            <label for="arquivo">Escolha o arquivo</label>
            <br><br>
            <input type="text" style="display:none;" name="curso" id="curso" value="<?php echo $_SESSION['curso'] ?>"></input>
            <input type="file" name="arquivo" placeholder="Arquivo"><br>
            <br>
            <input class="btn waves-effect waves-light gradient-45deg-light-blue-indigo" type="submit" value="Enviar">
            <br><br>
            </form>
		      	<div class="alert alert-success" role="alert" id="divAlert" style="display: none; margin:auto; text-align: center; width:300px !important;"></div>
      </div>
    </div>
  </div>
   <div id="modalLogoff" class="modal">
            <div class="modal-content">
              <h4>Fazer Logoff</h4>
              <div id="modalContent">
                <span>Você deseja realmente sair?</span>
              </div>
            </div>
            <div class="modal-footer">
              <a href="paginas/logoff.php" class="modal-close waves-effect waves-green btn-flat">Sim</a>
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Não</a>
            </div>
          </div>
          <!--end container-->
        </section>