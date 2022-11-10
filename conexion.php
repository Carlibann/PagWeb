<?php
    
    $server="localhost";
    $username="root";
    $pass="";
    $dbname="webcrackor";

    $conexion=mysqli_connect($server, $username, $pass, $dbname);

    return $conexion;
   /* if ($conexion) {
        # si conecta mostrara conexion exisosa...
        echo "<script>alert('Conexion exitosa')</script>";
        
        #echo "<script>window.alert('Conexion Exitosa..')</script>";
    }
    else{
        # si conecta mostrara conexion Fallida...
        echo "<script>window.alert('Conexion Fallida..')</script>";
    }
    */

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="alert.js"></script>
