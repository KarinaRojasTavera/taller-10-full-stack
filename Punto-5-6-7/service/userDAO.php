<?php
  include "connection.php";

  function getAllUsers (){
    return mysqli_query(CONNECTION, "SELECT * FROM usuarios");
   } 
  
  //print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));para comprobar que la conexion esta bien

  function getUserByIdNumber($idNumber){
    return  mysqli_query(CONNECTION, "SELECT * FROM usuarios WHERE cedula = $idNumber"); } 

   
?>
