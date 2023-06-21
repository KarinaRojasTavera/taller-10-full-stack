<?php include "./controller/calculationController.php" ?>

<form method="post">
<h2>Calculadora de Entradas</h2>
<div class="form__row">
  <div>
    <label for="person-number">
      Número de presonas
    </label>
    <input 
    id="person-number"
    type="text"
    name="number_person"
    placeholder="5"
  >
  </div>
  <div>
    <label for="membership-type">
      Tipo de Afiliación
    </label>
    <select 
      id="membership-type"
      name="membership_type"
    >
      <option value="A">Afiliación A</option>
      <option value="B">Afiliación B</option>
      <option value="C">Afiliación C</option>
      <option value="D">Afiliación D</option>
      <option value="E">Afiliación E</option>
      <option value="F">Afiliación F</option>
    </select>          
  </div>
</div>
<button>Calcular</button>
</form>