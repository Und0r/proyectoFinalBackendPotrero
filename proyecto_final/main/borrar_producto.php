<?php
$id = $_GET['id_producto'];

echo '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href=".././css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Editar producto</title>
</head>
<body style="background-image: url(.././img/nordwood-themes-ivP3TYdLvw0-unsplash.jpg)">
<header class="header">
        <img src=".././img/logo-removebg-preview.png" alt="Logo">
        <h2>Gestion de productos</h2>
        <div class="nav">
        <a href="index.php">Productos</a>
        <a href="usuario.html">Admin</a>
        </div>
      </header>
  <div id="divNuevoProducto">
  <p>Esta seguro de eliminar este producto?</p>
    <button class="submit"><a href="response_get_borrar.php?id_producto='.$id.'">Confirmar</a></button>
    <button class="submit"><a href="./alta_editar.php">Cancelar</a></button>
      </div>
    
</body>
</html>';

?>
