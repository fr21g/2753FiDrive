<?php


include_once("estructura/cabecera.php");
//include_once("estructura/menu.php");
?>

<form  id="eliminararchivocompartido" name="eliminararchivocompartido" method="POST" data-toggle="validator">
<table>

<tr>
<td><label for="nombre">Nombre</label>
<input class="form-control" id="nombre" name="nombre" type=text placeholder=1234.png value="1234.png" required></td>
</tr>
<tr>
<td><label for="vecescompartido">Cantidad de veces compartido</label>
<input class="form-control" id="vecescompartido" name="vecescompartido" type=text value="001" required></td>
</tr>
<tr><td><br>
<textarea name="textarea" rows="10" cols="30">Ingrese el motivo por el cual desea dejar de compartir el archivo</textarea>
</td></tr>


<tr>
<td><label for="usuario">Usuario</label>
<select name="usuario">
<option>Administrador
<option>Visitante
<option>FLOR
</select></td>
</tr>

<td><br><input id="btn_nocompartir"  name="btn_nocompartir" type="submit" value="Dejar de Compartir"></td>
</tr>

</table>
</form>

</div>





<?php

include_once("estructura/pie.php");
?>