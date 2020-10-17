<?php


include_once("estructura/cabecera.php");
//include_once("estructura/menu.php");
?>

<form  id="eliminararchivo" name="eliminararchivo" method="POST" class="needs-validation" data-toggle="validator" novalidate>
<div class="row">

<div class="col-md-7 mb-3" ><label for="nombre">Nombre</label>
<input class="form-control" id="nombre" name="nombre" type=text placeholder=1234.png  required></div>



<div class="col-md-7 mb-3" >
<textarea name="textarea" class="form-control" rows="10" cols="30" required placeholder="Ingrese el motivo por el cual desea eliminar el archivo"></textarea>
</div>




<div class="col-md-7 mb-3" ><label for="usuario">Usuario</label>
<select name="usuario">
<option>Administrador
<option>Visitante
<option>FLOR
</select></div>

<div class="col-md-7 mb-3" ><input id="btn_eliminar"  name="btn_eliminar" type="submit" value="Eliminar"></div>

</div>
</form>
</div>



<?php

include_once("estructura/pie.php");
?>