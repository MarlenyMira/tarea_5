<?php include('./templates/secret_header.php'); ?>

<!---------------------------------------------------------------------------------------------!-->
<div class="i-name">
    <h3>
        Crear Salones
    </h3>
</div>
<div class="values">
    <form class="frm_crear_s" method="POST" action="../conexion/usuario.php" enctype="multipart/form-data">
        <h2> Nombre del Salón: </h2>
        <input type="text" name="nombre_salon" value="" placeholder="Nombre del Salón" required><br><br>
        <h2> Ubicación: </h2>
        <input type="text" name="ubicacion" value="" placeholder="ubicacion" required><br><br>
        <h2> Sede: </h2>
        <select name="sede">
            <option>Seleccionar</option>
            <option>Guatemala</option>
            <option>Antigua Guatemala</option>
        </select><br><br>

        <button type="submit" value="crear_salon" name="crear_salon">Crear Salón</button><br>
    </form>
    <br>
    <br>
   
</div>

<?php include('./templates/admin_footer.php'); ?>