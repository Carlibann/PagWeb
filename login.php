<?php

    include_once("conexion.php");
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="alert.js"></script>
    <!-- FONST DE AWESOME.KIT -->
    <script src="https://kit.fontawesome.com/9e396b4e1a.js" crossorigin="anonymous"></script>
    <!-- FIN DE AWESOME.KIT -->
    <link rel="stylesheet" href="login.css">
    <title>Login|Isl</title>
</head>
<body>

    <form action="validar.php" method="Post">
    <img src="img/R.png" alt="" width="120" height="120" >
    <label ><i class="fa-solid fa-circle-envelope"></i>Correo</label>
    <div><i class="fa-solid fa-circle-envelope"></i></div>
    <input type="email" name="correo" id="">

    <label><i class="fa-solid fa-lock-keyhole"></i>Clave</label>
    <input type="password" name="clave" id="">

    <input type="submit" name="registrar" value="Ingresar" class="btn">

    <a href="registrate.php" class="cuenta" >Crear cuenta</a>

    </form>
</body>

</html>