<?php
$con=mysqli_connect("localhost","root","","bancoead");
$sql = "SELECT * FROM atividades";
$resultado = mysqli_query($con,$sql);
$resultadoNota = mysqli_query($con,$sql);
?>
<section id="content">
          <!--start container-->
          <div class="container" style=" ">
          <div id="home" style="display:block; margin:auto; height:100%;">
            <h2 style="text-align:center; color:white">Sistemas de Informação</h2><br><br><br>
          </div>
          <div id="ativ" style="display:block; margin:auto; height:100%;">
            <h2 style="text-align:center; color:white">Atividades</h2>
            <form action="paginas/aluno/enviaResposta.php" method="POST">
            <?php while($coluna = $resultado->fetch_assoc()){ ?>
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
        <?php while($colunaNota = $resultadoNota->fetch_assoc()){ ?>
          <tr>
            <td style="color:white;"><?php echo utf8_encode($colunaNota["Atividade"]) ?></td>
            <td style="color:white;"><?php echo utf8_encode($colunaNota["valor"]) ?></td>
            <td style="color:white;"><?php echo utf8_encode($colunaNota["nota"]) ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
          </div>
          <div id="materiais" style="display:block; margin:auto; height:100%;">
            <h2 style="text-align:center; color:white">Materiais</h2>
            <div id="search" style="display:block; text-align:center; margin:auto;">
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Pesquisar Material" style="width:40%; color:white;">
            <button class="btn-floating waves-effect waves-light cyan" type="button" onclick="pesquisa()" name="action">
            <i class="material-icons">add</i>     
            </button>
            <button class="btn-floating waves-effect waves-light cyan" type="button" onclick="resPesquisa()" name="action">
            <i class="material-icons">search</i>     
            </button>
      </div>
            <form action="" id="materiaisOpcoes" style="display:none; color:white;">
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
            </form>
          </div>
          </div>
          </div>
          <!--end container-->
        </section>