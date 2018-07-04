<?php
/**
 * Created by PhpStorm.
 * User: pierr
 * Date: 20/05/2018
 * Time: 15:09
 */


 if (strcmp($_GET['type'], "add") == 0)
{
    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');
    $add = $bdd->prepare("INSERT INTO reservations(chambre, nom, prenom, date) VALUES (:chambre, :nom, :prenom, :date)");
    $add->execute(array(
       "chambre" => $_GET['chambre'],
       "nom" => $_GET['nom'],
       "prenom" => $_GET['prenom'],
       "date" => $_GET['date'],
    ));
    echo 'ok';
}
