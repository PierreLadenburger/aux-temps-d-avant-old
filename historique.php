<?php
require_once "common.php";
session_start();
if ($_SESSION['admin'] != '1') {
    echo 'ok';
    header('location: index.php');
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
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css">
    <!--  <link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"> -->




    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">

    <!-- Plugin JavaScript -->

    <!-- Custom scripts for this template -->
</head>

<body id="body" style="background-color: #d7c9b8; font-family: Didot; font-size: 20px;">
<nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand js-scroll-trigger" href="index.php"  style="color: #d7c9b8;"><i class="fa fa-home"></i> Aux Temps D'Avant</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container" style="font-family: Didot;">

    <div class="row" style="padding-top: 8rem !important">
        <div class="col-sm-3 col-md-3 col-lg-2">
            <?php printSideMenu() ?>
        </div>
        <h2 class="titre_room">Historique</h2>
        <div class="col-sm-9 col-md-9 col-lg-10">
        <h2 style="font-family: Didot;"><i class="fa fa-list"></i> Liste</h2>
        <?php
        echo '<table style="color: rgb(53, 57, 66); width: 100%;">
                  <thead>
                    <tr>
                          <th class="in_table" scope="col">Nom</th>
                          <th class="in_table" scope="col">Prénom</th>
                          <th class="in_table" scope="col">Date</th>
                          <th class="in_table" scope="col">Chambre</th>
                          <th class="in_table" scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>';
        try  {
            $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

            $rep = $bdd->query('SELECT * FROM historique');
            foreach ($rep as $repBis)
            {
                echo '<tr>';
                echo '<td class="in_table">' . $repBis['nom'] . '</td>';
                echo '<td class="in_table">' . $repBis['prenom'] . '</td>';
                echo '<td class="in_table">' . date('d-m-Y', strtotime($repBis['date'])) . '</td>';
                echo '<td class="in_table">' . $repBis['chambre'] . '</td>';
                echo '<td class="in_table"><button id="del" value="'. $repBis['id'] .'" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Supprimer</button></td>';
                echo '</tr>';
            }
        }
        catch (PDOException $exception)
        {
            $exception->getMessage();
        }

        echo'                         
                  </tbody>
            </table>'
        ?>
    </div>
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script>
    $(document).on('click', '#del', function() {
        var conf = confirm("Etes-vous sur de vouloir supprimer cet utilisateur ?");
        if (conf === true) {
            var dataString = "id=" + $(this).val() + "&type=deleteHisto";
            $.ajax({
                type: "POST",
                url: "editReservation.php",
                data: dataString,
                success: function(resultData){
                    location.reload();
                }
            });
        }
    });

</script>
<script type="text/javascript" src="planning.js"></script>
<!-- Bootstrap core JavaScript -->
<!-- Bootstrap core JavaScript -->

<!-- <script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script> -->

<!-- Plugin JavaScript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.js"></script>
<!-- Custom scripts for this template -->
<script src="js/resume.js"></script>

</body></html>