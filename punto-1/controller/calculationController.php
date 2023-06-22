<?php
$resultado = 0;
$firstNumber = 0;
$secondNumber = 0;
$operationType = "";
$mensaje = "";

if(isset($_POST["first_number"]) &&
   isset($_POST["second_number"]) &&
   isset($_POST["operacion_ejecutar"])) {

    $firstNumber = floatval($_POST["first_number"]);
    $secondNumber = floatval($_POST["second_number"]);
    $operationType = $_POST["operacion_ejecutar"]; 
    
    switch($operationType) {

        case "SUMA":
            $resultado = $firstNumber + $secondNumber;
            break;
                        
        case "RESTA":
            $resultado = $firstNumber - $secondNumber;
            break;
    
        case "MULTIPLICACION":
            $resultado = $firstNumber * $secondNumber;
            break;
    
        case "DIVISION":
            $resultado = $firstNumber / $secondNumber;
            break;
            default:
      $mensaje= "Opción inválida.";
        break;      

        }
}
?>

  



