<?php

    include_once ("conexion.php");

    $correo=$_POST['correo'];
    $clave=$_POST['clave'];
    $foto=$_POST['foto'];
    session_start();
    $_SESSION['correo']=$correo;
    $_SESSION['foto']=$foto;
    
    $consulta="SELECT * FROM registrar WHERE correo='$correo' and clave='$clave'";
    $resultado=mysqli_query($conexion, $consulta);
    
    $verificar=mysqli_num_rows($resultado);
    if ($verificar<=1) {
        # code...
        echo "Bienvenido";
        header("location:index.php");
    }
    else{
        echo "Usuario no existe";
        header("location:login.php");
    }


?>