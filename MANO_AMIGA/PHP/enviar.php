<?php

//Llamando a los campos

    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

//Datos para el correo

    $destinatario = "saidhgc01@gmail.com"; //A donde se enviara el correo
    $asunto = "Contacto de nuestra web";

    $carta = "De: $nombre \n";
    $carta .= "Correo del usuario: $correo \n";
    $carta .= "Telefono: $telefono \n";
    $carta .= "Mensaje: $mensaje";

// Enviando mensaje

    if (mail($destinatario, $asunto, $carta)) {
        header('Location: ../HTML/contactanos.html');
        echo '<script type="text/javascript">alert("FUNCIONO");</script>';
    }else{
        echo '<script type="text/javascript">alert("NO FUNCIONO");</script>';
    }

?>