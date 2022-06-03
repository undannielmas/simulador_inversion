<?php
$inversion = $_POST['inversion'];
$inversion_formato_ingles = number_format($inversion);
$plazo = $_POST['plazo'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$suma="";
$a = $_POST['inversion'];
$b = $_POST['plazo'];

$aanual = $_POST['inversion'];
$banual = $_POST['plazo'];

if($a > 499999 && $b ==18){
    $suma = 12 + 1;
}elseif($a > 499999 && $b ==24){
    $suma = 13 + 1;
}

if($a > 999999 && $b ==18){
    $suma = 13 + 1;
}elseif($a > 999999 && $b ==24){
    $suma = 14 + 1;
}

if($a > 1999999 && $b ==18){
    $suma = 14 + 1;
}elseif($a > 1999999 && $b ==24){
    $suma = 15 + 1;
}

if($a > 9999999 && $b ==18){
    $suma = 15 + 1;
}

//conversion al finalizar la inversion

if($aanual > 499999 && $banual ==18){
    $suma_anual = 14 + 1;
}elseif($aanual > 499999 && $banual ==24){
    $suma_anual = 15 + 1;
}

if($aanual > 999999 && $banual ==18){
    $suma_anual = 15 + 1;
}elseif($aanual > 999999 && $banual ==24){
    $suma_anual = 16 + 1;
}

if($aanual > 1999999 && $banual ==18){
    $suma_anual = 16 + 1;
}elseif($aanual > 1999999 && $banual ==24){
    $suma_anual = 17 + 1;
}

if($aanual > 9999999 && $banual ==18){
    $suma_anual = 17 + 1;
}elseif($aanual > 9999999 && $banual ==24){
    $suma_anual = 17 + 1;
}

// conversion por mes

if($a > 499999 && $b ==18){
    $numero = $a * .195 /15;
    $numero_formato_ingles = number_format($numero);
}

if($a > 499999 && $b ==24){
    $numero = $a * .28 /21;
    $numero_formato_ingles = number_format($numero);
}

if($a > 999999 && $b ==18){
    $numero = $a * .21 /15;
    $numero_formato_ingles = number_format($numero);
}

if($a > 999999 && $b ==24){
    $numero = $a * .30 /21;
    $numero_formato_ingles = number_format($numero);
}

if($a > 1999999 && $b ==18){
    $numero = $a * .225 /15;
    $numero_formato_ingles = number_format($numero);
}

if($a > 1999999 && $b ==24){
    $numero = $a * .32 /21;
    $numero_formato_ingles = number_format($numero);
}

if($a > 9999999 && $b ==18){
    $numero = $a * .24 /15;
    $numero_formato_ingles = number_format($numero);
}

// Conversion al final

if($a > 499999 && $b ==18){
    $retornofinal = $a * .22;
    $retornofinal_formato_ingles = number_format($retornofinal);
}

if($a > 499999 && $b ==24){
    $retornofinal = $a * .32;
    $retornofinal_formato_ingles = number_format($retornofinal);
}

if($a > 999999 && $b ==18){
    $retornofinal = $a * .24;
    $retornofinal_formato_ingles = number_format($retornofinal);
}

if($a > 999999 && $b ==24){
    $retornofinal = $a * .34;
    $retornofinal_formato_ingles = number_format($retornofinal);
}

if($a > 1999999 && $b ==18){
    $retornofinal = $a * .225;
    $retornofinal_formato_ingles = number_format($retornofinal);
}

if($a > 1999999 && $b ==24){
    $retornofinal = $a * .36;
    $retornofinal_formato_ingles = number_format($retornofinal);
}

if($a > 9999999 && $b ==18){
    $retornofinal = $a * .27;
    $retornofinal_formato_ingles = number_format($retornofinal);
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'undannielmas10@gmail.com';                     //SMTP username
    $mail->Password   = 'Alondra123';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('undannielmas10@gmail.com', 'Daniel Morales');
    $mail->addAddress($correo , $nombre);     //Add a recipient
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Simualdor de "Anexo A", Tamayo Capitl ';
    $mail->Body    = '<h1>Nueva propuesta en Simulador</h1><p>Se ha detectado una visita al simulador, aqui te dejamos los datos que se dejaron registrados</p>'.'<p>Nombre del Inversionista:</p>'.$nombre
    .'<p>Numero de telefono:'." ".$telefono.'</p>'.'<p>Ciudad:'.' '.$ciudad.'<p>Monto que desea Invertir:'.' '. $inversion_formato_ingles.' pesos</p>'.'<p> Plazo Seleccionado:'." ".$plazo.' Meses'.'<p>'.'<p>Monto por mes:'.' '.$numero_formato_ingles.' Por mes</p>'.
    '<p> Monto al finalizar la inversion:'.' '.$retornofinal_formato_ingles.' Al finalizar la inversion</p>'.'<p>Se recomienda ponerse en contacto con la persona para validar la infórmacion</p>'.'<p>Que pases buen dia!</p>';

    $mail->send();
    echo '';
} catch (Exception $e) {
    echo "";
}

ob_start();
$plantilla= ob_get_clean();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Simulador de Inversiónes</title>
</head>

<nav class="navbar">
    <!-- LOGO -->
    <div class="logo"><a href="https://tamayocapital.com/"><img src="assets/tamayo-capital.png" alt="" width="196px"
                height="66px" class="d-inline-block align-text-top"></a></div>
    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
        <!-- USING CHECKBOX HACK -->
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <!-- NAVIGATION MENUS -->
        <div class="menu">
            <li><a href="https://tamayocapital.com/nosotros/">NOSOTROS</a></li>
            <li><a href="https://tamayocapital.com/quiero-invertir/">PARTICIPA COMO DESAROLLADOR</a></li>
            <li><a href="https://tamayocapital.com/blog/">BLOG</a></li>
            <li><a href="https://tamayocapital.com/tcare/">BOLSA DE TRABAJO</a></li>
        </div>
    </ul>
</nav>

<body>
    <div class="mensaje">
        <h1>Mensaje Enviado</h1>
        <p style="padding-top:20px;">Se han enviado con exito tus datos, en breve recibiras una llamada de alguno de
            nuestros asesores<br> para brindarte mas información</p>
    </div>
    <div style="padding-bottom:70px;">
        <div class="row">
            <div class="col-sm-6 btn-sim">
                <button class="btn-gral">Regresar al Simulador</button>
            </div>
            <div class="col-sm-6 btn-salir">
                <button class="btn-gral">Salir</button>
            </div>
        </div>
    </div>
    <footer style="background:#101010; padding:30px; color: #ffffff;">
    ©2022 Tamayo Capital
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="motorsimulador.js"></script>
</body>

</html>