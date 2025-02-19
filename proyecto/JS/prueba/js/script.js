
const apiurl = 'https://crudcrud.com/api/39e00067f59b4a6fae2a126d72130085/products';


async function createProduct(producto) {

    const nombre =document.getElementById("nombre").value;
    const precio =document.getElementById("precio").value;

    const producto ={nombre, precio};

    const response = await fetch(apiurl,{
        method: 'POST',
        headers: {'Content-Type':'application/json'},
        body:JSON.stringify(producto)
    });

    if (!response.ok) {
        alert("Error al crear producto");
    }

    console.log(producto);

    document.getElementById("nombre").value = "";
    document.getElementById("precio").value = "";
    return response.json();
}

async function getProducts() {
    const response = await fetch(apiurl);
    return response.json();
}