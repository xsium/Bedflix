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
    <header id="app">
        <?php include('./view/header.php');?>
    </header>
    <!-- header end --------  -->

    <!-- section : html  + js -->
    <section class="d-flex justify-content-center">
    <div>
    <?php if(empty($_SESSION["user"])) { ?>
        <h2>Connexion</h2>
        <form class="monform" action="/Bedflix/connexion" method="POST">
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" size="30" required>
            <br>
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            <br>
            <button type="submit">Se connecter</button>
        </form>
        <?php } else{ ?>
          <h2>Déconnexion</h2>
          <form id="returnBTN" action="./deco" method="POST">
          <button type="submit" name="deco" class="btn-secondary" value="1">
            Se déconnecter
          </button>
        </form>
        <?php } ?>
    </div>
    </section>

    <!-- section end -------- -->

    <!-- footer :  -->
    <footer>
        <?php include('./view/footer.php');?>
    </footer>
    <!-- footer :  -->
    <script type="module" src="./zenquote.js"></script>
  </body>
</html>