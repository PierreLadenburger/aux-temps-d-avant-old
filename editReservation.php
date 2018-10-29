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
    $dateStart = new DateTime($_POST['dateStart']);
    $dateEnd = new DateTime($_POST['dateEnd']);
    $dateEnd->modify("+ 1 day");
    try {
        $period = new DatePeriod($dateStart, new DateInterval('P1D'), $dateEnd);
    } catch (Exception $e) {

    }
    foreach ($period as $key => $value) {
        $add->execute(array(
            "chambre" => $_POST['chambre'],
            "nom" => $_POST['nom'],
            "prenom" => $_POST['prenom'],
            "date" => $value->format('Y-m-d'),
        ));
    }
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
