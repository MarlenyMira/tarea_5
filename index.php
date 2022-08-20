<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Autenticación de dos factores</title>
</head>

<body>

<div class="padre">
<div class="login">
    <h3>Iniciar Sesión</h3>
            <form class="frm_index" method="POST" action="./conexion/login.php" enctype="multipart/form-data">
            <input type="text" name="nombre_usuario" value="" placeholder="Nombre de Usuario" required><br><br>
            <input type="password" name="password" value="" placeholder="Contraseña" required><br><br>
            <button type="submit" name="inicio">Ingresar</button><br><br>
            <button type="submit" onclick="window.location='crear_usuario.php'">Registrar</button>
            </form>
</div>
</div>



<script>
    $('#menu-btn').click(function() {
        $('#menu').toggleClass("active");
    })
</script>

</body>
</html>