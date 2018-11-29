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

    <style>
        #mapservices {
            width: 470px;
            height: 360px;
        }
    </style>
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
        </div>
    </div>
</nav>

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
                                   <div>
                                       " . $repBis['nom'] .
                            "</div>                                    
                                    <div>". $repBis['adresse'] .
                            "</div>
                             <a href='".$repBis['site'] ."'>" . $repBis['site'] ."</a>
                             <button class='btn btn-info' id='road' value='". $repBis['lat'] . "|" . $repBis['lng'] . "'><i class='fa fa-map-marker'></i></button>                                   
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
                <div id="mapservices"></div>
            </div>
            
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZwFBQDXkJtIr5ZGpmXKQpHcbd025gyWU&"></script>
<script>
    var pos = {lat: 48.903975, lng: 7.661313};
    var map = new google.maps.Map(document.getElementById('mapservices'), {
        zoom: 11,
        center: pos
    });

    var marker = new google.maps.Marker({
        position: pos,
        map: map,
        name: "Aux temps d'avant",
        title: "Aux temps d'avant",
    });

    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

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
                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map,
                        name: "Aux temps d'avant",
                        title: "Aux temps d'avant",
                    });
                    var flightPlanCoordinates = [];
                    var pathCoordinates = resultData.routes[0].geometry;
                    pathCoordinates.forEach(function (element) {
                        console.log(parseFloat(element[0]));
                        console.log(element[1]);
                        flightPlanCoordinates.push(new google.maps.LatLng(element[1], element[0]));
                    });
                    console.log(flightPlanCoordinates);


                    var flightPath = new google.maps.Polyline({
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
</body>
</html>