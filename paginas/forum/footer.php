    <!-- END FOOTER -->
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--materialize js - quebra se for atualizado-->
    <script src="../../js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/script.js"></script>
    <script>
      $(document).ready(function(){
          $('#modal').modal();
          $('#modalLogoff').modal();

        /* Carrega a pesquisa */
        $(document).ready(function () {
  $("#busca").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#campoBusca tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  }); 
});
        });
    </script>
  </body>
</html>