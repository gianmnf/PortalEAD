<?php
$con=mysqli_connect("localhost","root","","bancoead");
$sql = "SELECT * FROM atividades";
$resultado = mysqli_query($con,$sql);
?>
<section id="content">
          <!--start container-->
          <div class="container" style=" ">
          <div id="home" style="display:block; margin:auto; height:100%;">
            <h2 style="text-align:center; color:white">Portal do Professor</h2><br><br><br>
          </div>
          <div id="ativ" style="display:block; margin:auto; height:100%;">
            <h2 style="text-align:center; color:white">Enviar Atividade</h2>
            <form action="paginas/professor/cadastraAtividade.php" method="post">
            <label>Insira a pergunta</label>
            <input type="text" id="Atividade" name="Atividade">
            <label>Digite o valor desta Atividade</label>
            <input type="text" id="valor" name="valor">
            <input class="btn waves-effect waves-light gradient-45deg-light-blue-indigo" type="submit" value="Enviar">
            </form>
          </div>
          <div id="notas" style="display:block; margin:auto; height:100%;">
            <h2 style="text-align:center; color:white">Lançar Notas</h2>
            <form action="paginas/professor/cadastraNota.php" method="post">
            <table class="centered responsive-table">
        <thead>
          <tr>
              <th style="color:white;">Atividade</th>
              <th style="color:white;">Valor</th>
              <th style="color:white;">Valor Obtido</th>
          </tr>
        </thead>
        <tbody>
          <?php while($coluna = $resultado->fetch_assoc()){ ?>
          <tr>
            <td style="color:white;"><?php echo utf8_encode($coluna["Atividade"]) ?></td>
            <td style="color:white;"><?php echo utf8_encode($coluna["valor"]) ?></td>
            <td style="color:white;"><input type="number" name="nota[<?php $coluna["id_atividade"] ?>]" id="nota" placeholder="Insira o valor obtido"></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <input class="btn waves-effect waves-light gradient-45deg-light-blue-indigo" type="submit" name="action">
      </form>
          </div>
          <div id="materiais" style="display:block; margin:auto; height:100%;">
            <h2 style="text-align:center; color:white">Enviar Materiais</h2>
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