// Determinar la altura de un div
window.onload = function() {
    // Tu código JavaScript aquí
// var div1 = document.getElementById("list-example");
var div1 = document.querySelector(".lectura-capitulo");
var altura = div1.clientHeight;

// Asignar la altura del primer div al segundo div

var div2 = document.getElementById("lectura-versiculo");
// var div2 = document.querySelector(".lectura-versiculo");
// alert(typeof(altura));

if(altura<350){
    div2.style.height = "400px";
}else{
    altura=altura - 20;
    div2.style.height = altura.toString() + "px";
}


}
