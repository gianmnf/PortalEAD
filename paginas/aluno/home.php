<?php
$con=mysqli_connect("localhost","root","","bancoead");
$sql = "SELECT * FROM atividades";
$sqlMateriais = "SELECT * FROM materiais";
$resultado = mysqli_query($con,$sql);
$resultadoNota = mysqli_query($con,$sql);
$resultadoMateriais = mysqli_query($con,$sqlMateriais);
$curso = $_SESSION['curso'];
$pastaCurso = explode(' ',trim($curso));
while($colunaAtividades = $resultado->fetch_assoc()){ $colunaAtiv[] = $colunaAtividades; }
while($colunaMateriais = $resultadoMateriais->fetch_assoc()){ $colunaMat[] = $colunaMateriais; }
while($colunaNota = $resultadoNota->fetch_assoc()){$colunaNotas[] = $colunaNota;}
$dist=0;
?>
<section id="content">
          <!--start container-->
          <div class="container" style=" ">
          <div id="home" style="display:block; margin:auto; height:100%;">
            <h2 style="text-align:center; color:white">Sistemas de Informação</h2><br><br><br>
          </div>
          <div id="ativ" style="display:block; margin:auto; height:100%;">
            <h2 style="text-align:center; color:white">Atividades</h2>
            <input type="text" style="display:none;" name="cursoGet" id="curso" value="<?php echo $_SESSION['curso'] ?>"></input>
            <form action="paginas/aluno/enviaResposta.php" method="POST">
            <?php foreach($colunaAtiv as $coluna){ ?>
            <h4 id="pergunta" style="color:white;"><?php echo utf8_encode($coluna["Atividade"]) ?></h4>
            <textarea id="resposta" name="resposta[<?php $coluna["id_atividade"] ?>] cols="10" rows="10"></textarea>
            <?php } ?>
            <br>
            <input class="btn waves-effect waves-light gradient-45deg-light-blue-indigo" type="submit" name="action">
            </form>
          </div>
          <div id="notas" style="display:block; margin:auto; height:100%;">
            <h2 style="text-align:center; color:white">Notas</h2>
            <table class="centered responsive-table">
        <thead>
          <tr>
              <th style="color:white;">Atividade</th>
              <th style="color:white;">Valor</th>
              <th style="color:white;">Valor Obtido</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($colunaNotas as $colNota){ ?>
          <tr>
            <td style="color:white;"><?php echo utf8_encode($colNota["Atividade"]) ?></td>
            <td style="color:white;"><?php echo utf8_encode($colNota["valor"]) ?></td>
            <td style="color:white;"><?php echo utf8_encode($colNota["nota"]) ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
      <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
          </div>
          <div id="materiais" style="display:block; margin:auto; height:100%;">
            <h2 style="text-align:center; color:white">Materiais</h2>
            <div id="search" style="display:block; text-align:center; margin:auto;">
            <input type="text" name="Search" id="busca" class="header-search-input z-depth-2" placeholder="Pesquisar Material" style="width:40%; color:white;">
            <button class="btn-floating waves-effect waves-light cyan" type="button" onclick="resPesquisa()" name="action">
            <i class="material-icons">search</i>     
            </button>
            <button class="btn-floating waves-effect waves-light cyan" type="button" onclick="pesquisa()" name="action">
            <i class="material-icons">add</i>     
            </button>
      </div>
            <!--<form action="" id="materiaisOpcoes" style="display:none; color:white;">
            <h5 id="arg">Argumentos da Pesquisa</h5>
                <label for="chave">Palavras Chave:</label>
                <input type="text" name="chave">
                <label for="resp">Nome Responsável:</label>
                <input type="text" name="resp">
                <label for="pasta">Pasta:</label>
                <input type="text" name="pasta">
                <label for="dataEnvio">Data Postagem Início:</label>
                <input type="text" name="dataEnvio">
                <label for="dataFim">Data Postagem Fim:</label>
                <input type="text" name="dataFim">
                <br>
            </form>-->
          </div>
          </div>
          <hr>
          <div id="resMateriais" style="color:white; text-align:center; display:none;">
          <h5 id="arg">Lista de Materiais</h5>
          <table>
            <thead>
            <tr>
              <th style="color:white;">Arquivo</th>
              <th style="color:white;">Opções</th>
              <th style="color:white;">Data de Envio</th>
            </tr>
            </thead>
            <tbody id="campoBusca">
            <?php foreach($colunaMat as $materiais) { if($materiais['curso'] == $pastaCurso[0]){?>
          <tr style="color:white;">
            <td style="color:white;"><?php echo utf8_encode($materiais['arquivo']) ?></td>
            <td style="color:white;"><button onclick="loadMaterial('<?php echo $materiais['id'] ?>')" id="getMaterial" class="btn modal-trigger">Visualizar/Baixar</button></td>
            <td style="color:white;"><?php echo $materiais['dataUpload'] ?></td>
          </tr>
            <?php }} ?>
            </tbody>
          </table>
          </div>
          <div id="modal" class="modal">
            <div class="modal-content">
              <h4>Visualizando Arquivo</h4>
              <div id="modalContent"></div>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
            </div>
          </div>
          <!--end container-->
        </section>