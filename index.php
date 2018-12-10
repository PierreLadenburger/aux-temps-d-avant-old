<?php

?>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Chambres d'hôtes Aux temps d'avant à Gundershoffen en Alsace proposant trois chambres: l'alcôve, la grange et la forge. Ancienne maison alsacienne entièrement rénovée.">
    <title>Aux Temps d'Avant</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!--  <link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"> -->




    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">

    <!-- Plugin JavaScript -->

    <!-- Custom scripts for this template -->

    <style>
        #mapservices {
            width: 570px;
            height: 360px;
        }
    </style>

</head>

<body id="body" style="background-color: #d7c9b8; font-family: Didot; font-size: 20px;">
<nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand js-scroll-trigger" href="#apropos"  style="color: #d7c9b8; font-size: 20px;"><i class="fa fa-home"></i> Aux Temps D'Avant</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown" style="cursor: pointer;">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #d7c9b8; background-color: #353942;"><i class="fas fa-bed"></i> Les chambres<span style="color: #d7c9b8;" class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color: #353942; border-color: #353942; font-size: 20px;">
                    <li><a class="nav-link js-scroll-trigger" href="#forge" style="color: #d7c9b8;"> La Forge</a></li>
                    <li><a class="nav-link js-scroll-trigger" href="#grange" style="color: #d7c9b8;"> La Grange</a></li>
                    <li><a class="nav-link js-scroll-trigger" href="#alcove" style="color: #d7c9b8;"> L'Alcôve</a></li>
                    </ul>
                </li>
                <li><a class="nav-link js-scroll-trigger" href="displayBook.php" style="color: #d7c9b8;"><i class="fas fa-book"></i> Livre d'or</a></li>
                <li><a class="nav-link js-scroll-trigger" href="displayRestaurants.php" style="color: #d7c9b8;"><i class="fas fa-map-marker-alt"></i> Restaurants</a></li>
                <li class="dropdown" style="cursor: pointer;">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #d7c9b8; background-color: #353942;"><i class="fas fa-map-marker-alt"></i> Tourisme<span style="color: #d7c9b8;" class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color: #353942; border-color: #353942; font-size: 20px;">
                        <li><a class="nav-link js-scroll-trigger" href="balades.php" style="color: #d7c9b8;"> Balades</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="cites.php" style="color: #d7c9b8;"> Cités</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="musees.php" style="color: #d7c9b8;"> Musées</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="memoires.php" style="color: #d7c9b8;"> Mémoires</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="terroir.php" style="color: #d7c9b8;"> Terroir</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="#alcove" style="color: #d7c9b8;"> Divertissements</a></li>
                    </ul>
                </li>
                <li><a class="nav-link js-scroll-trigger" href="#contact" style="color: #d7c9b8;"><i class="fas fa-phone"></i> Contact</a></li>
                <li><a class="nav-link" href="login.php"><i class="fas fa-lock"></i></a> </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container" style="font-family: Didot;">
    <section class="resume-section" id="apropos">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h2>Aux Temps d'Avant</h2>
                <p class="introduction">
                    Dans son écrin de verdure au coeur du village nous avions acquis cet ancien corps de ferme typiquement alsacien
                    datant de 1717 à l'état de ruines et l'avons rénové dans le respect des traditions et avec la passion des vieilles pierres.
                    <br>
                    Ambiance cosy ou romantique mais de toute façon authentique, pour nos chambres indépendantes et
                    spacieuses qui ont été aménagées à l’étage de l’ancienne forge et de l’ancienne grange. Nous vous y proposons également un espace détente où nous avons le plaisir de vous offrir du thé et du café.
                    <br>
                    Meubles de famille ou objets chinés contribuent à l'atmosphère de sérénité, mêlant un soupçon de modernité avec un maximun de confort.
                    Une entrée propre à chaque chambre permet un accès en toute liberté.
                    <br>
                    Le petit déjeuner est servi à partir de 9h dans l'ancienne étable encore pourvue de sa mangeoire ou sur
                    la terrasse donnant sur le jardin en été.
                    <br>
                    À 30 minutes de Strasbourg, le village est situé à l’entrée du Parc naturel
                    régional des Vosges du Nord.
                    <br>
                    Parsemée de ruines de châteaux, terre d'Histoire, la région offre de nombreuses découvertes et activités. Parmis les sites les plus prisés, vous trouverez les villages aux maisons traditionnelles, les cités potières, verrières ou thermales ainsi que les vestiges militaires
                </p>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">

                <!-- Full-width images with number text -->
                <div class="slideshow-container" style="padding-top: 45px;">
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/bat1.jpg" alt="maison" style="width:100%;">
                    </div>

                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/bat3.jpg" alt="maison" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/cour4.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/cour6.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/cour7.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/cour8.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/cour10.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/cour11.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/jardin1.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/jardin3.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/jardin5.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/jardin7.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/noel1.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/rue1.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/rue2.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/rue4.jpg" style="width:100%">
                    </div>
                    <div class="mySlidesGallery">
                        <img class="pictures" src="img/terrasse2.jpg" style="width:100%">
                    </div>
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>
        </div>
    </section>
    <section class="resume-section" id="video">
        <h2 class="titre_all">Vidéo</h2>
        <iframe class="video" height="631" width="455"
                src="https://www.youtube.com/embed/1Vh6tAqlblg?autoplay=1&showinfo=0" frameborder="0"
                allowfullscreen></iframe>
    </section>
    <section class="resume-section" id="forge">
        <h2 class="titre_all">La Forge</h2>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="text">La Forge propose un espace de 31 m² pour 2 à 3 personnes. Rénovée dans un esprit
                    traditionnel épuré et conservant toute son authenticité, elle offre tout le confort actuel dans une
                    ambiance cosy.
                </div>
                <div class="row" style="text-align: center">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: left; margin-top: 20px;">
                        <div style="color : rgb(53, 57, 66);"><strong>Equipements</strong></div>
                        <div style="color : rgb(53, 57, 66);"><img src="img/hairdryer.png"
                                                                   style="height: 20px; width: 20px; margin-right: 14px;">Sèche
                            cheveux
                        </div>
                        <div style="color : rgb(53, 57, 66); padding-left: 3px;"><i style="margin-right: 4px;"
                                                                                    class="fa fa-shower"></i> Douche à
                            l'italienne
                        </div>
                        <div style="color : rgb(53, 57, 66);"><img src="img/toilette.png"
                                                                   style="height: 20px; width: 20px; margin-right: 13px;">WC
                            privé
                        </div>
                        <div style="color : rgb(53, 57, 66);"><i style="margin-right: 7px;" class="fa fa-wifi"></i> Wifi
                        </div>
                        <div style="color : rgb(53, 57, 66);"><i style="margin-right: 8px;"
                                                                 class="fa fa-television"></i> Télévison
                        </div>
                        <div style="color : rgb(53, 57, 66);"><i style="color : rgb(53, 57, 66); margin-right: 9px;"
                                                                 class="fa fa-bed"></i> Lit double 2 x 90 x 200 cm
                        </div>
                        <div style="color : rgb(53, 57, 66);"><i style="color : rgb(53, 57, 66); margin-right: 9px;"
                                                                 class="fa fa-bed"></i> Lit simple 80 x 200 cm
                        </div>
                        <div style="color : rgb(53, 57, 66);"><img src="img/frigo.png" style="height: 20px; width: 20px; margin-right: 13px;"
                            > Mini réfrigérateur
                        </div>
                        <br>
                        <div style="color : rgb(53, 57, 66);"><strong>Egalement Disponible</strong></div>
                        <div style="color : rgb(53, 57, 66);"><i style="color : rgb(53, 57, 66); margin-right: 4px;"
                                                                 class="fa fa-bed"></i> Lit bébé
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6" style="margin-top: 20px;">
                        <div style="color : rgb(53, 57, 66); text-align: left"><strong> Disponibilités de La
                                Forge</strong></div>
                        <div style="margin-top: 10px; font-size: 15px; " id="datepickerForge">
                            <?php
                                try
                                {
                                    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

                                    $rep = $bdd->query('SELECT * FROM reservations WHERE chambre=\'FORGE\'');
                                    $dateForge = array();
                                    foreach ($rep as $repBis)
                                    {
                                        $dateForge[] = $repBis['date'];
                                    }
                                }
                                catch (PDOException $exception)
                                {
                                    echo $exception->getMessage();
                                }
                            ?>
                        </div>
                        <table style="margin-top: 10px;">
                            <tr>
                                <td class="not_available"></td>
                                <td style="color : rgb(53, 57, 66); padding-left: 10px;"><strong>Non disponible</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="color : rgb(53, 57, 66); margin-top: 35px;"><strong>Tarifs</strong> (petit-déjeuner compris)
                </div>
                <table style="color: rgb(53, 57, 66); margin-top: 10px;">
                    <thead>
                    <tr>
                        <th class="in_table">Nombres de nuits</th>
                        <th class="in_table">1 nuit</th>
                        <th class="in_table">2 nuits</th>
                        <th class="in_table">4 nuits</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th class="in_table">2 personnes</th>
                        <th class="in_table">90 €</th>
                        <th class="in_table">85 €</th>
                        <th class="in_table">80 €</th>
                    </tr>
                    <tr>
                        <th class="in_table">3 personnes</th>
                        <th class="in_table">120 €</th>
                        <th class="in_table">115 €</th>
                        <th class="in_table">110 €</th>
                    </tr>
                    </tbody>
                </table>
                <div style="font-size: 14px; padding-left: 170px; color: rgb(53, 57, 66);">(prix par nuitée)</div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="slideshow-container">
                    <div class="mySlidesForges">
                        <img class="pictures" src="img/forge3.jpg">
                    </div>
                    <div class="mySlidesForges">
                        <img class="pictures" src="img/forge6.jpg">
                    </div>
                    <div class="mySlidesForges">
                        <img class="pictures" src="img/forge5.jpg">
                    </div>
                    <div class="mySlidesForges">
                        <img class="pictures" src="img/forge4.jpg">
                    </div>
                    <div class="mySlidesForges">
                        <img class="pictures" src="img/forge1.jpg">
                    </div>
                    <div class="mySlidesForges">
                        <img class="pictures" src="img/forge7.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="resume-section" id="grange">
        <h2 class="titre_all">La Grange</h2>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="slideshow-container">
                    <div class="mySlidesGranges">
                        <img class="pictures" src="img/grange1.jpg">
                    </div>
                    <div class="mySlidesGranges">
                        <img class="pictures" src="img/grange6.jpg">
                    </div>
                    <div class="mySlidesGranges">
                        <img class="pictures" src="img/grange7.jpg">
                    </div>
                    <div class="mySlidesGranges">
                        <img class="pictures" src="img/grange8.jpg">
                    </div>
                    <div class="mySlidesGranges">
                        <img class="pictures" src="img/grange9.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="text">La Grange propose un espace de 25 m2 pour 2 personnes.Dans le même esprit traditionnel
                    et authentique et avec le même confort, elle s'inspire du romantisme allemand de la fin du 18ème
                    siècle et offre donc une ambiance beaucoup plus romantique.
                </div>
                <div class="row" style="text-align: center">
                    <div class="col-md-6 col-lg-6 col-sm-6" style="text-align: left; margin-top: 20px;">
                        <div style="color : rgb(53, 57, 66);"><strong>Equipements</strong></div>
                        <div style="color : rgb(53, 57, 66);"><img src="img/hairdryer.png"
                                                                   style="height: 20px; width: 20px; margin-right: 14px;">Sèche
                            cheveux
                        </div>
                        <div style="color : rgb(53, 57, 66); padding-left: 3px;"><i style="margin-right: 4px;"
                                                                                    class="fa fa-shower"></i> Douche à
                            l'italienne
                        </div>
                        <div style="color : rgb(53, 57, 66);"><img src="img/toilette.png"
                                                                   style="height: 20px; width: 20px; margin-right: 13px;">WC
                            privé
                        </div>
                        <div style="color : rgb(53, 57, 66);"><i style="margin-right: 7px;" class="fa fa-wifi"></i> Wifi
                        </div>
                        <div style="color : rgb(53, 57, 66);"><i style="margin-right: 8px;"
                                                                 class="fa fa-television"></i> Télévison
                        </div>
                        <div style="color : rgb(53, 57, 66);"><i style="color : rgb(53, 57, 66); margin-right: 9px;"
                                                                 class="fa fa-bed"></i> Lit double 2 x 90 x 200 cm
                        </div>
                        <div style="color : rgb(53, 57, 66);"><img src="img/frigo.png" style="height: 20px; width: 20px; margin-right: 13px;"
                                              > Mini réfrigérateur
                        </div>
                        <br>
                        <div style="color : rgb(53, 57, 66);"><strong>Egalement Disponible</strong></div>
                        <div style="color : rgb(53, 57, 66);"><i style="color : rgb(53, 57, 66); margin-right: 4px;"
                                                                 class="fa fa-bed"></i> Lit bébé
                        </div>
                    </div>
                    <div class="col-md-6 col-md-6 col-sm-6" style="margin-top: 20px;">
                        <div style="color : rgb(53, 57, 66); text-align: left;"><strong>Disponibilités de La
                                Grange</strong></div>
                        <div style="margin-top: 10px; font-size: 15px;" id="datepickerGrange">
                            <?php
                            try
                            {
                                $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

                                $rep = $bdd->query('SELECT * FROM reservations WHERE chambre=\'GRANGE\'');
                                $dateGrange = array();
                                foreach ($rep as $repBis)
                                {
                                    $dateGrange[] = $repBis['date'];
                                }
                            }
                            catch (PDOException $exception)
                            {
                                echo $exception->getMessage();
                            }
                            ?>
                        </div>
                        <table style="margin-top: 10px;">
                            <tr>
                                <td class="not_available"></td>
                                <td style="color : rgb(53, 57, 66); padding-left: 10px;"><strong>Non disponible</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="color : rgb(53, 57, 66); margin-top: 35px;"><strong>Tarifs</strong> (petit-déjeuner compris)
                </div>
                <table style="color: rgb(53, 57, 66); margin-top: 10px;">
                    <thead>
                    <tr>
                        <th class="in_table">Nombres de nuits</th>
                        <th class="in_table">1 nuit</th>
                        <th class="in_table">2 nuits</th>
                        <th class="in_table">4 nuits</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th class="in_table">2 personnes</th>
                        <th class="in_table">90 €</th>
                        <th class="in_table">85 €</th>
                        <th class="in_table">80 €</th>
                    </tr>
                    </tbody>
                </table>
                <div style="font-size: 14px; padding-left: 170px; color: rgb(53, 57, 66);">(prix par nuitée)</div>
            </div>
        </div>
    </section>
    <section class="resume-section" id="alcove">
        <h2 class="titre_all">L'Alcôve</h2>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="text">L'Alcôve propose un espace de 23 m² pour 2 personnes. Toujours dans le même esprit,
                    pour cette chambre, nous avons voulu allier une alcôve de tradition alsacienne et le 18ème siècle
                    duquel date notre corps de ferme pour créer une ambiance plus intimiste et chaleureuse.
                </div>
                <div class="row" style="text-align: center">
                    <div class="col-md-6 col-lg-6 col-sm-6" style="text-align: left; margin-top: 20px;">
                        <div style="color : rgb(53, 57, 66);"><strong>Equipements</strong></div>
                        <div style="color : rgb(53, 57, 66);"><img src="img/hairdryer.png"
                                                                   style="height: 20px; width: 20px; margin-right: 14px;">Sèche
                            cheveux
                        </div>
                        <div style="color : rgb(53, 57, 66); padding-left: 3px;"><i style="margin-right: 4px;"
                                                                                    class="fa fa-shower"></i> Douche à
                            l'italienne
                        </div>
                        <div style="color : rgb(53, 57, 66);"><img src="img/toilette.png"
                                                                   style="height: 20px; width: 20px; margin-right: 13px;">WC
                            privé
                        </div>
                        <div style="color : rgb(53, 57, 66);"><i style="margin-right: 7px;" class="fa fa-wifi"></i> Wifi
                        </div>
                        <div style="color : rgb(53, 57, 66);"><i style="margin-right: 8px;"
                                                                 class="fa fa-television"></i> Télévison
                        </div>
                        <div style="color : rgb(53, 57, 66);"><i style="color : rgb(53, 57, 66); margin-right: 9px;"
                                                                 class="fa fa-bed"></i> Lit double 2 x 90 x 200 cm
                        </div>
                        <br>
                        <div style="color : rgb(53, 57, 66);"><strong>Egalement Disponible</strong></div>
                        <div style="color : rgb(53, 57, 66);"><i style="color : rgb(53, 57, 66); margin-right: 4px;"
                                                                 class="fa fa-bed"></i> Lit bébé
                        </div>
                    </div>
                    <div class="col-md-6 col-md-6 col-sm-6" style="margin-top: 20px;">
                        <div style="color : rgb(53, 57, 66); text-align: left"><strong>Disponibilités de
                                L'Alcôve</strong></div>
                        <div style="margin-top: 10px; font-size: 15px;" id="datepickerAlcove">
                            <?php
                                try
                                {
                                    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

                                    $rep = $bdd->query('SELECT * FROM reservations WHERE chambre=\'ALCOVE\'');
                                    $dateAlcove = array();
                                    foreach ($rep as $repBis)
                                    {
                                        $dateAlcove[] = $repBis['date'];
                                    }
                                }
                                catch (PDOException $exception)
                                {
                                    echo $exception->getMessage();
                                }
                            ?>
                        </div>
                        <table style="margin-top: 10px;">
                            <tr>
                                <td class="not_available"></td>
                                <td style="color : rgb(53, 57, 66); padding-left: 10px;"><strong>Non disponible</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="color : rgb(53, 57, 66); margin-top: 35px;"><strong>Tarifs</strong> (petit-déjeuner compris)
                </div>
                <table style="color: rgb(53, 57, 66); margin-top: 10px;">
                    <thead>
                    <tr>
                        <th class="in_table">Nombres de nuits</th>
                        <th class="in_table">1 nuit</th>
                        <th class="in_table">2 nuits</th>
                        <th class="in_table">4 nuits</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th class="in_table">2 personnes</th>
                        <th class="in_table">90 €</th>
                        <th class="in_table">85 €</th>
                        <th class="in_table">80 €</th>
                    </tr>
                    </tbody>
                </table>
                <div style="font-size: 14px; padding-left: 170px; color: rgb(53, 57, 66);">(prix par nuitée)</div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="slideshow-container">
                    <div class="mySlidesAlcoves">
                        <img class="pictures" src="img/alcove1.jpg">
                    </div>
                    <div class="mySlidesAlcoves">
                        <img class="pictures" src="img/alcove2.jpg">
                    </div>
                    <div class="mySlidesAlcoves">
                        <img class="pictures" src="img/alcove4.jpg">
                    </div>
                    <div class="mySlidesAlcoves">
                        <img class="pictures" src="img/alcove5.jpg">
                    </div>
                 <!--   <div class="mySlidesAlcoves">
                        <img style="transform: rotate(90deg);" class="pictures" src="img/alcove6.jpg">
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="resume-section" id="contact">
        <h2 class="titre_all">Contact</h2>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div style="color : rgb(53, 57, 66);"><strong>Propriétaires</strong></div>
                <div style="color : rgb(53, 57, 66);"><i class="fa fa-user"></i> Carine & Christian Cura</div>
                <div style="color : rgb(53, 57, 66);"><i class="fa fa-phone"></i> +33 (0)3 88 72 88 60</div>
                <div style="color : rgb(53, 57, 66);"><i class="fa fa-phone"></i> +33 (0)6 76 56 90 33</div>
                <div style="color : rgb(53, 57, 66);"><i class="fa fa-flag"></i> Français & Allemand</div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 account-wall">
                <!-- <div style="text-align: center; margin-top: 40px;">
                    <div style="color: #353942; display: inline-block; font-size: 23px; font-weight: bold;">Contacter le propriétaire</div>
                </div>-->

                <form class="form-signin" method="post">
                    <input id="email" name="email" type="email" class="form-control" placeholder="E-mail" required>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Nom" required>
                    <input id="firstname" name="firstame" type="text" class="form-control" placeholder="Prénom" required>
                    <textarea id="message" name="text" class="form-control" placeholder="Laissez votre message içi"
                              required></textarea>
                    <div id="sendEmail" class="btn btn-lg btn-primary btn-block" style="background : rgba(211, 211, 211, 0.8); border: solid 2px #353942; color: #353942;">
                        <i class="fas fa-envelope"></i> Envoyez
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <a href="https://www.facebook.com/auxtempsdavant/"><i class="fa fa-facebook-official fa-2x" style="color:#3B5998;"></i></a>
            </div>


        </div>
    </section>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZwFBQDXkJtIr5ZGpmXKQpHcbd025gyWU&"></script>

<!-- Bootstrap core JavaScript -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script> -->



<!-- Plugin JavaScript -->
<script type="text/javascript">

    $(document).on('click', '#sendEmail', function() {
        var email =  $('#email').val();
        var name = $('#name').val();
        var firstname = $('#firstname').val();
        var message = $('#message').val();
        if (email !== "" && name !== "" && firstname !== "" && message !== "") {
            var dataString = 'email=' + email + '&name=' + name + "&firstname=" + firstname + "&message=" + message;
            $.ajax({
                type: "POST",
                url: "sendEmail.php",
                data: dataString,
                success: function(resultData){
                    $('#email').val("");
                    $('#name').val("");
                    $('#firstname').val("");
                    $('#message').val("");
                    alert("Message envoyé");
                }
            });
        }
        else {
            alert("Veuillez remplir tous les champs");
        }
    });

    var dateForge = <?php echo json_encode($dateForge); ?>;
    var dateGrange = <?php echo json_encode($dateGrange); ?>;
    var dateAlcove = <?php echo json_encode($dateAlcove); ?>;

    function formatDateYYYYMMDD(date) {
        var yyyy = date.getFullYear().toString();
        var mm = (date.getMonth()+1).toString();
        var dd  = date.getDate().toString();

        // CONVERT mm AND dd INTO chars
        var mmChars = mm.split('');
        var ddChars = dd.split('');

        // CONCAT THE STRINGS IN YYYY-MM-DD FORMAT
        var datestring = yyyy + '-' + (mmChars[1]?mm:"0"+mmChars[0]) + '-' + (ddChars[1]?dd:"0"+ddChars[0]);
        return datestring;
    }

    $(document).ready(function () {
        $(function() {
            $( "#datepickerForge" ).datepicker({
                prevText: 'Préc',
                nextText: 'Suiv',
                currentText: 'Aujourd\'hui',
                dateFormat:"yy-mm-dd",
                monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
                    'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
                monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
                    'Jul','Aou','Sep','Oct','Nov','Dec'],
                dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
                dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
                dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
                firstDay: 1,
                beforeShowDay: function(date) {
                    var datestring = formatDateYYYYMMDD(date);
                    for (var i = 0; i < dateForge.length; i++) {
                        if (dateForge[i] === datestring) {
                            return [true, 'highlight'];
                        }
                    }
                    return [true, 'available'];
                },
            });
        });
        $(function() {
            $( "#datepickerGrange" ).datepicker({
                prevText: 'Préc',
                nextText: 'Suiv',
                currentText: 'Aujourd\'hui',
                dateFormat:"yy-mm-dd",
                monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
                    'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
                monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
                    'Jul','Aou','Sep','Oct','Nov','Dec'],
                dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
                dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
                dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
                firstDay: 1,
                beforeShowDay: function(date) {
                    var datestring = formatDateYYYYMMDD(date);
                    for (var i = 0; i < dateGrange.length; i++) {
                        if (dateGrange[i] === datestring) {
                            return [true, 'highlight'];
                        }
                    }
                    return [true, 'available'];
                },
            });
        });
        $(function() {
            $( "#datepickerAlcove" ).datepicker({
                prevText: 'Préc',
                nextText: 'Suiv',
                currentText: 'Aujourd\'hui',
                dateFormat:"yy-mm-dd",
                monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
                    'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
                monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
                    'Jul','Aou','Sep','Oct','Nov','Dec'],
                dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
                dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
                dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
                firstDay: 1,
                beforeShowDay: function(date) {
                    var datestring = formatDateYYYYMMDD(date);
                    for (var i = 0; i < dateAlcove.length; i++) {
                        if (dateAlcove[i] === datestring) {
                            return [true, 'highlight'];
                        }
                    }
                    return [true, 'available'];
                },
            });
        });
    });
</script>
<script type="text/javascript" src="planning.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.js"></script>
<!-- Custom scripts for this template -->
<script src="js/resume.js"></script>
<script src="menu.js"></script>
<script src="gallery.js"></script>
</body>
</html>
