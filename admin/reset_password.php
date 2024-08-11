<?php
ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 587);


// Obtener el correo electrónico del destinatario
$email_destino = 'arez153@gmail.com';

// Establecer el asunto y el cuerpo del correo electrónico
$asunto = 'Asunto del Correo';
$cuerpo = 'Este es el contenido del correo electrónico. Puedes agregar cualquier información adicional aquí.';

// Establecer el remitente y los encabezados del correo electrónico
$remitente = 'From: arez153@gmail.com';

// Intentar enviar el correo electrónico
if (mail($email_destino, $asunto, $cuerpo, $remitente)) {
    echo 'El correo electrónico se ha enviado correctamente.';
} else {
    echo 'Error al enviar el correo electrónico.';
}
?>
