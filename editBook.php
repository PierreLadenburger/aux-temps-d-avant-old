<?php
/**
 * Created by PhpStorm.
 * User: pierr
 * Date: 22/10/2018
 * Time: 07:59
 */
if (strcmp($_POST['type'], "add") == 0)
{
    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');
    $add = $bdd->prepare("INSERT INTO livre(nom, date, message) VALUES (:nom, :date, :message)");
    $add->execute(array(
        "nom" => $_POST['nom'],
        "date" => $_POST['date'],
        "message" => $_POST['message'],
    ));
    echo 'Added successfully';
}
if (strcmp($_POST['type'], "delete") == 0 AND isset($_POST['id']))
{
    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');
    $add = $bdd->prepare("DELETE FROM livre WHERE id = :id");


    $add->execute(array(
        "id" => intval($_POST['id']),
    ));
    echo 'Deleted successfully';
}