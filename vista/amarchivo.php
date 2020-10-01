<?php


include_once("estructura/cabecera.php");
//include_once("estructura/menu.php");
?>

<form  id="amarchivo" name="amarchivo" method="POST" data-toggle="validator">
<table>

<tr>
<td>Nombre</td>
<td><input class="form-control" id="nombre" name="nombre" type=text placeholder=1234.png value="1234.png" required></td>
</tr>

<tr>
<td>Descripcion</td>
<td><input class="form-control" id="descripcion" name="descripcion" type=text required></td>
</tr>

<tr>
<td><br>Usuario</td>
<td><br><select>
<option>Administrador
<option>Visitante
<option>FLOR
</select></td>
</tr>

<tr>
<td>Tipo de Archivo</td>
<td><br>
<input type="checkbox" id="imagen" value="first_checkbox">  imagen
<br><input type="checkbox" id="zip" value="first_checkbox">  .zip
<br><input type="checkbox" id="doc" value="first_checkbox">  .doc
<br><input type="checkbox" id="pdf" value="first_checkbox">  .pdf
<br><input type="checkbox" id="xls" value="first_checkbox">  .xls</td>
</tr>

<tr>
<td><br>Clave de Archivo</td>
<td><br><input type="password" id="clave" name="clave"></td>
</tr>

<tr>

<td><br><input id="btn_amarchivo"  name="btn_amarchivo" type="submit" value="Continuar"></td>
</tr>

</table>



</form>






</div>


<?php

include_once("estructura/pie.php");
?>