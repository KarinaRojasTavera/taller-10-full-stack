<?php 
  const TICKET_PRICE = 25000;
  $totalPrice = 0;
  $message = "";
  
  if (isset ($_POST ["number_person"]) && 
      isset ($_POST ["membership_type"])) {

     $numberPerson = intval($_POST ["number_person"]);
     $membershipType = $_POST ["membership_type"];
      
     $totalPrice = $numberPerson * TICKET_PRICE;

     switch ($membershipType) {
      case "A":
        $totalPrice = $totalPrice - ($totalPrice * 0.3);
        break;
      case "B":
        $totalPrice = $totalPrice - ($totalPrice * 0.25);
        break;
      case "C":
        $totalPrice = $totalPrice - ($totalPrice * 0.1);
        break;
      case "D":
        $totalPrice = $totalPrice - ($totalPrice * 0.05);
        break;
      default:
      $message = "Usted no tiene menbresia, por lo tanto no tiene descuento";
      }       
     
   }

   
?>



