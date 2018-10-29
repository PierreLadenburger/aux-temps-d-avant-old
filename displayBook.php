<html lang="en"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Aux Temps d'Avants</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css">
    <!--  <link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"> -->




    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">

    <!-- Plugin JavaScript -->

    <!-- Custom scripts for this template -->


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
            <a class="navbar-brand js-scroll-trigger" href="index.php"  style="color: #d7c9b8; font-size: 20px;"><i class="fa fa-home"></i> Aux Temps D'Avant</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a class="nav-link js-scroll-trigger" href="#video" style="color: #d7c9b8;"><i class="fa fa-video-camera"></i> Vidéo</a></li>
                <li><a class="nav-link js-scroll-trigger" href="#forge" style="color: #d7c9b8;"><i class="fa fa-bed"></i> La Forge</a></li>
                <li><a class="nav-link js-scroll-trigger" href="#grange" style="color: #d7c9b8;"><i class="fa fa-bed"></i> La Grange</a></li>
                <li><a class="nav-link js-scroll-trigger" href="#alcove" style="color: #d7c9b8;"><i class="fa fa-bed"></i> L'Alcôve</a></li>
                <li><a class="nav-link js-scroll-trigger" href="displayBook.php" style="color: #d7c9b8;"><i class="fa fa-book"></i> Livre d'or</a></li>
                <li><a class="nav-link js-scroll-trigger" href="#proximite" style="color: #d7c9b8;"><i class="fa fa-map-marker"></i> Services</a></li>
                <li><a class="nav-link js-scroll-trigger" href="#contact" style="color: #d7c9b8;"><i class="fa fa-phone"></i> Contact</a></li>
                <li><a class="nav-link" href="login.php"><i class="fa fa-lock"></i></a> </li> -->
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container" style="font-family: Didot;">
    <h2 class="titre_all" style="margin-top: 8rem !important">Livre d'or</h2>
    <div class="messages-container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5">
                <img src="img/livre.jpg" width="350">
            </div>

            <div class="col-lg-8 col-md-7 col-sm-7">
                <?php
                try {
                    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

                    $rep = $bdd->query('SELECT * FROM livre');
                    foreach ($rep as $repBis)
                    {
                        echo "<div class='message' style='text-align: center;'>
                                   <div>
                                       " . $repBis['message'] .
                                   "</div>
                                    <br>
                                    <div>".  date('d-m-Y', strtotime($repBis['date'])) .
                                   "</div>
                                    <div>" . $repBis['nom'] .
                                   "</div>
                                    <a class=\"prev-message\" onclick=\"plusSlides(-1)\">&#10094;</a>
                                    <a class=\"next-message\" onclick=\"plusSlides(1)\">&#10095;</a>
                             </div>";
                    }
                }
                catch (PDOException $exception)
                {
                    echo $exception->getMessage();
                }
                ?>
            </div>
            
        </div>
    </div>
</div>
<script src="book.js"></script>
</body>
</html>