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
        <h2>Connexion</h2>
        <form class="monform" action="connexion.php" method="POST">
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" size="30" required>
            <br>
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            <br>
            <button type="submit">Se connecter</button>
        </form>
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
        header("Location: index.php");
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
