function pesquisa(){
    var divMateriais = document.getElementById("materiaisOpcoes");
    if (divMateriais.style.display === "none") {
        divMateriais.style.display = "block";
    } else {
        divMateriais.style.display = "none";
    }
}

function loadMaterial(idMat){
    $('#modalContent').load('paginas/aluno/getMaterial.php?id=' + idMat,
              function() {
                  $('#modal').modal('open');
              });
}