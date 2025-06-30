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
$objmail->Subject = 'REGISTRO PARA RECIBIR NOTICIAS REFERENTE A ADMISIÓN Y VACANTES ESCOLARES';
$objmail->Body = '
            <h4><b>INFORMACIÓN</b></h4>
            <p><b>Nombre : </b>' . $_POST['nombres'] . '</p>
            <p><b>Celular : </b>' . $_POST['celular'] . '</p>
            <p><b>Correo : </b>' . $_POST['email'] . '</p>
            <p><b>Nivel : </b>' . $_POST['nivel'] . '</p>';
            
if ($objmail->Send()) {

    echo "SE ENVIO LA CONSULTA CORRECTAMENTE";

} else {
    echo 'OCURRIÓ UN ERROR, NO SE PUDO PROCESAR EL ENVÍO';
}
