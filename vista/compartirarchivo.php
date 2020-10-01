<?php


include_once("estructura/cabecera.php");

//include_once("estructura/menu.php");
?>

<form  id="compartirarchivo" name="compartirarchivo" method="POST" data-toggle="validator">
<table>

<tr>
<td><label for="nombre">Nombre</label>
<input class="form-control" id="nombre" name="nombre" type=text placeholder=1234.png value="1234.png" required></td>
</tr>

<tr>
<td><label for="diascompatido">Cantidad de dias en que se comparte</label>
<input class="form-control" id="diascompartido" name="diascompartido" type=number ></td>
</tr>

<tr>
<td><label for="descargas">Cantidad de descargas permitidas</label> 
<input class="form-control" id="descargas" name="descargas" type=number required></td>
</tr>


<tr>
<td><label for="usuario">Usuario</label>
<select name="usuario">
<option>Administrador
<option>Visitante
<option>FLOR
</select></td>
</tr>

<tr>

<td><br>
<input type="checkbox" id="imagen" value="first_checkbox"> Proteger</td>
</tr>

<tr>
<td><label for="clave">Contraseña</label>
<input type="password" id="clave" name="clave"></td>
</tr>


<tr>

<td><input id="btn_hash"  name="btn_hash" type="submit" value="Generar Hash">
<br>
<label for="link">Link a compartir</label>
<br>
<input type="password" id="link" name="link" placeholder="link a compartir"></td>
</tr>
<tr>

<td><br><input id="btn_compartir"  name="btn_compartir" type="submit" value="Compartir"></td>
</tr>

</table>



</form>


</div>





<?php

include_once("estructura/pie.php");
?>