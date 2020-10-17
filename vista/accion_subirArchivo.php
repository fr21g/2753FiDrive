<?php

include_once("estructura/cabecera.php");
include_once("../control/control_subirArchivo.php");
include_once("../configuracion.php");
?>
     <?php
      $datos = data_submitted();
      $obj = new control_subirArchivo();
      $mensaje = $obj->subirArchivo($datos);

    ?>


    <div class="row  mb-3">

        <div class="col-sm-12 ">
            <?php
            if ($mensaje=="")
                echo "<div class='alert alert-success' role='alert'>$mensaje</div>";

            else
                echo "<div class='alert alert-danger' role='alert'>$mensaje</div>";

            ?>
            
        </div>


    </div>


<?php

include_once("estructura/pie.php");
?>