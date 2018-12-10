<?php
/**
 * Created by PhpStorm.
 * User: pierr
 * Date: 19/08/2018
 * Time: 10:40
 */

require_once "./lib/PHPMailer-master/PHPMailerAutoload.php";

if (isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['message']))
{
    //Create a new PHPMailer instance
    $mail = new PHPMailer;

//Tell PHPMailer to use SMTP
    $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

//Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
    $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
    //$mail->Username = "carinecura@gmail.com";

//Password to use for SMTP authentication
    //$mail->Password = "bulle2267";

    $mail->Username = "pladenburger67@gmail.com";
    $mail->Password = "pierre123";

//Set who the message is to be sent from
    //$mail->From = "carinecura@gmail.com";


//Set an alternative reply-to address
    //$mail->addReplyTo('replyto@example.com', 'First Last');

    $mail->setFrom($_POST['email']);
    $mail->addReplyTo($_POST['email']);
    $mail->FromName = "Aux temps d'avant";
    $mail->isHTML(true);

//Set who the message is to be sent to
//    $mail->addAddress('carinecura@gmail.com');
    $mail->addAddress('pladenburger67@gmail.com');
//Set the subject line
    $mail->Subject = 'Message';

//Replace the plain text body with one created manually
    $mail->Body = "<div>Informations &eacute;metteur:" . "<br>Nom: " . $_POST['name'] . "<br>Pr&eacute;nom: " . $_POST['firstname'] . "<br>Email: " . $_POST['email']
        . "<br>Message: <br>" . $_POST['message'] . "</div>";
//Attach an image file

//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
}
