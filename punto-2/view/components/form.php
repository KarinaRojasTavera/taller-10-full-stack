<?php include "./controller/calculationController.php" ?>

<form method="post">
<h2>Nombre de Usuario y Edad</h2>
<div class="form__row">
  <div>
    <label for="nombre-usuario">
      Nombre Usuario
    </label>
    <input 
    id= "nombre-usuario"
    type="text"
    name="nombre_usuario"
    placeholder="Pepito"
   >
  </div>  
</div>
<div>
<div>
    <label for="edad-usuario">
      Edad Usuario
    </label>
    <input 
      id= "edad-usuario"
      type="text"
      name="edad_usuario"
      placeholder="25"
     >    
  </div>
</div>
<button>Enviar</button>
</form>

