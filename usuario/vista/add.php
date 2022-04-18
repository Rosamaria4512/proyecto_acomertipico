<?php
require_once("../../templete/plantillaindex.PHP");
?>

<center><h1> BIENVENIDO! </h1>
</center>
<form action="../controlador/add.php" method="POST">
<div class="formulario">
<label><b> Ingrese los siguentes datos:</b></label><br>
<label> Nombres:</label>
<input type="text" class="form-control" name="nombres"  aria-describedby="emailHelp<br>"><br>
<label> Apellidos:</label>
<input type="text" class="form-control" name="apellidos"  aria-describedby="emailHelp<br>"><br>
<label> Tipo de documento: </label>
<select name="tipo_id"> <br>
    <option value=" ">  </option>
    <option value="CC"> C.C </option>
    <option value="CE"> C.E </option>           
</select ><br><br>
<label> Numero de documento:</label>
<input type="text" class="form-control" name="numero_documento"  aria-describedby="emailHelp<br>"><br>

<label> Direccion residencial:</label>
<input type="text" class="form-control" name="direccion"  aria-describedby="emailHelp<br>"><br>
<label> Telefono:</label>
<input type="num" class="form-control" name="telefono"  aria-describedby="emailHelp<br>"><br>
<label> Celular:</label>
<input type="num" class="form-control" name="celular"  aria-describedby="emailHelp<br>"><br>
<label> Email:</label>
<input type="email" class="form-control" name="email" placeholder="ejemplo@gmail.com" aria-describedby="emailHelp<br>"><br>
<label> contraseña*:</label>
<input type="password" class="form-control" name="password"  aria-describedby="emailHelp<br>"><br>
<label> Rol: </label>
<select name="id_rol"> <br>
    <option value=" ">  </option>
    <option value="1"> comprador </option>
    <option value="3">  vendedor</option>
              
</select ><br><br>
<button type="submit" name= "btn_enviar" class="btn btn-primary">Registrarse</button>
</form>
</div>