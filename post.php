<?php

include('conexion.php');
$con = Conexion();

$sql = "SELECT * FROM publicacion ORDER BY Numero DESC";

$publi = mysqli_query($con,$sql);

$publicaciones = [];

if ($publi && mysqli_num_rows($publi) > 0) {
    while($fila = mysqli_fetch_assoc($publi)) {
        $publicaciones[] = $fila;
    }
} else {
    header("Location: index.php");
}

?>
