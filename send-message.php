<?php
// Configuration
$to_email = "contact@rdh-design.com"; // Remplacez par votre email
$subject_prefix = "Nouveau message depuis le portfolio - ";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer et nettoyer les données
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = strip_tags(trim($_POST["message"]));

    // Validation
    $errors = [];

    if (empty($name)) {
        $errors[] = "Le nom est requis.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Une adresse email valide est requise.";
    }

    if (empty($subject)) {
        $errors[] = "Le sujet est requis.";
    }

    if (empty($message)) {
        $errors[] = "Le message est requis.";
    }

    // Si pas d'erreurs, envoyer l'email
    if (empty($errors)) {

        // Construire le contenu de l'email
        $email_subject = $subject_prefix . $subject;
        $email_body = "Vous avez reçu un nouveau message depuis votre portfolio.\n\n";
        $email_body .= "Nom: $name\n";
        $email_body .= "Email: $email\n\n";
        $email_body .= "Sujet: $subject\n\n";
        $email_body .= "Message:\n$message\n";

        // Headers
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Envoyer l'email
        if (mail($to_email, $email_subject, $email_body, $headers)) {
            // Rediriger avec succès
            header("Location: index.php?success=1#contact");
            exit;
        } else {
            $errors[] = "Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.";
        }
    }

    // Si des erreurs, rediriger avec les erreurs
    if (!empty($errors)) {
        $error_message = implode("<br>", $errors);
        header("Location: index.php?error=" . urlencode($error_message) . "#contact");
        exit;
    }
} else {
    // Si accès direct au fichier, rediriger vers l'accueil
    header("Location: index.php");
    exit;
}
