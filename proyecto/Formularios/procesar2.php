<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = htmlspecialchars($_POST['fecha']);


    function edad($x) {
        $fechaNacimiento = new DateTime($x);
        
        $hoy = new DateTime();
        
        $resultado = $hoy->diff($fechaNacimiento);
        

        return $resultado->y;
    }

    $edad = edad($fecha);

    echo "La edad es de $edad años.";




}
?>
