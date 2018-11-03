<?php
$con=mysqli_connect("localhost","root","","bancoead");
$sql = "SELECT * FROM atividades";
$resultado = mysqli_query($con,$sql);
while($coluna = $resultado->fetch_assoc()){ $colunaResp[] = $coluna; }
?>
<section id="content" style="background:transparent !important;">
          <!--start container-->
          <div class="container" style=" ">
          <div id="home">
            <br>
            <h5 style="display:block; margin:auto; text-align:center;">Seja Bem-Vindo(a) ao Portal EAD, <strong><?= $_SESSION['usuario'] ?></strong></h5>
            <br>
            <h5 style="display:block; margin:auto; text-align:center;">Para navegar no portal,clique nos botões na lateral da página.</h5>
          </div>
          <div id="ativ" style="display:none; margin:auto; height:100%;">
            <h4 style="text-align:center; color:white">Enviar Atividade</h4>
            <form action="paginas/professor/cadastraAtividade.php" method="post" id="FormAtividade">
            <select id="opt" name="tipo" onchange="checkQuest(this)">
            <option selected="selected" disabled="disabled">Selecione um tipo</option>
            <option value="Aberta">Aberta</option>
            <option value="Multipla">Múltipla Escolha</option>
            <option value="CertoErrado">Certo ou Errado</option>
            <option value="Justifica">A primeira justifica a Segunda</option></select>
            <div id="perg"></div>
            <div id="pergCont"></div>
            <script>
            function checkQuest(opc){
              var valor = opc.options[opc.selectedIndex].value;
              debugger
              var perg = document.querySelector("#perg");
              var cont = document.querySelector("#pergCont");
                if(valor == "Aberta" || valor == "CertoErrado"){
                  perg.innerHTML = "<label for='pergunta'>Insira a Pergunta</label><input name=pergunta class=materialize-textarea>";
                  cont.innerHTML = "";
              }
              else if(valor == "Multipla"){
                  perg.innerHTML = "<label for='pergunta'>Insira a Pergunta</label><input name=pergunta class=materialize-textarea>";
                  cont.innerHTML = "<label for='alt1'>Alternativa A</label><input type=text name=alt1> <label for='alt2'>Alternativa B</label><input type=text name=alt2> <label for='alt3'>Alternativa C</label><input type=text name=alt3> <label for='alt4'>Alternativa D</label><input type=text name=alt4> <label for='alt5'>Alternativa E</label><input type=text name=alt5>";
              }
              else if(valor="Justifica"){
                perg.innerHTML = "<label for='perg1'>Insira a Primeira Pergunta</label><input type=text name=perg1> <label for='perg2'>Insira a Segunda Pergunta</label><input type=text name=perg2>";
                cont.innerHTML = "";
              }
            }
            </script>
            <label>Insira o valor desta Atividade</label>
            <input type="text" id="valor" name="valor">
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
            <td style="color:white;"><?php echo utf8_encode($colResp["valor"]) ?></td>
            <td style="color:white;"><?php echo utf8_encode($colResp["resposta"]) ?></td>
            <td style="color:white;"><input style="color:white;" type="number" name="nota[<?php $colResp["id_atividade"] ?>]" id="nota" placeholder="Insira o valor obtido"></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <input class="btn waves-effect waves-light gradient-45deg-light-blue-indigo" type="submit" name="action">
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