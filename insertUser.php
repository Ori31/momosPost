<?php

include('conexion.php');
$con = Conexion();


$Usuario = $_POST['usuario'];
$Contraseña = $_POST['contraseña'];

$sql = "INSERT INTO login (`Usuario`,`Contraseña`) VALUES ('$Usuario', '$Contraseña')";

$query = mysqli_query($con,$sql);

if($query){
    Header("Location: registro.php");
}

?>