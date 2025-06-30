<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once './PHPMailer/PHPMailer.php';

// no toca para nada
$objmail = new PHPMailer();
$objmail->CharSet = 'UTF-8';
$objmail->IsHTML(true);
$objmail->isSMTP();
$objmail->SMTPDebug  = false;
$objmail->SMTPSecure = '';
$objmail->Host = 'correo.cubicol.com.pe';
$objmail->SMTPAuth = false;
$objmail->Port = 25;

// modificar
$objmail->From = 'davyonline@cubicol.com.pe';
$objmail->FromName = 'PAG. WEB';
$objmail->AddAddress('admision@davycollege.edu.pe', 'COLEGIO DAVY COLLEGE');
//$objmail->AddCC('axelmol2018@gmail.com', 'EJEMPLO');
$objmail->Subject = '¿CÓMO PODEMOS AYUDARLE?';
$objmail->Body = '
            <h4><b>INFORMACIÓN</b></h4>
            <p><b>Nombres : </b>' . $_POST['nombres'] . '</p>
            <p><b>Apellidos : </b>' . $_POST['apellidos'] . '</p>
            <p><b>DNI : </b>' . $_POST['dni'] . '</p>
            <p><b>Celular : </b>' . $_POST['celular'] . '</p>
            <p><b>Postula a : </b>' . $_POST['postula'] . '</p>
            <p><b>Consulta : </b>' . $_POST['consulta'] . '</p>';
            
if ($objmail->Send()) {

    echo "SE ENVIO LA CONSULTA CORRECTAMENTE";

} else {
    echo 'OCURRIÓ UN ERROR, NO SE PUDO PROCESAR EL ENVÍO';
}
