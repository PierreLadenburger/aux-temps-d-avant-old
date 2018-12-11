<?php
require_once 'common.php';
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
<?php printGenericMenu() ?>
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
