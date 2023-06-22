<?php
$mensaje = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener el nombre y la edad ingresados por el usuario

    $nombre = $_POST["nombre_usuario"];
    $edad = $_POST["edad_usuario"];

    // Verificar si la edad es menor a 18

    if ($edad < 18) {
        $mensaje = "Hola, " . $nombre . " No eres mayor de edad . tu edad es: " . $edad;
        
    } else {
        $mensaje = "Hola, " . $nombre . " si eres mayor de edad . tu edad es: " . $edad;
    }
}

?>

