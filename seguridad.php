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
<?php
include('./conexion/conec.php');

$id = $_REQUEST['id'];
$query = "SELECT * FROM usuario WHERE id_usuario='$id'";
$resul = $conexion->query($query);
$row = $resul->fetch_assoc();
?>
<div class="padre">
<div class="login">
    <h3>Pregunta de Seguridad</h3>
            <form class="frm_index" method="POST" action="./conexion/login.php" enctype="multipart/form-data">
            <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" readonly><br><br>
            <input type="password" name="seguridad" value="" placeholder="¿Lugar de Nacimiento?" required><br><br>
            <button type="submit" name="continuar">Continuar</button><br><br>
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