<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once './PHPMailer/PHPMailer.php';
$params = $_POST;
if (!empty($params)) {
$adjunto = $_FILES['files'];
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
$objmail->AddAddress('recruitment@davycollege.edu.pe', 'COLEGIO DAVY COLLEGE');
//$objmail->AddCC('axelmol2018@gmail.com', 'EJEMPLO');
$objmail->Subject = 'ENVÍANOS TU CV';
$objmail->Body = '
            <h4><b>INFORMACIÓN</b></h4>
            <p><b>Nombres : </b>' . $params['nombre'] . '</p>
            <p><b>Apellidos : </b>' . $params['correo'] . '</p>
            <p><b>Celular : </b>' . $params['celular'] . '</p>
            <p><b>Postula a : </b>' . $params['cargo'] . '</p>';
$cont = 0;
foreach ($adjunto['tmp_name'] as $file_name) {
    $objmail->AddAttachment($file_name, $adjunto['name'][$cont]);
    $cont++;
}

if ($objmail->Send()) {

    echo "SE ENVIO LA CONSULTA CORRECTAMENTE";
} else {
    echo 'OCURRIÓ UN ERROR, NO SE PUDO PROCESAR EL ENVÍO';
}
}