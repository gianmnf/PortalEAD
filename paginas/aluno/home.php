<?php
$con=mysqli_connect("localhost","root","","bancoead");
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM atividades";
$sqlMateriais = "SELECT * FROM materiais";
$resultado = mysqli_query($con,$sql);
$resultadoNota = mysqli_query($con,$sql);
$resultadoMateriais = mysqli_query($con,$sqlMateriais);
$pessoa ="SELECT nome FROM dados where id=$id";
$curso = $_SESSION['curso'];
$pastaCurso = explode(' ',trim($curso));
$justArray = ["A" => "As duas afirmações são verdadeiras, e a segunda justifica a primeira.",  
              "B" => "As duas afirmações são verdadeiras, e a segunda não justifica a primeira.",
              "C" => "A primeira afirmação é verdadeira, e a segunda é falsa.",
              "D" => "A primeira afirmação é falsa, e a segunda é verdadeira.",
              "E" => "As duas afirmações são falsas.",];
while($colunaAtividades = $resultado->fetch_assoc()){ $colunaAtiv[] = $colunaAtividades; }
while($colunaMateriais = $resultadoMateriais->fetch_assoc()){ $colunaMat[] = $colunaMateriais; }
while($colunaNota = $resultadoNota->fetch_assoc()){$colunaNotas[] = $colunaNota;}
if ($result=mysqli_query($con,$pessoa)){
while ($row=mysqli_fetch_row($result))
{
    $nome = $row[0];
}
mysqli_free_result($result);
}
$dist=0;
$ativs=0;
?>
<section id="content">
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
          <div id="ativ" style="display:none; margin:auto;">
            <h4 style="text-align:center; color:white">Atividades</h4>
            <input type="text" style="display:none;" name="cursoGet" id="curso" value="<?php echo $_SESSION['curso'] ?>"></input>
            <form action="paginas/aluno/enviaResposta.php" method="POST" id="FormAtividade">
            <?php foreach($colunaAtiv as $coluna){ ?>
            <?php if($coluna["tipoPergunta"] == 'Aberta'){ ?>
            <h5 id="pergunta" style="color:white;"><?php echo utf8_encode($coluna["pergunta"]) ?></h5>
            <textarea id="resposta" name="resposta[<?php echo $coluna["id_atividade"] ?>]" cols="10" rows="10"></textarea>
            <?php } else if($coluna["tipoPergunta"] == 'CertoErrado'){ ?>
              <h5 id="pergunta" style="color:white;"><?php echo utf8_encode($coluna["pergunta"]) ?></h5>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" id="qc" value="Certo"><label for="qc"> Certo</label><br>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" id="qe" value="Errado"><label for="qe"> Errado</label>
            <?php } else if($coluna["tipoPergunta"] == 'Multipla'){ 
            $alts = explode("|",trim($coluna['multipla']));?>
            <h5 id="pergunta" style="color:white;"><?php echo utf8_encode($coluna["pergunta"]) ?></h5>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" value="<?php echo $alts[0] ?>" id="qAM"><label for="qAM"> <?php echo $alts[0] ?></label><br>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" value="<?php echo $alts[1] ?>" id="qBM"><label for="qBM"> <?php echo $alts[1] ?></label><br>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" value="<?php echo $alts[2] ?>" id="qCM"><label for="qCM"> <?php echo $alts[2] ?></label><br>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" value="<?php echo $alts[3] ?>" id="qDM"><label for="qDM"> <?php echo $alts[3] ?></label><br>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" value="<?php echo $alts[4] ?>" id="qEM"><label for="qEM"> <?php echo $alts[4] ?></label><br>
            <?php } else if($coluna["tipoPergunta"] == 'Justifica'){ 
            $perg = explode("|",trim($coluna['pergunta']));?>
            <h5><?php echo utf8_encode($perg[0]) ?></h5>
            <h5>Porque</h5>
            <h5><?php echo utf8_encode($perg[1]) ?></h5>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" value="<?php echo $justArray['A'] ?>" id="qAJ"><label for="qAJ"> <?php echo $justArray['A'] ?></label><br>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" value="<?php echo $justArray['B'] ?>" id="qBJ"><label for="qBJ"> <?php echo $justArray['B'] ?></label><br>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" value="<?php echo $justArray['C'] ?>" id="qCJ"><label for="qCJ"> <?php echo $justArray['C'] ?></label><br>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" value="<?php echo $justArray['D'] ?>" id="qDJ"><label for="qDJ"> <?php echo $justArray['D'] ?></label><br>
            <input type="radio" name="resposta[<?php echo $coluna["id_atividade"] ?>]" value="<?php echo $justArray['E'] ?>" id="qEJ"><label for="qEJ"> <?php echo $justArray['E'] ?></label><br>
            <?php } ?>
            <?php } ?>
            <br><br>
            <input class="btn waves-effect waves-light gradient-45deg-light-blue-indigo" type="submit" name="action">
            </form>
          </div>
          <div id="notas" style="display:none; margin:auto;">
            <h4 style="text-align:center; color:white">Notas</h4>
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
            <td style="color:white;"><?php echo utf8_encode($colNota["pergunta"]) ?></td>
            <td style="color:white;"><?php echo $colNota["valor"] ?></td>
            <td style="color:white;"><?php echo $colNota["nota"] ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
          </div>
          <div id="desempenho" style="display:none; margin:auto;">
          <br>
            <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
          </div>
          <div id="materiais" style="display:none; margin:auto;">
            <h4 style="text-align:center; color:white">Materiais</h4>
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
          <br>
          <div id="resMateriais" style="color:white; text-align:center; display:none;">
          <h5 id="arg">Lista de Materiais</h5>
          <table class="centered responsive-table">
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
            <td style="color:white;"><?php echo $materiais['arquivo'] ?></td>
            <td style="color:white;"><button onclick="loadMaterial('<?php echo $materiais['id'] ?>')" id="getMaterial" class="btn modal-trigger">Visualizar/Baixar</button></td>
            <td style="color:white;"><?php echo $materiais['dataUpload'] ?></td>
          </tr>
            <?php }} ?>
            </tbody>
          </table>
          </div>
          <div id="modal" class="modal">
            <div class="modal-content ">
              <h5>Visualizando Arquivo</h5>
              <div id="modalContent"></div>
            </div>
            <div class="modal-footer ">
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
            </div>
          </div>
          <div id="modalLogoff" class="modal">
            <div class="modal-content" style="height:100% !important;">
              <h5>Fazer Logoff</h5>
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