<?php


include_once("estructura/cabecera.php");
include_once("../control/control_subirArchivo.php");
include_once("../configuracion.php");
//include_once("estructura/menu.php");
?>



<?php
$obj = new control_subirArchivo();
$arreglo = $obj->obtenerArchivos();


?>
    <h1 class="h2"> ARCHIVOS ALMACENADOS</h1>
    <div class="row">
        <div class="col-sm-12 mb-3">

            <a class="btn btn-secondary" href="amarchivo.php" role="button">Agregar Archivo?</a>
        </div>

    </div>
    <form  id="ejeArchivos" name="ejeArchivos" method="POST" action="accionEjeArchivos.php">

        <div class="row mb-3">
        <select>
            <?php
            foreach ($arreglo as $archivo)
            {
                if (strlen($archivo)>2 )
                {
                    
                    echo "<option><a alt='$archivo'  href='../uploads/$archivo'>$archivo</a>";
                    
                   
                }
            }

            ?>
            </select>
        </div>
    </form >





<?php

include_once("estructura/pie.php");
?>