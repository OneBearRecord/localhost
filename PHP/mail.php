<?php

$nombre = $_POST["nombre"]
$apellidos = $_POST["apellidos"]
$telefono = $_POST["telefono"]
$correo = $_POST["email"]
$fecha = $_POST["fecha"]

if($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["nombre"]);
    $nombre_final = date("m-d-y"). "-". date("H-i-s"). "-" $nombre_base;

        if($resultado) {
            echo "<script>alert('Se ha enviado su informe correctamente'); window.location='formulario.html'>/script>";
        } else {
            print("Errormessage: %s\n", mysql_error($conexion))
        }
    }
 else {
    echo "Error al subir archivo";
}


//datos para el correo

$destinatario = "yeidenn1@gmail.com";
$asunto = "contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Apellido: $apellidos \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Correo: $correo \n";
$carta .= "Pago: $_FILES";

//Enviando mensaje

mail($destinatario, $asunto, $carta);

?>