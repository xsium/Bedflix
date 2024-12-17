<?php
    // On inclut notre connecteur à la base de données
    include('./connect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./style.css">
    <title>Bedflix Project</title>
  </head>
  <body>
    <!-- header : see main.js -->
    <header id="app"></header>
    <!-- header end --------  -->

    <!-- section : html  + js -->
    <section class="d-flex justify-content-center">
        <div>
            <h2>Inscription</h2>
            <form class="monform form" action="inscription.php" method="POST" enctype="multipart/form-data">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" size="30" required>
                <br>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>
                <br>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" required>
                <br>
                <label for="mot_de_passe">Mot de passe :</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
                <br>
                <label for="photo_profil">Photo de profil :</label>
                <input type="file" id="photo_profil" name="photo_profil" required>
                <br>
                <button type="submit">S'inscrire</button>
            </form>
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
        </div>
    </section>
    <!-- section end -------- -->

    <!-- footer : see main.js -->
    <footer></footer>
    <!-- footer : see main.js -->

    <script type="module" src="./main.js"></script>
    <script type="module" src="./footer.js"></script>
    <script type="module" src="./zenquote.js"></script>
  </body>
</html>


