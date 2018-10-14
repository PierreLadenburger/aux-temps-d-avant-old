<?php
/**
 * Created by PhpStorm.
 * User: pierr
 * Date: 20/05/2018
 * Time: 15:09
 */


if (strcmp($_POST['type'], "add") == 0)
{
    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');
    $add = $bdd->prepare("INSERT INTO reservations(chambre, nom, prenom, date) VALUES (:chambre, :nom, :prenom, :date)");
    $add->execute(array(
       "chambre" => $_POST['chambre'],
       "nom" => $_POST['nom'],
       "prenom" => $_POST['prenom'],
       "date" => $_POST['date'],
    ));
    $addHisto = $bdd->prepare("INSERT INTO historique(chambre, nom, prenom, date) VALUES (:chambre, :nom, :prenom, :date)");
    $addHisto->execute(array(
        "chambre" => $_POST['chambre'],
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "date" => $_POST['date'],
    ));
    echo 'Added successfully';
}
if (strcmp($_POST['type'], "delete") == 0 AND isset($_POST['id']))
{
    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');
    $add = $bdd->prepare("DELETE FROM reservations WHERE id = :id");


    $add->execute(array(
        "id" => intval($_POST['id']),
    ));
    echo 'Deleted successfully';
}
if (strcmp($_POST['type'], "deleteHisto") == 0 AND isset($_POST['id']))
{
    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');
    $add = $bdd->prepare("DELETE FROM historique WHERE id = :id");


    $add->execute(array(
        "id" => intval($_POST['id']),
    ));
    echo 'Deleted successfully';
}