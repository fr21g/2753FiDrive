<?php


include_once("estructura/cabecera.php");

//include_once("estructura/menu.php");
?>

<form  id="compartirarchivo" name="compartirarchivo" method="POST" class="needs-validation" data-toggle="validator" novalidate>

<div class="row">

<div class="col-md-7 mb-3" ><label for="nombre">Nombre</label>
<input class="form-control" id="nombre" name="nombre" type=text placeholder=1234.png  required>
</div>

<div class="col-md-7 mb-3"><label for="diascompartido">Cantidad de dias en que se comparte</label>
<input class="form-control" id="diascompartido" name="diascompartido" type=number >
</div>

<div class="col-md-7 mb-3"><label for="descargas">Cantidad de descargas permitidas</label> 
<input class="form-control" id="descargas" name="descargas" type=number ></td>
</div>


<div class="col-md-7 mb-3"><label for="usuario">Usuario</label>
<select name="usuario">
<option>Administrador
<option>Visitante
<option>FLOR
</select></div>



<div class="col-md-7 mb-3">
<input type="checkbox" id="pass" value="first_checkbox"onchange="verpass()"> Proteger</div>

<div class="col-md-7 mb-3" id="verclave" style="display:none;"><label for="clave">Contraseña</label>
<input type="password" id="clave" name="clave"  onchange="verificarPass()"></div>

<div class="col-md-7 mb-3"><input id="btn_hash"  name="btn_hash" type="button" onclick="generarHash()" value="Generar Hash">
<br>
<label for="link">Link a compartir</label>
<br>
<input type="text" id="link" name="link" placeholder="link a compartir" class="col-md-12 mb-3"></div>
<div class="col-md-7 mb-3"><br><input id="btn_compartir"  name="btn_compartir" type="submit" value="Compartir" ></div>

</div>



</form>


</div>





<?php

include_once("estructura/pie.php");
?>