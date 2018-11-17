<select id="opt" name="tipo" onchange="checkQuest(this)" class="browser-default">
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
                if(valor == "Aberta"){
                  perg.innerHTML = "<label for='pergunta'>Insira a Pergunta</label><input name=pergunta class=materialize-textarea>";
                  cont.innerHTML = "";
              }
              else if(valor == "CertoErrado"){
                perg.innerHTML = "<label for='pergunta'>Insira a Pergunta</label><input name=pergunta class=materialize-textarea>";
                cont.innerHTML = "<label for='correta'>Alternativa Correta</label><select class=browser-default name=correta><option value=Certo>Certo</option><option value=Errado>Errado</option></select>";
              }
              else if(valor == "Multipla"){
                  perg.innerHTML = "<label for='pergunta'>Insira a Pergunta</label><input name=pergunta class=materialize-textarea>";
                  cont.innerHTML = "<label for='alt1'>Alternativa A</label><input type=text name=alt1> <label for='alt2'>Alternativa B</label><input type=text name=alt2> <label for='alt3'>Alternativa C</label><input type=text name=alt3> <label for='alt4'>Alternativa D</label><input type=text name=alt4> <label for='alt5'>Alternativa E</label><input type=text name=alt5> <label for='correta'>Alternativa Correta</label><select class=browser-default name=correta><option value=A>A</option><option value=B>B</option><option value=C>C</option><option value=D>D</option><option value=E>E</option></select>";
              }
              else if(valor="Justifica"){
                perg.innerHTML = "<label for='perg1'>Insira a Primeira Pergunta</label><input type=text name=perg1> <label for='perg2'>Insira a Segunda Pergunta</label><input type=text name=perg2>";
                cont.innerHTML = "<label for='correta'>Alternativa Correta</label><select class=browser-default name=correta><option value=A>As duas afirmações são verdadeiras, e a segunda justifica a primeira.</option><option value=B>As duas afirmações são verdadeiras, e a segunda não justifica a primeira.</option><option value=C>A primeira afirmação é verdadeira, e a segunda é falsa.</option><option value=D>A primeira afirmação é falsa, e a segunda é verdadeira.</option><option value=E>As duas afirmações são falsas.</option></select>";
              }
            }
            </script>
            <label>Insira o valor desta Atividade</label>
            <input type="text" id="valor" name="valor">
            <input class="btn waves-effect waves-light gradient-45deg-light-blue-indigo" type="submit" value="Enviar">