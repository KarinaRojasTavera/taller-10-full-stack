

<form 
 action="./view/pages/user-info-page.php" 
 method="get"
>
<h2>Registro de usuario</h2>
<div class="form__row">
  <div>
    <label for="first-name">
      Nombres del usuario:
    </label>
    <input 
     id= "first-name"
     type="text"
     name="first_name"
     placeholder="Pepito"
    >
  </div>
  <div>
    <label for="last-name">
      Apellidos del usuario:
    </label>
    <input 
      id= "last-name"
      type="text"
      name="last_name"
      placeholder="Perez"
    >    
  </div>
</div>
<button>Registrar</button>
</form>