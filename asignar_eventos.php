<?php include('./templates/secret_header.php'); ?>

<!---------------------------------------------------------------------------------------------!-->
<div class="i-name">
    <h3>
        Asignar Eventos
    </h3>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href="style.css" rel="stylesheet">
<div class="values">

    <form class="frm_crear_e" method="POST" action="../conexion/usuario.php" enctype="multipart/form-data">
        <div class="alinear">
            <h2>Nombre de la Reserva:</h2>
            <input type="text" name="nombre_asignacion" value="" placeholder="Nombre de la Reserva" required>
        </div>
        <div class="alinear">
            <h2>Sede: </h2>
            <select name="sede" id="sede">
                <option value="">Seleccionar</option>
            </select><br><br>
        </div>

        <div class="alinear">
            <h2>Salón: </h2>
            <select name="salon" id="salon">
                <option value="0">Seleccionar</option>
            </select><br><br>
        </div>

        <div class="alinear">
            <h2> Evento: </h2>
            <select name="evento" id=evento>
                <option value="0">Seleccionar</option>
            </select><br><br>
        </div>

        <div class="alinear">
            <h2> Duración de Evento: </h2>
            <select style="appearance:none" name="duracion" id="duracion">
            </select><br><br>
        </div>

        <div class="alinear">
            <h2> Precio del Evento: </h2>
            <select style="appearance:none" name="precio" id="precio">
                <option value=""></option>
            </select><br><br>
        </div>

        <div class="alinear">
            <h2> Instructor: </h2>
            <select name="instructor">
                <option>Seleccionar</option>
                <option>Jose Lopez</option>
                <option>Manuel Hernandez</option>
            </select><br><br>
        </div>

        <div class="alinear">
            <h2> Fecha: </h2>
            <input type="date" name="fecha" value="" placeholder="yyyy-mm-dd" required><br><br>
        </div>

        <div class="alinear">
            <h2> Hora: </h2>
            <input type="text" name="hora_inicial" value="" placeholder="hh.mm" required><br><br>
        </div>

        <div class="alinear">
            <h2> Participantes: </h2>
            <input type="text" name="participantes" value="" placeholder="Número de Participantes" required><br><br>
        </div><br>

        <div class="btn_ca">
            <button type="submit" value="crear_asignacion" name="crear_asignacion">Crear Asignación</button><br>
        </div>
    </form>
    
</div>

<?php include('./templates/admin_footer.php'); ?>