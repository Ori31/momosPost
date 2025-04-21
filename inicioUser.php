<?php
session_start(); 
include('conexion.php');
$con = Conexion();

$Usuario = $_POST['usuario'];
$Contraseña = $_POST['contraseña'];

$sql = "SELECT * FROM login WHERE Usuario = '$Usuario' AND Contraseña = '$Contraseña'";

$query = mysqli_query($con,$sql);

if ($query && mysqli_num_rows($query) > 0) {
    $_SESSION['usuario'] = $Usuario; // Guardar en sesión
    Header("Location: pagina1.php");
} else {
    $error = true;
    header("Location: index.php");
}

?>
