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
    <!-- header : ----------- -->
    <header id="app">
        <?php include('./view/header.php');?>
    </header>
    <!-- header end --------  -->

    <!-- section : html  + js -->
    <section>
      <h2>Bienvenue sur le Bedflix de Tyrfing</h2>
      <div class="container maxWH d-flex flex-nowrap meme">
        <img class="maxWH" src="" alt="" id="meme" />
        <h3 id="title"></h3>
        <button id="memeBTN">Get Meme</button>
      </div>
    </section>
    <!-- section end -------- -->
    <form id="returnBTN" action="./deco" method="POST">
          <button type="submit" name="deco" class="btn-secondary" value="1">
            Se déconnecter
          </button>
    </form>

    <!-- footer :  -->
    <footer>
        <?php include('./view/footer.php');?>
    </footer>
    <!-- footer :  -->

    <script type="module" src="./meme.js"></script>
    <script type="module" src="./zenquote.js"></script>
  </body>
</html>