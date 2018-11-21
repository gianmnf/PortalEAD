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
    <!-- jQuery Library -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
    <!--materialize js - quebra se for atualizado-->
    <script src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/script.js"></script>
    <script>
      $(document).ready(function(){
          $('#modal').modal();
          $('#modalLogoff').modal();
          $('#FormAtividade').ajaxForm(function() {
          Materialize.toast('Atividade enviada com sucesso!', 4000);
          });
          $("#busca").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#campoBusca tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        }); 
        });
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script>

Highcharts.chart('container', {
    xAxis: {
        type: 'datetime'
   },
  
  title: {
    text: 'Gráfico de Acesso'
  },

  subtitle: {
    text: 'Total de Acessos: <?php echo $rowms[0] ?>'
  },

  yAxis: {
    title: {
      text: 'Informações'
    }
  },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },
      pointStart: Date.UTC(2018, 6, 30),
      pointInterval: 24 * 3600 * 1000 * 30
    }
  },

  series: [
      {
    name: 'Acessos',
    data: [<?php echo $rowAgo[0] ?>,<?php echo $rowSet[0] ?>,<?php echo $rowOut[0] ?>,<?php echo $rowNov[0] ?>,<?php echo $rowDez[0] ?>]
  }],

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }
});</script>
  </body>
</html>