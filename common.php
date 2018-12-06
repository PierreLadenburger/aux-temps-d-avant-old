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
                <li style="border-bottom: 1px solid  #d7c9b8; float: none; "><a class="nav-link " href="forge.php" style="color: #d7c9b8;" ><i class="fa fa-bed"></i> La Forge</a></li>
                <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class=" " href="grange.php" style="color: #d7c9b8;"><i class="fa fa-bed"></i> La Grange</a></li>
                <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class="" href="alcove.php" style="color: #d7c9b8;"><i class="fa fa-bed"></i> L'Alcôve</a></li>
                <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class="" href="restaurants.php" style="color: #d7c9b8;"><i class="fa fa-map-marker"></i> Restaurants</a></li>
                <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class="" href="services.php" style="color: #d7c9b8;"><i class="fa fa-map-pin"></i> Services</a></li>
                <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class="" href="goldenBook.php" style="color: #d7c9b8;"><i class="fa fa-book"></i> Livre d'or</a></li>
                <!-- <li style="border-bottom: 1px solid  #d7c9b8; float: none;"><a class="" href="restaurants.php" style="color: #d7c9b8;"><i class="fa fa-map-marker"></i> Services</a></li> -->               
            </ul>
        </div>
    </nav>
SIDEMENU;
    echo $sideMenu;
}
