<?php
$conexion = mysqli_connect("localhost", "root", "", "bd_pruebas");

$nombre = $_POST["nombre"]
$apellidos = $_POST["apellidos"]
$telefono = $_POST["telefono"]
$correo = $_POST["email"]
$fecha = $_POST["fecha"]

if($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["nombre"]);
    $nombre_final = date("m-d-y"). "-". date("H-i-s"). "-" $nombre_base;
    $ruta = "archivos/" . $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
    if($subirarchivo){
        $insertarSQL = "INSERT INTO informes(nombre, apellidos, fecha, archivo) VALUES ('$nombre'), '$apellidos', '$fecha', '$ruta')";
        $resultado = mysqli_query($conexion, $insertarSQL);
        if($resultado) {
            echo "<script>alert('Se ha enviado su informe correctamente'); window.location='formulario.html'>/script>";
        } else {
            print("Errormessage: %s\n", mysql_error($conexion))
        }
    }
} else {
    echo "Error al subir archivo";
}}
