<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail où vous souhaitez recevoir le message
    $destinataire = "elijah.tallur@proton.me";

    // Sujet du message
    $sujet = "Nouveau message de $nom";

    // Construire le corps du message
    $corps_message = "Nom: $nom\n";
    $corps_message .= "Email: $email\n";
    $corps_message .= "Message:\n$message";

    // En-têtes du message
    $entetes = "De: $email\r\n";

    // Envoyer l'e-mail
    if (mail($destinataire, $sujet, $corps_message, $entetes)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>
