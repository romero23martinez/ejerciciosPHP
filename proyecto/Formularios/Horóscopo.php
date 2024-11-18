<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = htmlspecialchars($_POST['fecha']);

    


    function edad($x) {

        $signos = ['Rata','Búfalo','Tigre','Conejo','Dragón','Serpiente','Caballo','Cabra','Mono','Gallo','Perro','Cerdo'];



        $fechaNacimiento = new DateTime($x);
        
        $hoy = new DateTime();

        
        $resultado = $hoy->diff($fechaNacimiento);
        $edad = $resultado->y;
        

        $iteracion = ($fechaNacimiento->format('Y') - 1924) % 12;
        $signo = $signos[$iteracion];
        
        echo "<h1>Horóscopo Chino</h1>";
        echo "<p>Edad: $edad años</p>";
        echo "<p>Signo zodiacal chino: $signo</p>";

        echo "<img src='imagenes/$signo.jpg' alt='$signo' style='width:200px;height:200px;'>";

        $cualidades = [
            'Rata' => 'Inteligente, ambicioso, carismático.',
            'Búfalo' => 'Paciente, confiable, fuerte.',
            'Tigre' => 'Valiente, entusiasta, dinámico.',
            'Conejo' => 'Amable, sensible, diplomático.',
            'Dragón' => 'Poderoso, carismático, confiado.',
            'Serpiente' => 'Sabio, intuitivo, misterioso.',
            'Caballo' => 'Enérgico, trabajador, optimista.',
            'Cabra' => 'Creativo, sensible, tranquilo.',
            'Mono' => 'Ingenioso, versátil, juguetón.',
            'Gallo' => 'Organizado, meticuloso, trabajador.',
            'Perro' => 'Leal, honesto, protector.',
            'Cerdo' => 'Generoso, amable, sincero.'
        ];

        echo "<p>Cualidades: {$cualidades[$signo]}</p>";

    }

    edad($fecha);


}
?>
