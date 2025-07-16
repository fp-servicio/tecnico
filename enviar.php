<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $consulta = htmlspecialchars($_POST['consulta']);

    $to = "freddypino@hotmail.com";
    $subject = "Consulta de Servicio Técnico";
    $message = "Nombre: $nombre\nCorreo: $email\nConsulta: $consulta";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Consulta enviada con éxito.";
    } else {
        echo "Error al enviar la consulta.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
