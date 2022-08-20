<?php include('./templates/secret_header.php'); ?>

<!---------------------------------------------------------------------------------------------!-->
<div class="i-name">
    <h3>
        Crear Eventos
    </h3>
</div>
<div class="values">
    <form class="frm_crear_s" method="POST" action="../conexion/usuario.php" enctype="multipart/form-data">
        <h2> Nombre del Evento: </h2>
        <input type="text" name="nombre_evento" value="" placeholder="Nombre del Evento" required><br><br>
        <h2> Precio de Evento por Persona: </h2>
        <input type="text" name="precio" value="" placeholder="00.00" required><br><br><br>
        <button type="submit" value="crear_evento" name="crear_evento">Crear Evento</button><br>
    </form>
    <br><br>


</div>

<?php include('./templates/admin_footer.php'); ?>