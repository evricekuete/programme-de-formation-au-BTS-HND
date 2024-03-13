<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Le Guide Ultime | ISTEC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

        <!-- lien de bootstrap -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- liens de  Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
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
    </style>

    
    <!--formulaire de connexion -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center bg-light">
    
  <div class="container-fluid">
    <div class="row" height="10%" style="background:#f4a105; color:white;">
        <strong class="h5">Mon Guide Ultime au BTS | HND</strong>
    </div>
  </div>
  <center>
  <div class="container row py-5 align-items-center">
    <div class="col-3"></div>
    <div class="col-6 align-items-center text-center" >
        <main class="form-signin">
           <form action="traitement.php" method="post">

                <img class="mb-4" src="../images/avataar2.png" alt="Le Guide Ultime" width="30%" height="30%">
                <h1 class="h3 mb-3 fw-normal">S'inscrire en ligne</h1>
                <div class="form-floating mb-2">
                   <input type="text" class="form-control" name="nom" id="nom" placeholder="tamba tchoupe">
                   <label for="nom">Nom d'utilisateur</label>
                </div>
                <div class="form-floating mb-2">
                   <input type="number" class="form-control" name="tel" id="tel" placeholder="Tamba tchoupe">
                   <label for="tel">Telephone</label>
                </div>
                <div class="form-floating mb-2">
                   <input type="email" class="form-control" name="email" id="email" placeholder="Adresse@example.com">
                   <label for="email">Adresse Email</label>
                </div>
                <div class="form-floating mb-2">
                   <input type="password" class="form-control" name="password" id="mot_de_passe" placeholder="Mon_Mot_De_Passe">
                   <label for="mot_de_passe">Mot de passe</label>
                </div>

                <!-- <div class="checkbox mb-3">
                   <label>
                       <input type="checkbox" value="remember-me">Se souvenir de moi
                   </label>
                </div> -->
                <button class="w-100 btn btn-lg btn-success" type="submit">Se Connecter</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p>
            </form>
        </main>
    </div>
  </center>
    <div class="col-3"></div>
  </div>



    
</body>
</html>