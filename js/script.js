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

function mostraDiv(div){
  var divAtual = document.getElementById(div);
  debugger
  if (divAtual.style.display === "none"){
    divAtual.style.display = "block";
  }
  else{
    divAtual.style.display = "none";
  }
}