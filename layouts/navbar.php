<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kuete tezempa evarice">
    <title> TT.Future-school 1.0 | ISTEC</title>
        <!-- liens Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <!-- liens bootstrap -->
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">


<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">

<!-- Bootstrap core CSS -->
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="navbar-top.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/offcanvas-navbar/">


    <style>
            a{
            text-decoration: none;
        }
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }

          .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
          }

          .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
          }

          .bi {
            vertical-align: -.125em;
            fill: currentColor;
          }

          .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
          }

          .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
          }
          .nav-scroller nav a:hover{
            display: block;
            background-color: rgb(25, 10, 25);
        color: white;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <!-- mot de bienvenue  -->

    <section id="accuiel" class="probootstrap-section probootstrap-section-colored " style="background:#f4a105;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left section-heading probootstrap-animate">
                        <h2>Bienvenue</h2>
                    </div>
                </div>
            </div>
        </section>
    
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark " aria-label="Main navigation">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">TT.Future-School</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../frontend/index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../formation_content/specialitées.php">Nos Filières</a>
            </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Sujets Ancien</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../All-sujets/sujets_2020_2021.php">sujets 2020</a></li>
                <li><a class="dropdown-item" href="../All-sujets/sujets_2021_2022.php">sujets 2021</a></li>
                <li><a class="dropdown-item" href="../All-sujets/sujets_2022_2023.php">sujets 2022</a></li>
                <li><a class="dropdown-item" href="../All-sujets/sujets_2023_2024.php">sujets 2015</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-flex">
            <button class="btn btn-light nav-link text-decoration-none" type="submit"><a  href="../All-programme/programme1.php">Programme de Formation</a></button>
          </form>
        </div>
      </div>
    </nav>
 
    <!-- developpement navbar 2 -->
    <div class="nav-scroller bg-body shadow-sm">
      <nav class="nav" aria-label="Secondary navigation">
        <!-- <a class="nav-link active" aria-current="page" href="../pages/Témoignages.php">Témoignages </a> -->
        <!-- <a class="nav-link" href="#">
          Toute l'actualité
          <span class="badge text-bg-light rounded-pill align-text-bottom">27</span>
        </a> -->
        <a class="nav-link" href="../pages_nav2/formations.php">parcourir Nos Formations</a>
        <a class="nav-link" href="../pages_nav2/cycles.php">Nos cycles</a>
        <a class="nav-link" href="../pages_nav2/effectifs.php">Effectif</a>
        <a class="nav-link" href="../pages_nav2/resultats.php">Resultat</a>
        <a class="nav-link" href="../pages_nav2/performances.php">performance</a>
        <a class="nav-link" href="../pages_nav2/nos_campus.php">Nos campus</a>
        <a class="nav-link" href="../pages_nav2/enseignants.php"></a>
      </nav>
    </div>