<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href=".././css/style.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Productos</title>
</head>
<body style="background-image: url(.././img/nordwood-themes-ivP3TYdLvw0-unsplash.jpg)">
    <header class="header">
        <img src=".././img/logo-removebg-preview.png" alt="Logo">
        <h2>Productos</h2>
        <div class="nav">
        <a href="index.php">Productos</a>
        <a href="usuario.html">Admin</a>
        </div>
      </header>
    <div class="background">
        <div class="container">
          <div class="panel pricing-table">
             
              <?php 
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto");

$query = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $query);

while($unaFila = mysqli_fetch_assoc($resultado)){
    echo '<div class="pricing-plan">
                <img src="'.$unaFila["imagen_producto"].'" alt="" class="pricing-img">
                <h2 class="pricing-header">'.$unaFila["nombre_producto"].'</h2>
                <ul class="pricing-features">
                  <li class="pricing-features-item">'.$unaFila["descripcion_producto"].'</li>
                   <li class="pricing-features-item">En stock: '.$unaFila["stock_producto"].'</li>
                </ul>
                <span class="pricing-price">$'.$unaFila["precio_producto"].'</span>
                <a href="#/" class="pricing-button">Comprar</a>
              </div>';
            }
mysqli_close($conexion);

?>
    
          </div>
        </div>
      </div>
</body>
</html>

            

              
