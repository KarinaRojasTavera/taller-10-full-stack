<?php include "./controller/calculationController.php" ?>

<form method="post">
<h2>Mostrar el Resultado de la Operación</h2>
<div class="form__row">
  <div>
    <label for="primer-numero">
      Ingresar primer número
    </label>
    <input 
    id="primer-numero"
    type="text"
    name="first_number"
    placeholder="1"
  >
  </div>
  <div>
    <label for="segundo-numero">
      Ingresar segundo número
    </label>
    <input 
    id="segundo-numero"
    type="text"
    name="second_number"
    placeholder="2"
  >
  </div>
  <div>
    <label for="  operacion-ejecutar">
      Operacion a ejecutar
    </label>
    <select 
      id="operacion-ejecutar"
      name="operacion_ejecutar"
    >
      <option value="sum">Suma</option>
      <option value="res">Resta</option>
      <option value="mul">Multiplicación</option>
      <option value="div">División</option>      
    </select>          
  </div>
</div>
<button>Calcular</button>
</form>