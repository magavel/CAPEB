<!DOCTYPE HTML>
<html>

<head>
    <title>CAPEB</title>
    <meta property="og:title" content="CAPEB" />
    <meta property="og:url" content="http://www.capeb.com" />
    <meta property="og:description"
          content="La CAPEB national vous informe du lancement de sa nouvelle application sur capeb.fr.
          A téléchargez sur app store ou play store.
          Votre CAPEB" />
    <meta property="og:image" content="img/logo_capeb.png" />
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/<?= $_GET['bg']? $_GET['bg']: "mon_site" ?>.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style type="text/css">
        [class*="col"] { margin-bottom: 20px; }
        img { width: 100%; }
    </style>
</head>



<body>
<div class="container-fluid">
    <div class="page-header">

    <section class="row">
        <div class="row align-items-center">
            <div class="gauche col-lg-6">
                <div class="logo">
                    <img src="img/logo_capeb.png">
                </div>
                <div class="zoneTexte">
                    <p>Pour votre iphone ou android, la CAPEB est  plus proche de
                        vous à présent: actualité, formations,  boite à outils, notification, etc...   </p>
                </div>
                <div class="row">
                    <div class="liens col-lg-5">
                        <img src="img/badge_android.png" alt="">
                    </div>
                    <div class="liens col-lg-5 ">
                        <img src="img/badge_apple.png" alt="">
                    </div>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="screen">
                    <img src="img/capeb_app_screen.png" alt="">
                </div>

            </div>

        </div>

    </section>
</div>
    <section class=" formulaire row justify-content-md-center">
        <div class="col-lg-12 text-center">

                            Besoin d'une présentation rapide par mail? Avec plaisir,
            saississez votre adresse email et vous recevrez un très joli email


        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="nom@example.com" aria-label="Email" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-dark"  type="button" id="button-addon2">Recevoir la présentation</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="social blanc row justify-content-md-center">
        <div class="align-self-center mr-3">
            <a href="#"> <i class="fab fa-twitter "></i> </a>/
            <a href="#"><i class="fab fa-facebook-f"></i></a>/
            <a href="#"><i class="fas fa-envelope"></i></a>/
            <a href="#"> <i class="fas fa-rss"></i></a>
        </div>

    </section>


    <div class="copyright row justify-content-md-center">
        <div class="align-self-center">
            MIW &copy 2018
        </div>

    </div>

    <div class="foo row justify-content-md-center">
        <div class="align-self-center">
            Envie d'un stage? www.websenso.com <br>
            Il fallait que je la glisse!!!!
        </div>

    </div>




</div>
</body>
</html>