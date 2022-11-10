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
    <link rel="stylesheet" href="registrate.css">
    
    <title>Login|Isl</title>
</head>
<body>

    <form action="insertar.php" method="Post">
        <br>
        <br>
    <label>Nombre</label>
    <input type="text" name="nombre" id="" required>

    <label>Apellido</label>
    <input type="text" name="apellido" id="" required>

    <label>Correo</label>
    <input type="email" name="correo" id="" required>

    <label>Telefono</label>
    <!-- <input type="text" name="telefono" id="" required> -->
    <input type="text" name="telefono" ondrop="return false;" onpaste="return false;"onkeypress="return event.charCode>=48 && event.charCode<=57" required/>
    <label>Clave</label>
    <input type="password" name="clave" id="" required>

    <label>Cargar Foto</label>
    <input type="file" name="foto" id=""  required>

    <input type="submit" name="registrar" value="registrarse" class="btn">
    <a href="login.php" class="cuenta">Ya tengo cuenta.</a>

    </form>
</body>

</html>