<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.orange.fr"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'elijah.tallur@orange.fr'; // email
$mail->Password = ''; // password
$mail->setFrom('elijah.tallur@orange.fr', 'Peche SA'); // From email and name
 //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'Bonjour,<br>votre Candidature a bien ete prise en compte.<br><br> Cordialement,<br>Peche SA'; // If html emails is not supported by the receiver, show this body
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $mail->addAddress($email, $nom); // to email and name
    $mail->Subject = 'Votre candidature';
    $mail->msgHTML('Bonjour,<br>votre Candidature a bien ete prise en compte.<br><br> Cordialement,<br>Peche SA'); 

    // Envoyer l'e-mail
    if(!$mail->send()){
        echo "Erreur :" . $mail->ErrorInfo;
    }else{
        echo "script type='text/javascript'>
        parent.postMessage('Candidature envoyée ! Vous recevrez une validation par email d'ici moins d'une minute (vraiment).', '*');
      </script>";
    }
}
?>
