const apiUrl = "https://crudcrud.com/api/1ec8b3354d1c4c8689fa2aba9ce85e45/products";



async function addProduct() {

    const nombre = document.getElementById("nombre").value;
    const cantidad = document.getElementById("cantidad").value;
    const product = { nombre, cantidad };

    const response = await fetch(apiUrl, {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(product)
    });

    document.getElementById("nombre").value = "";
    document.getElementById("cantidad").value = "";
    const data = await response.json();   
    return data;
}

async function showProducts() {
    const response = await fetch(apiUrl);
    const products = await response.json();

    products.forEach(product => {
        console.log(`nombre: ${product.nombre}, cantidad: ${product.cantidad}`);
    });

    return products;
}