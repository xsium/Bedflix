document.querySelector("#app").innerHTML = `
      <nav class="navbar navbar-expand-lg d-flex flex-row">
        <div class="container-fluid" id="header1">
          <a class="navbar-brand pc" href="./index.html"
            ><img id="logo" src="./src/winkporing.png" alt="logo"
          /></a>
        </div>
        <div class="container-fluid d-flex flex-column" id="header2">
          <h1>Tyrfing's BedFlix</h1>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon" id="spanheader"></span>
          </button>
          <div
            class="collapse navbar-collapse customnav"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav me-auto mb-2">
              <li class="nav-item">
                <a class="nav-link" href="./index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./film.php">Films</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./serie.php">Séries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./connexion.php">Se connecter</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="./inscription.php">S'inscrire</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
`;