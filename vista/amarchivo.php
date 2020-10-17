<?php


include_once("estructura/cabecera.php");
//include_once("estructura/menu.php");
?>

<form class="needs-validation" id="amarchivo" name="amarchivo" action="accion_subirArchivo.php" enctype="multipart/form-data" method="POST" data-toggle="validator" novalidate>
<div class="row">


</div>
<div class="col-md-6 mb-3">
<input class="form-control" id="subir" name="subir" type="file" onchange="checkbox()" required>
</div>

<div class="col-md-6 mb-3">
<label name="nombre" class="control-label">Nombre</label>
<input class="form-control" id="nombre" name="nombre" type="text" placeholder=1234.png  required>
</div>

<div class="col-md-6 mb-3" >
<label name="descripcion" class="control-label">Descripcion </label>
<br><textarea name="decripcion" class="form-control">Esta es una descripción genérica, si lo necesita la puede cambiar.</textarea>

</div>

<div class="col-md-4 mb-3">
<label name="usuario" class="control-label">Usuario</label>
<select>
<option>Administrador
<option>Visitante
<option>FLOR
</select>
</div>


<div class="col-md-5 mb-3">
<label name="tipo" class="control-label">Tipo de Archivo</label>
<br>
<input type="checkbox" id="imagen" value="first_checkbox" >  imagen
<br><input type="checkbox" id="zip" value="first_checkbox">  .zip
<br><input type="checkbox" id="doc" value="first_checkbox">  .doc
<br><input type="checkbox" id="pdf" value="first_checkbox">  .pdf
<br><input type="checkbox" id="xls" value="first_checkbox">  .xls
</div>
<div class="col-md-5 mb-3">
<label name="pass" class="control-label">Modificar Archivo?</label>

<input type="checkbox" id="pass" value="first_checkbox" onchange="verpass()">  
</div>
<div id="verclave" class="col-md-6 mb-3" style="display:none;">
<input type="password" id="clave" name="clave" onchange="verificarPass()" >
</div>
<div class="col-md-6 mb-3"></div>
<div class="col-md-6 mb-3">
<input id="btn_amarchivo"  name="btn_amarchivo" type="submit" value="Continuar">
</div>




</div>
</form>






</div>


<?php

include_once("estructura/pie.php");
?>