var boton = document.getElementById("boton");
var boton2 = document.getElementById("boton2");
var mapa1 = document.getElementById("mapa1");
var mapa2 = document.getElementById("mapa2");
var direccion = document.getElementById("direccion");

mapa1.style.display = "none";
mapa2.style.display = "none";
boton2.style.display = "none"; 

boton.onclick = function() {

    if(mapa1.style.display == "none" || mapa2.style.display == "none") {

        mapa1.style.display = "block";
        mapa2.style.display = "block"; 
        boton2.style.display = "block";
        direccion.style.display = "none";
        boton.style.display = "none"; 

    } 
}

boton2.onclick = function () {

    mapa1.style.display = "none";
    mapa2.style.display = "none";
    boton2.style.display = "none"; 
    direccion.style.display = "block";
    boton.style.display = "block";

}
