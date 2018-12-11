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
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css">
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
    <h2 class="titre_all" style="margin-top: 8rem !important">Restaurants</h2>
    <div class="messages-container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5">
                <!-- LISTE DES SERVICES -->
                <?php
                try {
                    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

                    $rep = $bdd->query('SELECT * FROM restaurants');
                    foreach ($rep as $repBis)
                    {
                        echo "<div>
                                   <div class='text'>
                                       " . $repBis['nom'] .
                            "</div>                                    
                                    <div class='text'>". $repBis['adresse'] .
                            "</div>
                             <a style='color: darkred;' href='".$repBis['site'] ."'>" . $repBis['site'] ."</a><br>
                             <button style='background-color: darkred; border-color: darkred;' class='btn btn-info' id='road' value='". $repBis['lat'] . "|" . $repBis['lng'] . "|" . $repBis['nom'] . "'><i class='fas fa-map-marker-alt'></i></button>
                             <br><br>                                   
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZwFBQDXkJtIr5ZGpmXKQpHcbd025gyWU&"></script>
<script>
    var pos = {lat: 48.903975, lng: 7.661313};
    var flightPath;
    var map = new google.maps.Map(document.getElementById('mapservices'), {
        zoom: 10,
        center: pos
    });


    var marker = new google.maps.Marker({
        position: pos,
        map: map,
        name: "Aux temps d'avant",
        title: "Aux temps d'avant",
        icon: "img/blue_MarkerA.png"
    });


    $(document).on('click', '#road', function() {

        console.log($(this).val());
        var coordinates = $(this).val().split('|');
        var lat = 48.903975;
        var lng = 7.661313;
        var url = "https://api.openrouteservice.org/directions?api_key=5b3ce3597851110001cf62489a2884c06fc546dd91438fa7e6046fb7&coordinates="+ lng + "," + lat + "|" + coordinates[1] + "," + coordinates[0] + "&profile=driving-car&geometry=true&geometry_format=polyline";
        console.log(coordinates[0]);
            //var dataString = "id=" + $(this).val() + "&type=delete";
            $.ajax({
                type: "GET",
                url: url,
                success: function(resultData){

                    var pos = new google.maps.LatLng(coordinates[0], coordinates[1]);
                    var dist = resultData.routes[0].summary.distance / 1000;
                    var time = resultData.routes[0].summary.duration / 60;
                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map,
                        name: "Aux tem",
                        title: coordinates[2] + "\ndistance: " + dist.toFixed(2) + " km\ntemps: " + time.toFixed(0) + " min",
                        icon: "img/red_MarkerA.png"

                });
                    var flightPlanCoordinates = [];
                    var pathCoordinates = resultData.routes[0].geometry;
                    pathCoordinates.forEach(function (element) {
                        console.log(parseFloat(element[0]));
                        console.log(element[1]);
                        flightPlanCoordinates.push(new google.maps.LatLng(element[1], element[0]));
                    });
                    console.log(flightPlanCoordinates);


                    flightPath = new google.maps.Polyline({
                        path: flightPlanCoordinates,
                        geodesic: true,
                        strokeColor: '#FF0000',
                        strokeOpacity: 1.0,
                        strokeWeight: 2
                    });
                    flightPath.setMap(map);
                    //var array = json.routes.0.geometry;

                }
            });

    });
</script>
<script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>