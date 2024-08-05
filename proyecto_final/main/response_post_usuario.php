<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href=".././css/style.css">
    <title>LOGIN</title>
</head>
<body style="background-image: url(.././img/nordwood-themes-ivP3TYdLvw0-unsplash.jpg)">
    
    <form class="form" action="./response_post_usuario.php" method="post">
        <div class="title">Bienvenido</div>
        <div class="subtitle">Ingresa tu usuario!</div>
        <div class="input-container ic2">
          <input id="email" class="input" type="text" name="email" placeholder=" " />
          <div class="cut cut-short"></div>
          <label for="email" class="placeholder">Email </label>
        </div>
        <div class="input-container ic2">
          <input id="password" class="input" type="password" name="password" placeholder=" " />
          <div class="cut"></div>
          <label for="password" class="placeholder">Contraseña</label>
        </div>
        <button class="submit">INGRESAR</button>
    </form>
    <?php
$usuarioForm = $_POST["email"];
$passwordForm = $_POST["password"];
if($usuarioForm == "user" & $passwordForm == 1234){
    header("Location: alta_editar.php");
exit;
} else {
    echo '<p class="error">Usuario o contraseña incorrecta</p>';
}
?>

</body>
</html>
