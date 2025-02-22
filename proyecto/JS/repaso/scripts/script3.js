const apiUrl = "https://crudcrud.com/api/55fdf9e4629343ca8b0ecb857e29e460/products";

async function createProduct() {
    const nombre = document.getElementById("nombreC").value;
    const cantidad = document.getElementById("cantidadC").value;
    
    if (!nombre || !cantidad) {
        alert("Campos vacíos");
        return;
    }

    const product = { nombre, cantidad };

    const response = await fetch(apiUrl, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(product)
    });

    let data = await response.json();
    console.log("Producto creado:", data);

    document.getElementById("nombreC").value = "";
    document.getElementById("cantidadC").value = "";
}

async function getProducts() {
    const response = await fetch(apiUrl);
    const products = await response.json();

    products.forEach(product => {
        console.log(`Producto: ${product.nombre}, Cantidad: ${product.cantidad}`);
    });

    return products;
}

async function updateProduct() {
    let productId = document.getElementById("productIdU").value;
    const nombre = document.getElementById("nombreU").value;
    const cantidad = document.getElementById("cantidadU").value;

    if (!productId || !nombre || !cantidad) {
        alert("Debe proporcionar todos los datos");
        return;
    }

    const updatedProduct = { nombre, cantidad };

    const response = await fetch(`${apiUrl}/${productId}`, {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(updatedProduct)
    });

    let data = await response.json();
    console.log("Producto actualizado:", data);
}

async function deleteProduct() {
    let productId = document.getElementById("productId").value;

    if (!productId) {
        console.log("Debe proporcionar un ID de producto");
        return;
    }

    const response = await fetch(`${apiUrl}/${productId}`, {
        method: 'DELETE',
    });

    if (response.ok) {
        console.log("Producto eliminado correctamente");
    } else {
        console.log("Error al eliminar el producto");
    }
}
