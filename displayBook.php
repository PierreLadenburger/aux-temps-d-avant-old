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
    <h2 class="titre_all" style="margin-top: 8rem !important">Livre d'or</h2>
    <div class="messages-container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5">
                <img src="img/livre.jpg" width="350">
            </div>

            <div class="col-lg-8 col-md-7 col-sm-7">
                <?php
                try {
                    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

                    $rep = $bdd->query('SELECT * FROM livre  ORDER BY date ASC');
                    foreach ($rep as $repBis)
                    {
                        echo "<div class='message''>
                                   <div>
                                       " . $repBis['message'] .
                                   "</div>
                                    <br>
                                    <div>". $repBis['nom'] .
                                   "</div>
                                    <div>" . date('d-m-Y', strtotime($repBis['date'])) .
                                   "</div>
                                    <a class=\"prev-message\" onclick=\"plusSlides(-1)\">&#10094;</a>
                                    <a class=\"next-message\" onclick=\"plusSlides(1)\">&#10095;</a>
                             </div>";
                    }
                }
                catch (PDOException $exception)
                {
                    echo $exception->getMessage();
                }
                ?>
            </div>
            
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="book.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>