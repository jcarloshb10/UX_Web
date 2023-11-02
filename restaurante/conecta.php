<?php
    function conectar(){
        $bd = mysqli_connect("localhost","root","","restaurante");
        if (!$bd){
            echo "<h3>Error de conexión</h3>Base de datos restaurante no diponible";
            return NULL;
        }
        else{
            return $bd;
        }
    }
?>