<?php  
$resulado= "";
$fechaNacimiento = 0;
$fechaActual = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtener la fecha de nacimiento dada por el usuario
    $fechaNacimiento = $_POST['fecha_nacimiento'];

    // Obtener la fecha actual
    $fechaActual = date('Y-m-d');

    // Calcular la edad

    $diff = date_diff(date_create($fechaNacimiento), date_create($fechaActual));
    $edad = $diff->y;

    // Realizar la comparación y mostrar el resultado

    if ($edad <18) {
      $resulado =  "Su edad es " . $edad . ", por tanto: No es mayor de edad";
    } else {
      $resulado = "Su edad es " . $edad . ", por tanto: Es mayor de edad";
    }
}
?>



