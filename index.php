<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/Logo_Fafnir_icon.png">
  <title>Fafnir | Index</title>
  <?php require "phpimports/stylesheetimport.php" ?>
</head>

<body>

  <?php $pageinv = "../eng/en-index.php" ?>

  <div class="bg-light">
    <?php include "phpimports/nav.php"; ?>
  </div>
  
  <div class="text-center" id="prez">
    <br>
    
    <br>
    <h1>Qui suis-je ?</h1>
    <br>
    <div class="text-center">
      <img src="img/Heiko_C.jpg" alt="photo de Heiko Carlier" class="img-thumbnail img-fluid" id="photomoi">
    </div>
    <br>
    <div class="text-center container-fluid">
      <p>
        Heiko Carlier aka Fafnir, né en 2000 et passionné d'informatique et de cybersécurité,
        actuellement étudiant en première année à Guardia Cybersecurity School.
      </p>
      <br>
      <p>
        Pour un peu plus de détails voici mon CV en français :
      </p>

      <a href="pdf/CV-fr_2023_Heiko_CARLIER.pdf" target="_blank" rel="noopener noreferrer">Curricullum Vitae</a>

    </div>
    <br>
    <div class="container">
      <div id="carouselContent" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active text-center p-4" data-bs-interval="5000">
            <figure>
              <blockquote class="blockquote">
                <p>"It takes 20 years to build a reputation and few minutes of cyber-incident to ruin it."</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                Stephane Nappo
              </figcaption>
            </figure>
          </div>
          <div class="carousel-item text-center p-4" data-bs-interval="5000">
            <figure>
              <blockquote class="blockquote">
                <p>"If you spend more on coffee than on IT security, you will be hacked. What’s more, you deserve to be hacked."</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                Richard Clarke
              </figcaption>
            </figure>
          </div>
          <div class="carousel-item text-center p-4" data-bs-interval="5000">
            <figure>
              <blockquote class="blockquote">
                <p>"No technology that’s connected to the Internet is unhackable."</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                Abhijit Naskar
              </figcaption>
            </figure>
          </div>
          <div class="carousel-item text-center p-4" data-bs-interval="5000">
            <figure>
              <blockquote class="blockquote">
                <p>"With great power comes great responsibility"</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                Uncle Ben
              </figcaption>
            </figure>
          </div>
          <div class="carousel-item text-center p-4" data-bs-interval="5000">
            <figure>
              <blockquote class="blockquote">
                <p>"I'll be back"</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                Terminator
              </figcaption>
            </figure>
          </div>
          <div class="carousel-item text-center p-4" data-bs-interval="5000">
            <figure>
              <blockquote class="blockquote">
                <p>"'Tis but a scratch."</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                Black Knight
              </figcaption>
            </figure>
          </div>
          <div class="carousel-item text-center p-4" data-bs-interval="5000">
            <figure>
              <blockquote class="blockquote">
                <p>"I used to be an adventurer like you, then I took an arrow in the knee"</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                Whiterun guard
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>

    <img src="img/divider.png" alt="diviseur" class="img-fluid">
    <br>
    <h3 class="text-align" id="projects">Mes Projets</h3>
    <br>
    <div class="container-fluid">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>

        </div>

        <div class="carousel-inner">

          <div class="carousel-item active">
            <a href="html/py_chaos.php" target="_blank" rel="noopener noreferrer">
              <img src="img/pychaos.png" class="d-block w-100 opacity-75" alt="Py_Chaos Logo">
            </a>
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-white">Py_Chaos</h5>
              <p class="text-white">Side Project sur la beauté de la génération aléatoire</p>
            </div>
          </div>

          <div class="carousel-item">
            <a href="html/html_css_web_js.php" target="_blank" rel="noopener noreferrer">
              <img src="img/proj.png" class="d-block w-100" alt="projet HTML, CSS, WEB JS, PHP et SQL">
            </a>
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-dark">JEU</h5>
              <p class="text-dark">MON JEU PYTHON</p>
            </div>
          </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
    </div>

    <img src="img/divider.png" alt="diviseur" class="img-fluid">

    <div class="text-center row container-fluid">

      <h3 class="col-12" id="compet">Compétences</h3>

      <h4 class="col-12">Langues :</h4>

      <div class="col-6 offset-3">
        <div class="row align-items-start">
          <div class="col-12 col-md-3">
            <img src="img/FR_Flag_smol.png" alt="drapeau FR" class="img-fluid">
            <p>Langue maternelle</p>
          </div>
          <div class="col-12 col-md-3">
            <img src="img/UK_Flag_smol.png" alt="drapeau R.U." class="img-fluid">
            <p>B2/C1</p>
          </div>
          <div class="col-12 col-md-3">
            <img src="img/SK_Flag_smol.png" alt="drapeau Corée du Sud" class="img-fluid">
            <p>A2</p>
          </div>
          <div class="col-12 col-md-3">
            <img src="img/Germany_Flag_smol.png" alt="drapeau Allemagne" class="img-fluid">
            <p>A2</p>
          </div>
        </div>
      </div>

      <h4 class="col-12">Informatique :</h4>

      <div class="col-6 offset-3">
        <div class="row align-items-start">
          <div class="col-12 col-md-2 offset-md-1">
            <img src="img/python_logo_smol.png" alt="Logo Python" class="img-fluid">
            <p>Niveau avancé</p>
          </div>
          <div class="col-12 col-md-2">
            <img src="img/HTML_logo_smol.png" alt="Logo HTML" class="img-fluid">
            <p>Niveau avancé</p>
          </div>
          <div class="col-12 col-md-2">
            <img src="img/CSS_logo_smol.png" alt="Logo CSS" class="img-fluid">
            <p>Niveau avancé</p>
          </div>
          <div class="col-12 col-md-2">
            <img src="img/JS_logo_smol.png" alt="Logo JS" class="img-fluid">
            <p>Niveau intermédiaire</p>
          </div>
          <div class="col-12 col-md-2">
            <img src="img/Csharp_logo_smol.png" alt="Logo C#" class="img-fluid">
            <p>Niveau intermédiaire</p>
          </div>
        </div>
      </div>

      <h4 class="col-12">Divers :</h4>

      <div class="col-6 offset-3">
        <div class="row align-items-start">
          <div class="col-12 col-md-4">
            <img src="img/OSINT_smol.png" alt="OSINT" class="img-fluid">
            <p>Niveau avancé</p>
          </div>
          <div class="col-12 col-md-4">
            <img src="img/GIMP.png" alt="Logo GIMP" class="img-fluid">
            <p>Niveau avancé</p>
          </div>
          <div class="col-12 col-md-4">
            <img src="img/KaliLinux_Logo_icon.png" alt="Logo Kali" class="img-fluid">
            <p>Niveau intermédiaire</p>
          </div>
        </div>
      </div>


    </div>





  </div>

  <?php include "phpimports/footer.php"; ?>

  <?php include "phpimports/script.php"; ?>
</body>

</html>
