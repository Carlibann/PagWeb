<?php

    include_once ("conexion.php");
   
   if (isset($_POST['registrar'])){
    # code...
    if (strlen($_POST['nombre'])>= 1 && strlen($_POST['apellido'])>= 1 && strlen($_POST['correo'])>= 1 && strlen($_POST['telefono'])>= 1 && strlen($_POST['clave'])>= 1 && strlen($_POST['foto'])>=1){

        $nombre=trim($_POST['nombre']);
        $apellido=trim($_POST['apellido']);
        $correo=trim($_POST['correo']);
        $telefono=trim($_POST['telefono']);
        $clave=trim($_POST['clave']);
        $foto=trim($_POST['foto']);

        #INSERTAR DATOS EN LA TABLA
        $sql="INSERT INTO registrar(nombre, apellido, correo, telefono, clave, foto)VALUES('$nombre', '$apellido', '$correo', '$telefono', '$clave', '$foto')";
        $resultado=mysqli_query($conexion, $sql);
        
    
    }
    
    if ($resultado <=1){
        #echo "<script>window.alert('conexion fallida');</script>";
        header("location:login.php");
    } else {
        
        header("location:registrate.php");
        #echo "<script>alert('Ups.. Ocurrio un Error')</script>";
    }

   }
   
    
   


?>