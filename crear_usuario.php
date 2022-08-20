<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Autenticación de dos factores</title>
</head>
<!---------------------------------------------------------------------------------------------!-->
<div class="padre">
<div class="login">
    <h3>
        Crear Usuario
    </h3>
    <form class="frm_index" method="POST" action="./conexion/usuario.php" enctype="multipart/form-data">
        <img src="../assets/images/OIP.png" alt="">
      
            <h2> Nombre de Usuario: </h2>
            <input type="text" name="nombre_usuario" value="" placeholder="Nombre de Usuario" required><br>
      
            <h2>Nombre y Apellidos: </h2>
            <input type="text" name="nombre" value="" placeholder="Nombre" required><br>
       
            <h2>Telefono: </h2>
            <input type="text" name="telefono" value="" placeholder="Telefono" required><br>
        
            <h2>Dpi: </h2>
            <input type="text" name="dpi" value="" placeholder="No. de Dpi" required><br>
        
        <h2>Contraseña: </h2>
        <input type="password" name="contraseña" value="" placeholder="Contraseña" required><br>
       
        <h2>Confirmación de contraseña: </h2>
        <input type="password" name="confirmacion" value="" placeholder="Confirmación de Contraseña" required><br><br>
       
        <h2>Pregunta de seguridad - ¿Lugar de nacimiento? </h2>
        <input type="password" name="seguridad" value="" placeholder="¨Pregunta de Seguridad" required><br><br>
       
        <button type="submit" value="Registrar" name="registro">Registrar</button><br><br>

        <button type="submit" onclick="window.location='index.php'">Inicio</button>

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