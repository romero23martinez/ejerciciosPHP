const apiUrl = "https://crudcrud.com/api/55fdf9e4629343ca8b0ecb857e29e460/products";

async function addNewProduct() {
    let nombre = document.getElementById("nombre").value;
    let cantidad = document.getElementById("cantidad").value;
    
    if (nombre == "" || cantidad == "") {
        alert("Campos vacíos");
        return;
    }

    let producto = { nombre, cantidad };

    const respuesta = await fetch(apiUrl, {
        method: "POST",
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify(producto)
    });

    let data = await respuesta.json();

    document.getElementById("nombre").value = "";
    document.getElementById("cantidad").value = "";
    
    return data;
}

async function getAllProducts() {
    let res = await fetch(apiUrl);
    let datos = await res.json();

    datos.forEach(producto => {
        console.log(`Nombre: ${producto.nombre}, Cantidad: ${producto.cantidad}`);
    });

    return datos;
}
