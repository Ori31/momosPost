<?php
session_start(); 
include('conexion.php');
$con = Conexion();


$titulo = $_POST['Titulo'];
$texto = $_POST['Texto'];
$usuario = $_SESSION['usuario'];
$imagen_path = '';

// Manejo de la imagen
if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    if(!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    
    $nombreArchivo = basename($_FILES['imagen']['name']);
    $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
    $nombreUnico = uniqid() . '_' . time() . '.' . $extension;
    $targetPath = $uploadDir . $nombreUnico;
    
    // Validar tipo de archivo
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if(in_array(strtolower($extension), $allowedTypes)) {
        if(move_uploaded_file($_FILES['imagen']['tmp_name'], $targetPath)) {
            $imagen_path = mysqli_real_escape_string($con, $targetPath);
        }
    }
}

// Insertar en la base de datos
$sql = "INSERT INTO publicacion (usuario, Titulo, Texto, imagen) 
        VALUES ('$usuario', '$titulo', '$texto', " . ($imagen_path ? "'$imagen_path'" : "NULL") . ")";
        
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: pagina1.php");
}

?>