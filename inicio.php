<?php include('./templates/secret_header.php'); ?>

<!---------------------------------------------------------------------------------------------!-->
<div class="i-name">
    <h3>
        Bienvenido
    </h3>
</div>
<?php
include('./conexion/conec.php');

$id = $_REQUEST['id'];
$query = "SELECT * FROM usuario WHERE id_usuario='$id'";
$resul = $conexion->query($query);
$row = $resul->fetch_assoc();
?>
<div class="values">
    <!----------inicio-------------------------------------------------------------->

    <div class="frm_crear_s">
        <div class="frm_inicio">
        <h3> <?php echo $row['nombre']; ?></h3>
        <h2> <?php echo $row['fecha_sesion']; ?></h2>
        </div>
    </div>




</div>

<?php include('./templates/admin_footer.php'); ?>