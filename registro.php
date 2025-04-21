<?php
include('conexion.php');

$con = Conexion();

$sql = "SELECT * FROM login";

$query = mysqli_query($con,$sql);

?>

<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" href = "styles/style_registro.css">

</head>

<body>
<img src="images/oyamano-voice.png" height="30%">
<form action="insertUser.php" method="post">
  <h2>Ingrese el nombre de usuario</h2>
  <br> <br>
    <input type="text" placeholder="Usuario" name="usuario">
    <br>
    <h2>Ingrese la Contraseña</h2>
    <input type="text" placeholder="Contraseña" name="contraseña">
    <br>
    <br>
    <button type="submit">Registrarse</button>

  </form>

<form action = "index.php" method ="post">
<button type="submit" id="boton2">Regresar</button>
</form>

</body>

</html>