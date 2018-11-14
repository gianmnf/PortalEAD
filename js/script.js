function pesquisa(){
    var resMateriais = document.getElementById("resMateriais");
    if (resMateriais.style.display === "none") {
        resMateriais.style.display = "block";
    } else {
        resMateriais.style.display = "none";
    }
}

function loadMaterial(idMat){
    $('#modalContent').load('paginas/aluno/getMaterial.php?id=' + idMat,
              function() {
                  $('#modal').modal('open');
              });
}

function mostraDiv(divX){
  $('#conteudo').empty();
  $('#conteudo').append($('#' + divX).html());
  $("#conteudo > div").css("display","block");
}

function quest(){    
    $('#numQuestoes').keyup(function() {
        debugger
        var i;
        var val = $(this).val();
        for(i = 0; i < val; i++){
        $('#contAtivs').load('ativ.php');
        }
        });
}