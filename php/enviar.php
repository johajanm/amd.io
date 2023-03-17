<?php
require ("PHPMailer/class.phpmailer.php");
    $destinatario = "designeradmproducer@gmail.com";
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["asunto"];
    $message = $_POST['mensaje'];

    
  $bilsmg ="NUEVO ENVIO DE CORREO/TESTING ENVIO DE CORREO DESDE HOSTING 000WEBHOST".'<br>'.PHP_EOL;
 $bilsmg .="EL USUARIO : ".$nombre .'<br>'.PHP_EOL;
 $bilsmg .="CUYO EMAIL ES : ".$email .'<br>'.PHP_EOL;
 $bilsmg .="INDICO QUE SU ASUNTO ES : ".$subject.'<br>'.PHP_EOL;
 $bilsmg .="NOS DICE QUE : ".$message.'<br>'.PHP_EOL;




$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;// or 465
$mail->IsHTML(true);
$mail->Username = "designeradmproducer@gmail.com";
$mail->Password = "Flakocalle1991#";//estas seguro que ese es el pass?
$mail->SetFrom("designeradmproducer@gmail.com");//agregar correo
$mail->Subject = "Contacto";
$mail->Body = $bilsmg;
$mail->CharSet = 'UTF-8';
$mail->AddAddress("designeradmproducer@gmail.com");//agregar correo    jmartina1@ucentral.edu.co
if(!$mail->Send()) {
  echo ("<script LANGUAGE='JavaScript'>
 window.alert('tu correo no ha sido enviado');		window.location.href='https://designeradm.000webhostapp.com/#';    </script>");
} else {echo ("<script LANGUAGE='JavaScript'>
		window.alert('Pronto nos comunicaremos contigo');		window.location.href='https://designeradm.000webhostapp.com/#';    </script>");
}





?>

