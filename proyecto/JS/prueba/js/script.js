
const apiUrl = 'https://crudcrud.com/api/39e00067f59b4a6fae2a126d72130085/products';


async function createProduct() {

    const nombre = document.getElementById("nombre").value;
    const descripcion = document.getElementById("descripcion").value;
    const cantidad = document.getElementById("cantidad").value;

    if (!nombre || !descripcion || !cantidad || cantidad <= 0) {
        alert("Ingresa datos validos");
        return;
    }

    const product ={ nombre, descripcion, cantidad };


    const response = await fetch(apiUrl,{
        method: 'POST',
        headers: { 'Content-Type':'application/json' },
        body: JSON.stringify(product)
    });


    document.getElementById("nombre").value = "";
    document.getElementById("descripcion").value = "";
    document.getElementById("cantidad").value = "";
    return response.json();
}

async function getProducts() {
    const response = await fetch(apiUrl);
    const datos = await response.json();
    document.getElementById("body").innerHTML = "";
    
    datos.forEach(producto => {
        document.getElementById("body").innerHTML += `
        <tr>
         <td>${producto.nombre}</td>
         <td>${producto.descripcion}</td>
         <td>${producto.cantidad}</td>
         </tr>
        `;
    });

}