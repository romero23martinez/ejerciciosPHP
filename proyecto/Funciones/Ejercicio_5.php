<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #4CAF50;
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 80%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Generador de Contraseña</h2>
    <form method="POST">
        
        <input type="text" id="passwordField" value="<?php echo contraseña() ?>" readonly>
        <br>
        
        <button type="submit" name="generate">Generar Contraseña</button>
   
</div>

<?php
/*Escribe una función que genere una contraseña aleatoria.
 Longitud entre 8 y 12 caracteres, al menos un carácter entre "@#$%&-"
*/



function contraseña(){

    $pass = "";
    $cadena = "abcdefghijklmnopqrstuvwxyz@#$%&-0123456789";
    
    $bucle = rand(8,12);

    for ($i = 1; $i<=$bucle; $i++){

        $n = rand(0, strlen($cadena) -1);
        $pass .=$cadena[$n];
    }     
    return $pass;
    
}


//echo contraseña();


/*
  function genera_password():string {
        $password="";
        $longitud=rand(8,12);//genero la longitud
        $caracteres_especiales="@#$%&-";
        $numeros="0123459789";
        $letras="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

        //aádo un numero y un caracter especial
        $password.=$caracteres_especiales[rand(0,strlen($caracteres_especiales)-1)];
        $password.=$numeros[rand(0,strlen($numeros)-1)];
        //completo con letras
        for($c=strlen($password);$c<$longitud;$c++){
            $password.=$letras[rand(0,strlen($letras)-1)];
        }

        //ahora mezclo la cadena
        
         $password=str_shuffle($password);
         //https://www.php.net/manual/en/function.str-shuffle.php

        return $password;

    }//fin de la funcion

    //Ejemplo de uso genero 10 contraseñas
    for ($c=0;$c<10;$c++){
        echo genera_password()."<br>";

    }
*/

?>
</body>
</html>