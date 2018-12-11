<?php
/**
 * Created by PhpStorm.
 * User: pierr
 * Date: 23/06/2018
 * Time: 12:32
 */

function printSideMenu()
{
    $sideMenu = <<<SIDEMENU
    <nav class="navbar navbar-default navbar-fixed-side" style="background-color:  #353942; border: 2px solid  #d7c9b8;">
        <div class="container">
            <ul class="nav navbar-nav" style="float: none; margin: 0 -15px">
                <li style="border-bottom: 1px solid  #d7c9b8; float: none; "><a class="nav-link " href="forge.php" style="color: #d7c9b8;" ><i class="fas fa-bed"></i> La Forge</a></li>
                <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class=" " href="grange.php" style="color: #d7c9b8;"><i class="fas fa-bed"></i> La Grange</a></li>
                <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class="" href="alcove.php" style="color: #d7c9b8;"><i class="fas fa-bed"></i> L'Alcôve</a></li>
                <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class="" href="restaurants.php" style="color: #d7c9b8;"><i class="fas fa-map-marker-alt"></i> Restaurants</a></li>
                <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class="" href="services.php" style="color: #d7c9b8;"><i class="fas fa-map-marker-alt"></i> Tourisme</a></li>
                <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class="" href="ailleurs.php" style="color: #d7c9b8;"><i class="fas fa-star"></i> Ailleurs</a></li>
                <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class="" href="goldenBook.php" style="color: #d7c9b8;"><i class="fas fa-book"></i> Livre d'or</a></li>
            </ul>
        </div>
    </nav>
SIDEMENU;
    echo $sideMenu;
}

function printGenericMenu()
{
    $genericMenu = <<<GENERICMENU
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
            <a class="navbar-brand js-scroll-trigger" href="index.php"  style="color: #d7c9b8; font-size: 20px;"><i class="fas fa-home"></i> Aux Temps D'Avant</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link js-scroll-trigger" href="displayBook.php" style="color: #d7c9b8;"><i class="fas fa-book"></i> Livre d'or</a></li>
                <li><a class="nav-link js-scroll-trigger" href="displayRestaurants.php" style="color: #d7c9b8;"><i class="fas fa-map-marker-alt"></i> Restaurants</a></li>
                <li class="dropdown" style="cursor: pointer;">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #d7c9b8; background-color: #353942;"><i class="fas fa-map-marker-alt"></i> Tourisme<span style="color: #d7c9b8;" class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color: #353942; border-color: #353942; font-size: 20px;">
                        <li><a class="nav-link js-scroll-trigger" href="balades.php" style="color: #d7c9b8;"> Balades</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="cites.php" style="color: #d7c9b8;"> Cités</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="musees.php" style="color: #d7c9b8;"> Musées</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="memoires.php" style="color: #d7c9b8;"> Mémoires</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="terroir.php" style="color: #d7c9b8;"> Terroir</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="divertissements.php" style="color: #d7c9b8;"> Divertissements</a></li>
                    </ul>
                </li>
                <li><a class="nav-link js-scroll-trigger" href="displayAilleurs.php" style="color: #d7c9b8;"><i class="fas fa-star"></i> Ailleurs</a></li>
                <li><a class="nav-link" href="login.php"><i class="fas fa-lock"></i></a> </li>

            </ul>
        </div>
    </div>
</nav>
GENERICMENU;

echo $genericMenu;
}