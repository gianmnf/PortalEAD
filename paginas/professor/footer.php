<footer class="page-footer gradient-45deg-light-blue-cyan">
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-2" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">Portal EAD</a> Todos os direitos reservados.</span>
            <span class="right hide-on-small-only"> Desenvolvido por <a class="grey-text text-lighten-2" href="https://unipam.edu.br">UNIPAM</a></span>
          </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    <!-- ================================================
    Scripts
    ================================================ -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
    <!--materialize js-->
    <script src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- Envia form silenciosamente usando AJAX e Jquery -->
		<script>
       $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('#modalLogoff').modal();  
       $('#FormMaterial').ajaxForm(function() {
       		Materialize.toast('Material enviado com sucesso!', 4000);
       });
       $('#FormNota').ajaxForm(function() {
          Materialize.toast('Nota(s) inserida(s) com sucesso!', 4000);
       });
       $('#FormAtividade').ajaxForm(function() {
          Materialize.toast('Atividade inserida com sucesso!', 4000);
       });
      });
  </script>
  <script>
  var i = 1;
  function checkQuest(opc){
    debugger
              var valor = opc.options[opc.selectedIndex].value;
              debugger
              var perg = document.querySelector("#perg"+i);
              var cont = document.querySelector("#pergCont"+i);
              if(valor == "Aberta"){
                  perg.innerHTML = "<label for=pergunta[i]>Insira a Pergunta</label><input name=pergunta[i] class=materialize-textarea>";
                  cont.innerHTML = "";
              }
              else if(valor == "CertoErrado"){
                perg.innerHTML = "<label for='"+pergunta[i]+"'>Insira a Pergunta</label><input name='"+pergunta[i]+"' class=materialize-textarea>";
                cont.innerHTML = "<label for='correta[i]'>Alternativa Correta</label><select class=browser-default name=correta[i]><option value=Certo>Certo</option><option value=Errado>Errado</option></select>";
              }
              else if(valor == "Multipla"){
                  perg.innerHTML = "<label for='+pergunta[i]+'>Insira a Pergunta</label><input name=pergunta[i] class=materialize-textarea>";
                  cont.innerHTML = "<label for='alt1[i]'>Alternativa A</label><input type=text name=alt1[i]> <label for='alt2[i]'>Alternativa B</label><input type=text name=alt2[i]> <label for='alt3[i]'>Alternativa C</label><input type=text name=alt3[i]> <label for='alt4[i]'>Alternativa D</label><input type=text name=alt4[i]> <label for='alt5[i]'>Alternativa E</label><input type=text name=alt5[i]> <label for='correta[i]'>Alternativa Correta</label><select class=browser-default name=correta[i]><option value=A>A</option><option value=B>B</option><option value=C>C</option><option value=D>D</option><option value=E>E</option></select>";
              }
              else if(valor="Justifica"){
                perg.innerHTML = "<label for='perg1'>Insira a Primeira Pergunta</label><input type=text name=perg1[]> <label for='perg2'>Insira a Segunda Pergunta</label><input type=text name=perg2[]>";
                cont.innerHTML = "<label for='correta[i]'>Alternativa Correta</label><select class=browser-default name=correta[i]><option value=A>As duas afirmações são verdadeiras, e a segunda justifica a primeira.</option><option value=B>As duas afirmações são verdadeiras, e a segunda não justifica a primeira.</option><option value=C>A primeira afirmação é verdadeira, e a segunda é falsa.</option><option value=D>A primeira afirmação é falsa, e a segunda é verdadeira.</option><option value=E>As duas afirmações são falsas.</option></select>";
              }
            }
  function addQuestao(){
    i++;
    $('#questoes').append('<tr id="coluna'+i+'"><td><select id="opt'+i+'" name="tipo" onchange="checkQuest(opt'+i+')" class="browser-default"> <option selected="selected" disabled="disabled">Selecione um tipo</option> <option value="Aberta">Aberta</option> <option value="Multipla">Múltipla Escolha</option> <option value="CertoErrado">Certo ou Errado</option> <option value="Justifica">A primeira justifica a Segunda</option></select> <div id="perg'+i+'"></div> <div id="pergCont'+i+'"></div> <label>Insira o valor desta Atividade</label> <input type="text" id="valor'+i+'" name="valor"></td> <td><button type="button" name="remPerg" class="btn_remove" id="'+i+'">X</button></td> </tr>');
}
$(document).on('click', '.btn_remove', function(){
    var btn_id = $(this).attr("id");
    $('#coluna'+btn_id+'').remove();
});
  </script>
  </body>
</html>