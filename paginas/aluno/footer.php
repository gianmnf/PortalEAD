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
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script>
Highcharts.chart('container', {
    chart: {
        type: 'column',
        backgroundColor: null
    },
    title: {
        text: 'Gráfico de Desempenho'
    },
    subtitle: {
      <?php foreach($colunaNotas as $colNota){ $dist+=$colNota['valor'];} ?>
        text: 'Pontos distribuídos: <?php echo $dist ?>'
    },
    xAxis: {
        type: 'category',
        labels: {
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Pontos'
        }
    },
    legend: {
        enabled: true
    },
    tooltip: {
        pointFormat: 'Pontos obtidos: {point.y:.1f}'
    },
    series: [{
        name: 'Pontos Obtidos',
        data: [
          <?php foreach($colunaNotas as $colNota){ $string = $colNota['pergunta']; ?>
            ['<?php echo utf8_encode(substr($string,0,40)); ?>', <?php echo $colNota['nota'] ?>],
          <?php } ?>
        ],
        dataLabels: {
            enabled: true,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});</script>
<script>
$(function() {
       $('#FormAtividade').ajaxForm(function() {
          Materialize.toast('Atividade enviada com sucesso!', 4000);
       });
     });
</script>
  </body>
</html>