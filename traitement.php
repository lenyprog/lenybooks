<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $livre = $_POST["livre"];
    $format = $_POST["format"];
    $contact = $_POST["contact"];

    // Écrire les données dans un fichier texte
    $data = "Nom: $nom\nLivre Désiré: $livre\nFormat Désiré: $format\nAdresse e-mail ou Numéro de téléphone: $contact\n\n";
    file_put_contents("demandes.txt", $data, FILE_APPEND);

    echo "Demande enregistrée avec succès !";
} else {
    echo "Une erreur s'est produite lors de la soumission du formulaire.";
}
?>
A





