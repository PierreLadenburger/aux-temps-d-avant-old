<?php
    require_once 'common.php';

if (isset($_POST['id']))
{
    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');
    $del = $bdd->prepare("DELETE FROM reservations WHERE id = :id");
    $del->execute(array(
        "id" => $_POST['id'],
    ));

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

    <style>
        #map {
            height: 250px;
            width: 250px;
        }
        #mapservices {
            width: 570px;
            height: 360px;
        }
    </style>

</head>

<body style="background-color: #d7c9b8; font-family: Didot; font-size: 20px;" class="background-style">
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
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <?php printSideMenu() ?>
                </div>
                <div class="col-sm-10 col-md-10 col-lg-10">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <h2 style="font-family: Didot;"><i class="fa fa-calendar"></i> Planning</h2>
                            <div style="margin-top: 10px; font-size: 15px; " id="datepickerForge">
                                <?php
                                    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

                                    $rep = $bdd->query('SELECT * FROM reservations WHERE chambre=\'forge\'');
                                    $dateForge = array();
                                    foreach ($rep as $repBis)
                                    {
                                        $dateForge[] = $repBis['date'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <h2 style="font-family: Didot;"><i class="fa fa-address-book"></i> Ajouter Réservation</h2>
                            <div class="account-wall" style="margin-top: 30px;">
                                <form class="form-signin" style="margin: 0">
                                    <div class="form-group">
                                        <input id="prenom" name="prenom" type="text" class="form-control" placeholder="Nom">
                                    </div>
                                    <div class="form-group">
                                        <input id="nom" name="nom" type="text" class="form-control" placeholder="Prénom">
                                    </div>
                                    <div class="form-group">
                                        <input id="date" name="date" type="date" class="form-control">
                                    </div>
                                    <div class="btn btn-lg btn-primary btn-block" id="add"
                                            style="background : rgba(181, 97, 115, 0.7); border: solid 2px rgba(181, 97, 115, 0.7);">
                                        Ajouter
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <h2 style="font-family: Didot;"><i class="fa fa-list"></i> Liste</h2>
                    <?php
                    echo '<table style="color: rgb(53, 57, 66); width: 100%;">
                          <thead>
                            <tr>
                                  <th class="in_table" scope="col">#</th>
                                  <th class="in_table" scope="col">Nom</th>
                                  <th class="in_table" scope="col">Prénom</th>
                                  <th class="in_table" scope="col">Date</th>
                                  <th class="in_table" scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>';
                    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

                    $rep = $bdd->query('SELECT * FROM reservations WHERE chambre=\'forge\'');
                    foreach ($rep as $repBis)
                    {
                        echo '<tr>';
                        echo '<td class="in_table" scope="col">' . $repBis['id'] . '</td>';
                        echo '<td class="in_table">' . $repBis['nom'] . '</td>';
                        echo '<td class="in_table">' . $repBis['prenom'] . '</td>';
                        echo '<td class="in_table">' . $repBis['date'] . '</td>';
                        echo '<td class="in_table"><i onclick=" $( \'#delete\' ).submit();" class="fa fa-trash"></i><form style="width: auto !important;" onsubmit="return confirm(\'dmd\');" method="post" id="delete"><input name="id" type="hidden" value="'. $repBis['id'] .'"></form></td>';
                        echo '</tr>';
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

    function deleteUser()
    {
        $( "#delete" ).submit();
    }
    $( "#add" ).click(function() {
        var prenom = $('#prenom').val();
        var nom = $('#nom').val();
        var date = $('#date').val();

        console.log(prenom, nom, date);
        if (prenom !== '' && nom !== '' && date !== '')
        {
            var dataString = 'chambre=forge&prenom=' + prenom + '&nom=' + nom + "&date=" + date + "&type=add";
            $.ajax({
                type: "GET",
                url: "editReservation.php",
                data: dataString,
                success: function(resultData){
                    window.location.href = "forge.php";
                }
            });
        }
    });

    var dateForge = <?php echo json_encode($dateForge); ?>;

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
            $("#datepickerForge").datepicker({
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
                    for (var i = 0; i < dateForge.length; i++) {
                        if (dateForge[i] === datestring) {
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.js"></script>
<!-- Custom scripts for this template -->
<script src="js/resume.js"></script>

</body></html>