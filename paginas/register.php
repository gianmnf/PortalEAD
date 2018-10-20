<?php
  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
  $erro_usuario = isset($_GET['erro_usuario'])  ? $_GET['erro_usuario'] : 0;
  $erro_email   = isset($_GET['erro_email'])  ? $_GET['erro_email'] : 0;
?>
<div class="other">
			<h2>Registre-se</h2>
			<form action="registerUser.php" method="post" id="reg-box">
                <input type="text" name="usuario" placeholder="Digite o usuário" class="inp" required autofocus><br>
                <?php
              if($erro_usuario){ // 1/true 0/false
                echo '<font style="color:#FF0000">Usuário já existe</font>';
              }
            ?>
                <input type="email" name="email" placeholder="Digite o E-Mail" class="inp" required><br>
                <?php
              if($erro_email){
                echo '<font style="color:#FF0000">Email já existe</font>';
              }
            ?>
                <input type="text" name="nome" placeholder="Digite o Nome" class="inp" required><br>
                <input type="text" name="sobrenome" placeholder="Digite o sobrenome" class="inp" required><br>
				<input type="password" name="senha" placeholder="Digite a senha" class="inp" required><br>
                <input type="password" name="confSenha" placeholder="Confirme a Senha" class="inp" required><br>
                <select name="nivel" id="nivel" class="inp">
                    <option selected="selected" disabled="disabled">Selecione o tipo de Usuário</option>
                    <option value="Aluno">Aluno</option>
                    <option value="Professor">Professor</option>
                </select>
                <select name="curso" id="curso" class="inp">
                    <option selected="selected" disabled="disabled">Selecione o curso</option>
                    <option value="Sistemas de Informação">Sistemas de Informação</option>
                    <option value="Treinamento da Biblioteca">Treinamento da Biblioteca</option>
                </select>
                
				<input type="submit" name="submit" value="Registrar" id="sub-btn">
			</form>
		</div>
	</div>