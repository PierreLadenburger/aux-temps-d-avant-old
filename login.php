<?php
session_start();
ob_start();
$user = "carine";
$password = "bulle2267";


if (isset($_POST['user']) && isset($_POST['password'])
    && strcmp($user, $_POST['user']) == 0 && strcmp($password, $_POST['password']) == 0)
{
    $_SESSION['admin'] = '1';
    header('location: forge.php');
    exit();
}
?>

<html lang="en"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Aux Temps d'Avants</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css">
    <!--  <link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"> -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">

    <!-- Plugin JavaScript -->

    <!-- Custom scripts for this template -->

</head>
<body style="font-family: Didot; font-size: 20px; background-color: #d7c9b8;">
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
            <a class="navbar-brand js-scroll-trigger" href="index.php"  style="color: #d7c9b8; font-size: 20px;"><i class="fas fa-home"></i> Aux Temps D'Avant</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link js-scroll-trigger" href="displayBook.php" style="color: #d7c9b8;"><i class="fas fa-book"></i> Livre d'or</a></li>
                <li><a class="nav-link js-scroll-trigger" href="displayRestaurants.php" style="color: #d7c9b8;"><i class="fas fa-map-marker-alt"></i> Restaurants</a></li>
                <li class="dropdown" style="cursor: pointer;">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #d7c9b8; background-color: #353942;"><i class="fas fa-map-marker-alt"></i> Services<span style="color: #d7c9b8;" class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color: #353942; border-color: #353942; font-size: 20px;">
                        <li><a class="nav-link js-scroll-trigger" href="balades.php" style="color: #d7c9b8;"> Balades</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="cites.php" style="color: #d7c9b8;"> Cités</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="#alcove" style="color: #d7c9b8;"> Musées</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="#alcove" style="color: #d7c9b8;"> Vestiges</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="#alcove" style="color: #d7c9b8;"> Terroir</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="#alcove" style="color: #d7c9b8;"> Divers</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="login.php"><i class="fas fa-lock"></i></a> </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container" style="font-family: Didot;">
        <h2 style="padding-top: 5rem !important;" class="text-center login-title">Connexion</h2>
        <div class="account-wall">
            <form class="form-signin" method="post">
                <input name="user" type="text" class="form-control" placeholder="Nom d'utilisateur" required autofocus>
                <input name="password" type="password" class="form-control" placeholder="Mot de passe" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" style="background : rgba(211, 211, 211, 0.8); border: solid 2px #353942; color: #353942;">Se connecter</button>
            </form>
        </div>
</div>



<script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
