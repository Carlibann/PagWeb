<?php
session_start();
if(!isset($_SESSION['correo'])){
    //echo"no existe session";
    header("location:registrate.php");
}else{
     //echo  $_SESSION['nombre'] ; 
     
}    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>HOME</title>
</head>
<body>
    <div>
        <header>
            <nav>
                <ul>

                    <li><a><?php echo $_SESSION['correo'] ?></a></li>
                    <li><a href="cerrar.php" class="salir">Cerra sesion </a></li>
                    
                </ul>
            </nav>
        </header>
    </div>
    
    <br>
    <br>

    <?php echo '<img class="center" style="width:460px; height:300px; margin:0 auto; text-align:center;" src='.$_SESSION['foto'].'>'?>

   


    
</body>
</html>