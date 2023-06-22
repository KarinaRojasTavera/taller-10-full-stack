<?php
$result = 0;

if (isset ($_POST ["first_number"]) && 
    isset ($_POST ["second_number"])) {
      $firstNumber = intval($_POST["first_number"]);
      $secondNumber = intval($_POST["second_number"]);

      $result = $firstNumber + $secondNumber;
}
?>

