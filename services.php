<?php
require_once "common.php";
session_start();
require_once 'common.php';
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
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css">
    <!--  <link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"> -->


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


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

<body style="background-color: #d7c9b8; font-family: Didot; font-size: 20px;">
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
        <h2 class="titre_room">Services</h2>
        <div class="col-sm-9 col-md-9 col-lg-10">
            <h2 style="font-family: Didot;"><i class="fas fa-address-book"></i> Ajouter service</h2>
            <form class="form-signin" style="margin: 0">
                <div class="form-group">
                    <input id="nom" name="nom" type="text" class="form-control" placeholder="Nom">
                </div>
                <div class="form-group">
                    <input id="adresse" name="adresse" type="text" class="form-control" placeholder="Adresse">
                </div>
                <div class="form-group">
                    <select id="categorie" name="categorie" class="form-control">
                        <option value="balades">Balades</option>
                        <option value="cites">Cités</option>
                        <option value="musees">Musées</option>
                        <option value="memoires">Mémoires</option>
                        <option value="terroir">Terroir</option>
                        <option value="divers">Divers</option>
                    </select>
                </div>
                <div class="btn btn-lg btn-primary btn-block" id="add"
                     style="background : rgba(211, 211, 211, 0.8); border: solid 2px #353942; color: #353942;">
                    <i class="fas fa-plus-circle"></i> Ajouter
                </div>
            </form>
            <h2 style="font-family: Didot;"><i class="fas fa-list"></i> Liste</h2>
            <?php
            echo '<table style="color: rgb(53, 57, 66); width: 100%;">
                          <thead>
                            <tr>
                                  <th class="in_table" scope="col">Nom</th>
                                  <th class="in_table" scope="col">Adresse</th>
                                  <th class="in_table" scope="col">Latitude</th>
                                  <th class="in_table" scope="col">Longitude</th>
                                  <th class="in_table" scope="col">Catégorie</th>
                                  <th class="in_table" scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>';
            try  {
                $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

                $rep = $bdd->query('SELECT * FROM services');
                foreach ($rep as $repBis)
                {
                    echo '<tr>';
                    echo '<td class="in_table">' . $repBis['nom'] . '</td>';
                    echo '<td class="in_table">' . $repBis['adresse'] . '</td>';
                    echo '<td class="in_table">' . $repBis['lat'] . '</td>';
                    echo '<td class="in_table">' . $repBis['lng'] . '</td>';
                    echo '<td class="in_table">' . $repBis['categorie'] . '</td>';
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZwFBQDXkJtIr5ZGpmXKQpHcbd025gyWU&"></script>
<script src="vendor/jquery/jquery.min.js"></script>

<script>

        $(document).on('click', '#add', function() {
        var nom = $('#nom').val();
        var adresse = $('#adresse').val();
        var categorie = $('#categorie').val();



        if (nom !== '' && adresse !== '' && categorie !== '')
        {
            var geocoder;

            /*var map = new google.maps.Map(document.getElementById('mapservices'), {
                zoom: 8,
                center: {lat: -34.397, lng: 150.644}
            });*/
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({'address': adresse}, function(results, status) {
            if (status === 'OK') {
                var conf = confirm("Un résultat a était trouvé correspond t'il à votre demande ?\nadresse: " + results[0].formatted_address);
                /*map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });*/
                if (conf === true) {
                    console.log(results);
                    console.log(results[0].formatted_address);
                    console.log(results[0].geometry.location.lat());
                    console.log(results[0].geometry.location.lng());
                    var dataString = 'nom=' + nom + "&adresse=" + results[0].formatted_address + "&lat=" + results[0].geometry.location.lat() + "&lng=" + results[0].geometry.location.lng() + "&categorie=" + categorie + "&action=add";
                    $.ajax({
                        type: "POST",
                        url: "editServices.php",
                        data: dataString,
                        success: function(resultData){
                            $('#nom').val("");
                            $('#adresse').val("");
                            $('#categorie').val("");
                            location.reload();
                        }
                    });
                    console.log(dataString);
                }
            } else {
                alert("Aucune adresse correspondant à votre demande");
            }
        });

        }
    });

</script>



<script>
    $(document).on('click', '#del', function() {
        var conf = confirm("Etes-vous sur de vouloir supprimer ce service ?");
        if (conf === true) {
            var dataString = "id=" + $(this).val() + "&action=delete";
            $.ajax({
                type: "POST",
                url: "editServices.php",
                data: dataString,
                success: function(resultData){
                    location.reload();
                }
            });
        }
    });

</script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
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