<?php
class control_subirArchivo{

    public function subirArchivo($datos){

        $nombreArchivoImagen=$_FILES["subir"]["name"];

        /*convierto imagen1.jpg    imagen1_OBS.txt*/
        /*$nombreArchivoObservaciones=substr($nombreArchivoImagen,0, strlen($nombreArchivoImagen)-4)."_OBS.txt";*/


        $dir = "../uploads/";

        $error="";
        $todoOK=true;

        /*Primero subamos la imagen*/
        /*Veamos si se pudo subir a la carpeta temporal*/
        if ($_FILES["subir"]["error"] <= 0)
        {
            $todoOK=true;
            $error="";
        }
        else
        {
            $todoOK=false;
            $error= "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        }

 

        //RECIEN ACA PUEDO PROBAR DE COPIAR EL ARCHIVO
        // Intentamos copiar el archivo al servidor.
        if ($todoOK && !copy($_FILES['subir']['tmp_name'], $dir.$nombreArchivoImagen))
        {
            $texto= "ERROR: no se pudo cargar el archivo.";
            $todoOK=false;
        }



        /*Ahora vamos a ver si hay alguna observación, vamos a crear un nuevo archivo
        if ($todoOK && $observaciones!="")
        {
            $fArchivoaCrear=fopen($dir.$nombreArchivoObservaciones, "w");
            fwrite($fArchivoaCrear, $observaciones);
            fclose($fArchivoaCrear);
        }*/

        if ($todoOK){
            $texto="Archivo almacenado correctamente!";
        }else{
            $texto=$error;
        }
        return $texto;

    }

    public function obtenerArchivos()
    {
        $directorio = "../uploads/";
        $archivos = scandir($directorio, 1);
        return $archivos;
    }

   
}