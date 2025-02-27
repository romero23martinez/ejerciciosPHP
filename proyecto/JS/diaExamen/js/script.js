const arrayImagenes = [
    "./img/1.png",
    "./img/2.png",
    "./img/3.png",
    "./img/4.png",
    "./img/5.png",
    "./img/6.png"

];

function cambiar(imagen){
    let imagenActual = imagen.src.split("/").pop();
    let indiceActual = arrayImagenes.indexOf("./img/"+ imagenActual);

    let nuevoIndice = (indiceActual + 1) % arrayImagenes.length;
    imagen.src = arrayImagenes[nuevoIndice];
}

document.querySelector("#mensaje").innerText = "nuevo texto";

document.querySelectorAll(".btn").forEach(boton =>{
    boton.addEventListener("click", () => {
    boton.style.backgroundColor = "orange";
    boton.textContent = "puta";
    })
});

