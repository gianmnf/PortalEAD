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
  var divHome = document.getElementById('home');
  debugger
  if (divAtual.style.display === "none"){
    divAtual.style.display = "block";
    divHome.style.display = "none";
  }
  else{
    divAtual.style.display = "none";
    divHome.style.display = "block";
  }
}

function diaNoite(){
    var ico = document.getElementById('icoDN');
    var nav = document.getElementById('navColor');
    var logo = document.getElementById('logo');
    var user = document.getElementById('userName');
    var background = document.getElementById('bodyX');
    if(ico.innerHTML == "wb_sunny"){
    ico.innerHTML = "brightness_4";
    nav.style.background = "#000";
    logo.setAttribute('style', 'color:#FFF !important');
    user.setAttribute('style', 'color:#FFF !important');
    }
    else if (ico.innerText === 'brightness_4'){
    ico.innerText = 'wb_sunny';
    nav.style.background = "#80d8ff";
    logo.setAttribute('style', 'color:#000 !important');
    user.setAttribute('style', 'color:#000 !important');
    }
  }