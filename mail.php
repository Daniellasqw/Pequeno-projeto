
<?php

//Load Composer's autoloader
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

    
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.harmonico.org';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'produtosdelimpeza@harmonico.org';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('produtosdelimpeza@harmonico.org', 'Freela dos Produtos de Limpeza');
    $mail->addAddress('daniella.silqueirozwerneck@gmail.com', 'Daniella');     //Add a recipient
    $mail->addAddress('daniella.silqueiroz@gmail.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
   // brunorodrigotubio@gmail.com
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Novo cadastro no site de Produtos de Limpeza';
    $mail->Body    = 'Um novo e-mail foi cadastrado. O e-mail foi o '.$_POST["email"].'';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   echo 'E-mail foi enviado com sucesso';
} catch (Exception $e) {
    echo "E-mail não foi enviado. Error: {$mail->ErrorInfo}";
}


///////////////////////////////////////////////////////////////


//Create an instance; passing `true` enables exceptions

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.harmonico.org';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'produtosdelimpeza@harmonico.org';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

$email = $_POST["email"];
$mail->setFrom('produtosdelimpeza@harmonico.org', 'Cadastro Finalizado');
$mail->addAddress($email);     //Add a recipient

$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Distribuidora Zeus';
$mail->Body    = 'Olá, Cadastro finalizado com sucesso!<br>
Em breve enviaremos mais novidades!<br><br><br>
<b>Atenciosamente , Zeus</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
echo ('enviado com sucesso');
}
 catch (Exception $e) {
echo "E-mail não foi enviado. Error: {$mail->ErrorInfo}";
}

header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
 //http://produtosdelimpeza.harmonico.org/cadastro_com_sucesso.html

//////////////////////////////////////////aqui é o banco de dados//////////////////////////
  






?>







