<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Piqués de pêche</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <?php
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

            $mail = new PHPMailer;
            $mail->isSMTP(); 
            $mail->SMTPDebug = 0; // 0 = rien - 1 = message du client - 2 = messages du client et du server
            $mail->Host = "smtp.orange.fr"; // server smtp
            $mail->Port = 587; // TLS only
            $mail->SMTPSecure = 'tls'; 
            $mail->SMTPAuth = true;
            $mail->Username = 'elijah.tallur@orange.fr'; // email
            $mail->Password = ''; // mot de passe (que sur l'hébergeur)
            $mail->setFrom('elijah.tallur@orange.fr', 'Peche SA'); // De : Email et Nom
            $mail->AltBody = 'Bonjour,<br>votre Candidature a bien ete prise en compte.<br><br> Cordialement,<br>Peche SA'; // Si le html n'est pas supporté par celui qui reçoit
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
                $mail->addAddress($email, $nom); // À : email et nom
                $mail->Subject = 'Votre candidature';
                $mail->msgHTML('Bonjour,<br>votre candidature a bien ete prise en compte.<br><br> Cordialement,<br>Peche SA');  //corps du mail en html

                // Envoyer l'e-mail
                if(!$mail->send()){
                    echo "Erreur : " . $mail->ErrorInfo; //en cas d'erreur, l'affiche
                }else{
                    echo "Candidature envoyée ! Vous recevrez une validation par email d'ici moins d'une minute (vraiment)."; 
                }
            }
        ?>
    </body>
</html>