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
	<!-- header :  -----------  -->
    <header id="app">
        <?php include('./view/header.php');?>
    </header>
    <!-- header end --------  -->

	<!-- section : ---------- -->
    <section>
    <div id="chat-container">
        <div id="chat-messages"></div>
        <form id="message-form" method="POST">
            <textarea type="text" id="message-input" placeholder="Écrivez votre message..." required ></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </div>
	</section>
    <!-- section end -------- -->
	
	<!-- footer : -->
    <footer>
        <?php include('./view/footer.php');?>
    </footer>
    <!-- footer end -->

    <script type="module" src="./main.js"></script>
    <script type="module" src="./zenquote.js"></script>
    <script src="./script.js"></script>

</body>
</html>