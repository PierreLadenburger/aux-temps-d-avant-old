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
            <a class="navbar-brand js-scroll-trigger" href="index.php"  style="color: #d7c9b8;"><i class="fas fa-home"></i> Aux Temps D'Avant</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="font-family: Didot;">
    <div class="row" style="padding-top: 8rem !important">
        <div class="col-sm-3 col-md-3 col-lg-2">
            <?php printSideMenu() ?>
        </div>
        <h2 class="titre_room">L'Alcôve</h2>
        <div class="col-sm-9 col-md-9 col-lg-10">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <h2 style="font-family: Didot;"><i class="fas fa-calendar-alt"></i> Planning</h2>
                    <div style="margin-top: 10px; font-size: 15px; " id="datepickerAlcove">
                        <?php

                        try {
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
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <h2 style="font-family: Didot;"><i class="fas fa-address-book"></i> Ajouter Réservation</h2>
                    <form class="form-signin" style="margin: 0">
                        <div class="form-group">
                            <input id="prenom" name="prenom" type="text" class="form-control" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <input id="nom" name="nom" type="text" class="form-control" placeholder="Prénom">
                        </div>

                        <div class="form-group">
                            <input id="dateStart" name="dateStart" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="dateEnd" name="dateEnd" type="date" class="form-control">
                        </div>
                        <div class="btn btn-lg btn-primary btn-block" id="add" style="background : rgba(211, 211, 211, 0.8); border: solid 2px #353942; color: #353942;">
                            <i class="fas fa-plus-circle"></i> Ajouter
                        </div>
                    </form>
                </div>
            </div>
            <h2 style="font-family: Didot;"><i class="fas fa-list"></i> Liste</h2>
            <?php
            echo '<table style="color: rgb(53, 57, 66); width: 100%;">
                          <thead>
                            <tr>
                                  <th class="in_table" scope="col">Nom</th>
                                  <th class="in_table" scope="col">Prénom</th>
                                  <th class="in_table" scope="col">Date</th>
                                  <th class="in_table" scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>';
            try  {
                $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

                $rep = $bdd->query('SELECT * FROM reservations WHERE chambre=\'ALCOVE\' ORDER BY date ASC');
                foreach ($rep as $repBis)
                {
                    echo '<tr>';
                    echo '<td class="in_table">' . $repBis['nom'] . '</td>';
                    echo '<td class="in_table">' . $repBis['prenom'] . '</td>';
                    echo '<td class="in_table">' . date('d-m-Y', strtotime($repBis['date'])) . '</td>';
                    echo '<td class="in_table"><button id="del" value="'. $repBis['id'] .'" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Supprimer</button></td>';
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
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script>
    $(document).on('click', '#del', function() {
        var conf = confirm("Etes-vous sur de vouloir supprimer cet utilisateur ?");
        if (conf === true) {
            var dataString = "id=" + $(this).val() + "&type=delete";
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

    $(document).on('click', '#add', function() {
        var prenom = $('#prenom').val();
        var nom = $('#nom').val();
        var dateStart = $('#dateStart').val();
        var dateEnd = $('#dateEnd').val();

        if (prenom !== '' && nom !== '' && dateStart !== '' && dateEnd !== '')        {
            var dataString = 'chambre=ALCOVE&prenom=' + prenom + '&nom=' + nom + "&dateStart=" + dateStart + "&dateEnd=" + dateEnd + "&type=add";
            console.log(dataString);
            $.ajax({
                type: "POST",
                url: "editReservation.php",
                data: dataString,
                success: function(resultData){
                    $('#prenom').val("");
                    $('#nom').val("");
                    $('#dateStart').val("");
                    $('#dateEnd').val("");
                    location.reload();
                }
            });
        } else {
            alert("Veuillez remplir tous les champs");
        }
    });

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
        $(function () {
            $("#datepickerAlcove").datepicker({
                prevText: 'Préc',
                nextText: 'Suiv',
                currentText: 'Aujourd\'hui',
                dateFormat: "yy-mm-dd",
                monthNames: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin',
                    'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
                monthNamesShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun',
                    'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
                dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
                dayNamesShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
                dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
                firstDay: 1,
                beforeShowDay: function (date) {
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
<!-- Bootstrap core JavaScript -->
<!-- Bootstrap core JavaScript -->

<!-- <script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script> -->

<!-- Plugin JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.js"></script>
<!-- Custom scripts for this template -->
<script src="js/resume.js"></script>

</body></html>