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
  var i = 0;
  function checkQuest(opc){
    debugger
              var valor = opc.options[opc.selectedIndex].value;
              debugger
              var perg = document.querySelector("#perg"+i);
              var cont = document.querySelector("#pergCont"+i);
              if(valor == "Aberta"){
                perg.innerHTML = "<label id=lblP for=pergunta>Insira a Pergunta</label><input name=pergunta id=pergA class=materialize-textarea>";
                cont.innerHTML = "";
                var perg = document.querySelector("#pergA");
                var lbl = document.querySelector("#lblP");
                perg.setAttribute('name','pergunta['+i+']');
                perg.setAttribute('id','pergA['+i+']');
                lbl.setAttribute('for','pergunta['+i+']');
                lbl.setAttribute('id','lblP['+i+']');
              }
              else if(valor == "CertoErrado"){
                perg.innerHTML = "<label id=lblPCE for=pergunta>Insira a Pergunta</label><input name=pergunta id=perg class=materialize-textarea>";
                cont.innerHTML = "<label id=lblCCE for='correta'>Alternativa Correta</label><select class=browser-default name=correta id=corr><option value=Certo>Certo</option><option value=Errado>Errado</option></select>";
                var perg = document.querySelector("#perg");
                var cor = document.querySelector("#corr");
                var lbl1 = document.querySelector("#lblPCE");
                var lbl2 = document.querySelector("#lblCCE");
                perg.setAttribute('name','pergunta['+i+']');
                cor.setAttribute('name','correta['+i+']');
                perg.setAttribute('id','perg['+i+']');
                cor.setAttribute('id','corr['+i+']');
                lbl1.setAttribute('for','pergunta['+i+']');
                lbl2.setAttribute('for','correta['+i+']');
              }
              else if(valor == "Multipla"){
                  perg.innerHTML = "<label for=pergunta>Insira a Pergunta</label><input name=pergunta id=pergM class=materialize-textarea>";
                  cont.innerHTML = "<label id=lblAlt1M for=alt1M>Alternativa A</label><input type=text id=alt1M name=alt1> <label id=lblAlt2M for='alt2'>Alternativa B</label><input type=text id=alt2M name=alt2> <label id=lblAlt3M>Alternativa C</label><input type=text id=alt3M name=alt3> <label id=lblAlt4M for='alt4'>Alternativa D</label><input type=text id=alt4M name=alt4> <label id=lblAlt5M for='alt5'>Alternativa E</label><input type=text id=alt5M name=alt5> <label id=CM for='correta'>Alternativa Correta</label><select class=browser-default id=corrM name=correta><option value=A>A</option><option value=B>B</option><option value=C>C</option><option value=D>D</option><option value=E>E</option></select>";
                var perg = document.querySelector("#pergM");
                var lblAlt1M = document.querySelector("#lblAlt1M");
                var alt1M = document.querySelector("#alt1M");
                var lblAlt2M = document.querySelector("#lblAlt2M");
                var alt2M = document.querySelector("#alt2M");
                var lblAlt3M = document.querySelector("#lblAlt3M");
                var alt3M = document.querySelector("#alt3M");
                var lblAlt4M = document.querySelector("#lblAlt4M");
                var alt4M = document.querySelector("#alt4M");
                var lblAlt5M = document.querySelector("#lblAlt5M");
                var alt5M = document.querySelector("#alt5M");
                var cm = document.querySelector("#CM");
                var corrM = document.querySelector("#corrM");
                perg.setAttribute('name','pergunta['+i+']');
                perg.setAttribute('id','perg['+i+']');
                lblAlt1M.setAttribute('for','alt1['+i+']');
                lblAlt2M.setAttribute('for','alt2['+i+']');
                lblAlt3M.setAttribute('for','alt3['+i+']');
                lblAlt4M.setAttribute('for','alt4['+i+']');
                lblAlt5M.setAttribute('for','alt5['+i+']');
                alt1M.setAttribute('name','alt1['+i+']');
                alt2M.setAttribute('name','alt2['+i+']');
                alt3M.setAttribute('name','alt3['+i+']');
                alt4M.setAttribute('name','alt4['+i+']');
                alt5M.setAttribute('name','alt5['+i+']');
                corrM.setAttribute('name','correta['+i+']');
                cm.setAttribute('for','correta['+i+']');
               }
            }
  function addQuestao(){
    i++;
    $('#questoes').append('<tr id="coluna'+i+'"><td><select id="opt'+i+'" name="tipo['+i+']" onchange="checkQuest(opt'+i+')" class="browser-default"> <option selected="selected" disabled="disabled">Selecione um tipo</option> <option value="Aberta">Aberta</option> <option value="Multipla">Múltipla Escolha</option> <option value="CertoErrado">Certo ou Errado</option></select> <div id="perg'+i+'"></div> <div id="pergCont'+i+'"></div> <label>Insira o valor desta Atividade</label> <input type="text" id="valor'+i+'" name="valor['+i+']"></td> <td><button type="button" name="remPerg" class="btn_remove" id="'+i+'">X</button></td> </tr>');
}
$(document).on('click', '.btn_remove', function(){
    var btn_id = $(this).attr("id");
    $('#coluna'+btn_id+'').remove();
});
  </script>
  </body>
</html>