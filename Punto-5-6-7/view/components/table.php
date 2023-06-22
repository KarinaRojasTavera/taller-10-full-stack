<?php include"./controller/userController.php";
?>  

<div class="table__container">
<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cedula</th>
  </tr>
  <?php 
    $users = getUsers ();
    foreach ($users as $user) { 
  ?>
  <tr>
    <td><?php echo $user->getId (); ?> </td>
    <td><?php echo $user->getName (); ?> </td>
    <td><?php echo $user->getLastName(); ?></td>
    <td><?php echo $user->getIdNumber(); ?></td>
  </tr>
  <?php } ?>

  //encaso de necesitar manipular la info de un usuario 
  //se crearia un metodo set,esta linea no se va a usar para 
  //para el ejercicio

    public function setId ($idP){
    $this->id = $idP;
  }

 
</table>
</div>



