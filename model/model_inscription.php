<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupérer les données du formulaire
    $nom = htmlspecialchars(strip_tags($_POST['nom']));
    $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT, array("cost" => 12));

    // Gestion du fichier de photo de profil
    $photo_profil = $_FILES['photo_profil'];
    $upload_dir = "uploads/";
    $photo_path = $upload_dir . basename($photo_profil['name']);
    move_uploaded_file($photo_profil['tmp_name'], $photo_path);

    // Insertion dans la base de données
    $stmt = $db->prepare("
        INSERT INTO UTILISATEURS (nom_utilisateur, prenom_utilisateur, email_utilisateur, pseudo_utilisateur, mot_de_passe_utilisateur, photo_profil_utilisateur, id_role)
        VALUES (:nom, :prenom, :email, :pseudo, :mot_de_passe, :photo_profil , 3)
    ");
    $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
        ':pseudo' => $pseudo,
        ':mot_de_passe' => $mot_de_passe,
        ':photo_profil' => $photo_path
    ]);

    echo "Inscription réussie !";
}
?>