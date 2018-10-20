function pesquisa(){
    var divMateriais = document.getElementById("materiaisOpcoes");
    if (divMateriais.style.display === "none") {
        divMateriais.style.display = "block";
    } else {
        divMateriais.style.display = "none";
    }
}