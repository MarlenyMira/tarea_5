<?php
include('conexion.php');
session_start();

if (isset($_POST['registro'])) {
   date_default_timezone_set('America/Guatemala');
    $fecha_actual=date("Y-m-d H:i:s"); 

    $nombre_usuario = $_POST['nombre_usuario'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $dpi = $_POST['dpi'];
    $password = $_POST['contraseña'];
    $password_confir = $_POST['confirmacion'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $seguridad = $_POST['seguridad'];
    $seguridad_hash = password_hash($seguridad,PASSWORD_BCRYPT);
   
    $query = $connection->prepare("SELECT * FROM usuario WHERE nombre_usuario=:nombre_usuario");
    $query->bindParam("nombre_usuario", $nombre_usuario, PDO::PARAM_STR);
    $query->execute();

    if (empty($_POST['nombre_usuario']) && empty($_POST['nombre']) && empty($_POST['telefono']) && empty($_POST['dpi']) 
    && empty($_POST['contraseña']) && empty($_POST['confirmacion']) && empty($_POST['seguridad'])) {
      
        echo '<script>
              alert("Debe de llenar todos los campos"); 
              window.location = "../crear_usuario.php"
              </script>';

    } elseif ($query->rowCount() > 0) {
       
        echo '<script>
              alert("Usuario Existente"); 
              window.location = "../crear_usuario.php"
              </script>';

    } elseif ($_POST['contraseña'] == $_POST['confirmacion'])  {

        if ($query->rowCount() == 0) {

            $query = $connection->prepare("INSERT INTO usuario (nombre_usuario, nombre, telefono, dpi, password, seguridad, fecha_sesion) 
            VALUES ('$nombre_usuario', '$nombre', '$telefono','$dpi', '$password_hash', '$seguridad_hash', '$fecha_actual')");

            $result = $query->execute();

            if ($result) {
               
                echo '<script>
                      alert("Registro Existoso"); 
                      window.location = "../index.php"
                      </script>';

            } else {
              
                echo '<script>
                      alert("Error al registrar"); 
                      window.location = "../crear_usuario.php"
                      </script>';
            }
      
     }else{
        echo '<script>
              alert("Contraseñas no coinciden"); 
              window.location = "../crear_usuario.php"
              </script>';
    }
}
}
    
?>