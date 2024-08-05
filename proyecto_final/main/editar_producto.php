<?php
$id = $_GET['id_producto'];
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto");

$query = "SELECT * FROM productos WHERE id_producto = $id";
$resultado = mysqli_query($conexion, $query);
$columna = mysqli_fetch_assoc($resultado);
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
  <h3>Editar producto</h3>
    <form class="formNuevoProducto" action="./response_get_editar.php" method="get">

    
      <div class="label oculto">
        <label for="id">Id</label>
          <input id="id" name="id"  type="number" placeholder=" " value="'.$columna["id_producto"].'" readonly/>
          
        </div>
      
      <div class="label">
        <label for="nombre">Producto</label>
          <input id="nombre" name="nombre"  type="text" placeholder=" " value="'.$columna["nombre_producto"].'" />
          
        </div>
        <div class="label">
        <label for="imagen">Imagen</label>
          <input id="imagen" name="imagen"  type="text" value="'.$columna["imagen_producto"].'"  />
          </div>
        
          <div class="label">
            <label for="descripcion">Descripción</label>
            <input id="descripcion" name="descripcion"  type="text" value="'.$columna["descripcion_producto"].'" placeholder=" " />
          </div>

         <div class="label">
            <label for="stock">En stock</label>
            <input id="stock" type="number" name="stock" value='.$columna["stock_producto"].' placeholder=" " />
          </div>
       
          <div class="label">
            <label for="precio">Precio</label>
            <input id="precio" type="text" name="precio" value='.$columna["precio_producto"].' placeholder=" " />
          </div>

         
        
          <div class="buttonForm">
        <button class="submit">Guardar cambios</button>
        <button class="submit"> <a href="./alta_editar.php"> Cancelar</a></button>
      </div>
    </form>
  </div>
    
</body>
</html>';

?>

