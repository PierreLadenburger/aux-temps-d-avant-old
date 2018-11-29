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
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css">
    <!--  <link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"> -->




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
            <a class="navbar-brand js-scroll-trigger" href="index.php"  style="color: #d7c9b8; font-size: 20px;"><i class="fa fa-home"></i> Aux Temps D'Avant</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            <!--    <li><a class="nav-link js-scroll-trigger" href="#video" style="color: #d7c9b8;"><i class="fa fa-video-camera"></i> Vidéo</a></li>
                <li><a class="nav-link js-scroll-trigger" href="#forge" style="color: #d7c9b8;"><i class="fa fa-bed"></i> La Forge</a></li>
                <li><a class="nav-link js-scroll-trigger" href="#grange" style="color: #d7c9b8;"><i class="fa fa-bed"></i> La Grange</a></li>
                <li><a class="nav-link js-scroll-trigger" href="#alcove" style="color: #d7c9b8;"><i class="fa fa-bed"></i> L'Alcôve</a></li>
                <li><a class="nav-link js-scroll-trigger" href="#proximite" style="color: #d7c9b8;"><i class="fa fa-map-marker"></i> Alentours</a></li>
                <li><a class="nav-link js-scroll-trigger" href="#contact" style="color: #d7c9b8;"><i class="fa fa-phone"></i> Contact</a></li>
                <li><a class="nav-link" href="login.php"><i class="fa fa-lock"></i></a> </li> -->

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
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




</body>
</html>
