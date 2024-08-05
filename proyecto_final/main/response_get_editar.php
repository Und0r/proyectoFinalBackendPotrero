<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$imagen = $_GET['imagen'];
$descripcion = $_GET['descripcion'];
$stock = $_GET['stock'];
$precio = $_GET['precio'];
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto");

$query = "UPDATE productos SET `nombre_producto` = '$nombre', `imagen_producto` = '$imagen', `descripcion_producto` = '$descripcion', `stock_producto` = '$stock', `precio_producto` = '$precio' WHERE `productos`.`id_producto` = $id;";
$resultado = mysqli_query($conexion, $query);

if($resultado !== false){
    echo '<!DOCTYPE html>
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
  <p>Salio todo bien!</p>
  <p>Aguarde un momento...</p>
      </div>
  
    
</body>
</html>';
    header("Refresh: 5; URL=alta_editar.php");
    exit;
}
else{
    echo '<!DOCTYPE html>
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
  <p style="error">Hubo un error</p>
      </div>

    
</body>
</html>'; 
}
mysqli_close($conexion);


?>