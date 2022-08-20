<?php
include('conexion.php');
session_start();

if (isset($_POST['inicio'])) {

    date_default_timezone_set('America/Guatemala');
     $fecha_actual=date("Y-m-d H:i:s"); 
    $nombre_usuario = $_POST['nombre_usuario'];
    $password = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM usuario WHERE nombre_usuario='$nombre_usuario'");
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);
      

    if (!$result) {
        echo '<script>
              alert("Usuario o Contraseña Incorrecto");
              window.location = "../index.php";
              </script>';
        
   } else{
    if (password_verify($password, $result['password'])) {

            $id = urldecode($result['id_usuario']); 
            echo '<script>
              window.location = "../seguridad.php?id='.$id.'"
              </script>';
        
            $query = $connection->prepare("UPDATE usuario SET fecha_sesion='$fecha_actual' WHERE id_usuario='$id'");
            $query->execute();

            } else{
                echo '<script>
                      alert("Usuario"); 
                      window.location = "../seguridad.php"
                      </script>';

            }
        }
    }


    if (isset($_POST['continuar'])) {

        date_default_timezone_set('America/Guatemala');
         $fecha_actual=date("Y-m-d H:i:s"); 
        $nombre = $_POST['nombre'];
        $seguridad = $_POST['seguridad'];
    
        $query = $connection->prepare("SELECT * FROM usuario WHERE nombre='$nombre'");
        $query->execute();
    
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
    
      
    
        if (!$result) {
            echo '<script>
                  alert("Respuesta incorrecta");
                  window.location = "../index.php";
                  </script>';
            
       } else{
        if (password_verify($seguridad, $result['seguridad'])) {
           
            $id = urldecode($result['id_usuario']); 
              echo '<script>
              window.location = "../inicio.php?id='.$id.'"
              </script>';
                $query = $connection->prepare("UPDATE usuario SET fecha_sesion='$fecha_actual' WHERE id_usuario='$id'");
                $query->execute();
    
                } else{
                    echo '<script>
                          alert("Usuario"); 
                          window.location = "./seguridad.php"
                          </script>';
    
                }
            }
        }
?>