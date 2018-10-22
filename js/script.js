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