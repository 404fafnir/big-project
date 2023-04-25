<nav class="navbar sticky-top navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">
      <img class="img-fluid" width="100" height="50" src="../img/Logo_Fafnir.png" alt="Logo Fafnir">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="#prez">Présentation</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu bg-light">
            <li><a class="dropdown-item text-dark" href="../html/py_chaos.php">Py_Chaos</a></li>
            <li><a class="dropdown-item text-dark" href="../html/avis.php">Avis</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="row" id="darklight">
      
      <i class="bi bi-brightness-high col-3" id="sun"></i>
      <div class="form-check form-switch col-3 offset-1" id="btnswitch">
        <input role="switch" type="checkbox" class="form-check-input" id="darkSwitch"/>
      </div>
      <i class="bi bi-moon col-3" id="moon"></i>
    
    </div>
  </div>
</nav>
