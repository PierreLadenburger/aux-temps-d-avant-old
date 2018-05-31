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

<body style="font-family: Didot; font-size: 16px;">
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
                <li><a class="nav-link js-scroll-trigger" href="#" style="color: #d7c9b8;"><i class="fa fa-bed"></i> Editer</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="background-style">
    <div class="container" style="background-color: #d7c9b8; font-family: Didot;">
        <section  class="resume-section" id="apropos">
            <h2>ADMIN: Editer Planning</h2>
            <h3>La Forge</h3>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <?php
                    $bdd = new PDO('mysql:host=localhost;dbname=chambres;charset=utf8', 'root', '');

                    $rep = $bdd->query('SELECT date FROM reservations WHERE chambre=\'forge\'');
                    $date  = array();
                    foreach ($rep as $repBis)
                    {
                        $date[] = $repBis['date'];
                    }
                    ?>
                    <div style="margin-top: 10px; font-size: 15px; " id="datepickerForge"></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <form>
                        <div class="form-group">
                            <label style="min-width: 0;">Type d'édition</label>
                            <select class="form-control" id="type">
                                <option>ajouter</option>
                                <option>supprimer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Prénom</label>
                            <input id="prenom" name="prenom" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nom</label>
                            <input id="nom" name="nom" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input id="date" name="date" type="date" class="form-control">
                        </div>
                        <div id="addForge" class="btn btn-primary">Submit</div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script>

    var joursForge = <?php echo json_encode($date); ?>;

    $( "#addForge" ).click(function() {
        var type = $('#type').val();
        var prenom = $('#prenom').val();
        var nom = $('#nom').val();
        var date = $('#date').val();
        var dataString = "prenom=" + prenom + "&nom=" + nom + "&date=" + date + "&type=" + type;
        $.ajax({
            type: 'POST',
            url: './editReservation.php',
            data: dataString,
            dataType: "html",
            success: function(data){
                var prenom = $('#prenom').val("");
                var nom = $('#nom').val("");
                var date = $('#date').val("");
               // location.reload();
            }
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