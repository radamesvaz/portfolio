<?php  

// Llamando a los campos
$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$telefono = $_POST['Telefono'];
$mensaje = $_POST['Asunto'];

$cabeceras = 'From:'.$correo. "\r\n" .
    'Reply-To:'.$correo. "\r\n" .
    'X-Mailer: PHP/' . phpversion();


// Datos para el correo
$destinatario = "ventas@cytii.com";
$asunto = "Contacto Pagina web Cytii";

$carta = "Nombre y Apellido: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Asunto: $mensaje";

// Enviando Mensaje
$sentMail = @mail($destinatario, $asunto, $carta, $cabeceras);

    if($sentMail) //Muestro mensajes segun se envio con exito o si fallo
    {       
$alert = "Gracias tus datos han sido recibidos";
echo "<script>";
echo "if(confirm('$alert'));";  
echo "window.location = 'http://cytii.com/';";
echo "</script>";
    }else{
 $alert = "Tus datos,  no se han recibibido vuelve a intertarlo";
echo "<script>";
echo "if(confirm('$alert'));";  
echo "window.location = 'http://cytii.com/';";
echo "</script>";
    }


?>