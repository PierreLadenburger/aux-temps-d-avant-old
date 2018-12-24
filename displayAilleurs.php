<?php
    require_once 'common.php';
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
<?php printGenericMenu() ?>
<div class="container" style="font-family: Didot;">
    <h2 class="titre_all" style="margin-top: 8rem !important">Ailleurs</h2>
    <div class="messages-container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5">

                <!-- LISTE DES SERVICES -->
                <?php
                try {
                    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

                    $rep = $bdd->query('SELECT * FROM ailleurs');
                    foreach ($rep as $repBis)
                    {
                        echo "<div>
                                   <div class='text'>
                                       " . $repBis['nom'] .
                                    "</div>                                    
                                    <div class='text'>". $repBis['adresse'] .
                                    "</div>
                                    <div class='text'>
                                        ". ($repBis['categorie'] == "maison" ? "Maison de vacances" : "Chambre d’hôtes") ."
                                    </div>
                                    <a style='color: darkred;' href='".$repBis['site'] ."'>" . $repBis['site'] ."</a>
                                    <br>
                                    <br>                                  
                             </div>";
                    }
                }
                catch (PDOException $exception)
                {
                    echo $exception->getMessage();
                }
                ?>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-7">
                <!-- CARTE DES SERVICES -->
                <div style="position: fixed;">
                    <div style="width: 870px; height: 560px; position: fixed;" id="mapservices"></div>
                </div>

            </div>

            
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZwFBQDXkJtIr5ZGpmXKQpHcbd025gyWU&"></script>
<script>
    var pos = {lat: 48.903975, lng: 7.661313};
    var flightPath;
    var map = new google.maps.Map(document.getElementById('mapservices'), {
        zoom: 5,
        center: pos
    });

    $(document).ready(function() {
        $.ajax({
            type : 'POST',
            url : 'getAilleurs.php',
            dataType:"json",
            success : function (data) {
                data.forEach(function (element) {
                   console.log(element['lat']);
                   console.log(element['lng']);
                    var pos = new google.maps.LatLng(element['lat'], element['lng']);
                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map,
                        name: "Aux tem",
                        title: element['nom'],
                        icon: "img/red_MarkerA.png"

                    });
                });
                //console.log(data);
            }
        });
    });


    var marker = new google.maps.Marker({
        position: pos,
        map: map,
        name: "Aux temps d'avant",
        title: "Aux temps d'avant",
        icon: "img/blue_MarkerA.png"
    });
</script>
</body>
</html>