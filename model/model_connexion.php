<?php
        
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupérer les données du formulaire
    $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
    $mot_de_passe = htmlspecialchars(strip_tags($_POST['mot_de_passe']));

    // Vérifier les identifiants
    $stmt = $db->prepare("SELECT * FROM UTILISATEURS WHERE pseudo_utilisateur = :pseudo");
    $stmt->execute([':pseudo' => $pseudo]);
    $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!empty($utilisateur)){
      if (password_verify($mot_de_passe, $utilisateur['mot_de_passe_utilisateur'])) {
        $_SESSION['user'] = $utilisateur['pseudo_utilisateur'];
        header("Location: /Bedflix/index");
      } else {
        echo "Pseudo ou mot de passe incorrect.";
        unset($_SESSION['user']);
      }
    } else {
      echo "Pseudo ou mot de passe incorrect.";
      unset($_SESSION['user']);
    }
    
}
?>