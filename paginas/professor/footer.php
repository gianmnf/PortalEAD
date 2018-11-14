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
       quest();
  </script>
  </body>
</html>