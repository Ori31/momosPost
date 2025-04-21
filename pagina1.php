<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "styles/style.pagina1.css">
    <title>Pagina de inicio</title>
</head>
<body>
    <?php session_start();  ?>
    <?php  include('post.php'); ?>
    <?php $usuario = $_SESSION['usuario']; ?>
    
    <h1>Bienvenido a la pagina de inicio <br> <?php echo $usuario; ?></h1>
    



    <hr>
    <form action="insertPost.php" method="post" enctype="multipart/form-data">
        <texto1>Titulo de la publicación</texto1>
        <br>
        <input type="text" placeholder="Titulo" name="Titulo" required>
        <br> <br> <br>
        <texto1>Texto de la publicacion</texto1>
        <br>
        <input type="text" placeholder="Texto" name="Texto" id="Texto">
        <br> <br>
        <texto1>Subir imagen (opcional)</texto1>
        <br> <br>
        <input type="file" name="imagen" accept="image/*">
        <br><br>
        <button type="submit">Subir publicación</button>
    </form>
    
    <br>
    
    <div id="publicaciones">
        <?php if(!empty($publicaciones)): ?>
            <?php foreach($publicaciones as $pub): ?>
                <div class="publicacion" style="margin: 20px 0; padding: 15px; border: 1px solid #ccc;">
                    <h3><?php echo htmlspecialchars($pub['usuario']); ?></h3>
                    <h4><?php echo htmlspecialchars($pub['Titulo']); ?></h4>
                    <p><?php echo nl2br(htmlspecialchars($pub['Texto'])); ?></p>
                    <?php if(!empty($pub['imagen'])): ?>
                    <img src="<?php echo htmlspecialchars($pub['imagen']); ?>" 
                         style="max-width: 500px; height: auto; margin-top: 10px;">
                <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay publicaciones aún</p>
        <?php endif; ?>
    </div>

</body>
</html>