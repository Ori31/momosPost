<?php
include('conexion.php');


$con = Conexion();

$sql= "SELECT * FROM Usuarios";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Gestor de Usuarios</title>


    <link rel="stylesheet" href="styles/style_index.css">
</head>
<body>
    <titulo>Bienvenido a skibidiNoticias y más</titulo>

    <br> <br>
    <img src="images/teto_sticker.png" width="20%" height="20%">
    <br>
    
<form action="inicioUser.php" method="post"> 
    <h3>Nombre de Usuario</h3>
    <input type="text" placeholder="Usuario" name="usuario">
    <h3>Contraseña</h3>
    <input type="text" placeholder="Contraseña" name="contraseña">

    
    <br> <br>
    <button class="BtnIniciarSesion" type="submit">Iniciar Sesion</button>

    </form>

    <br> 
    <button class="BtnRegistrarse" onclick="location.href='registro.php'">Registrarse</button>

    <br> 
    <button class="BtnAdministracion">Administracion</button>


</body>
</html>