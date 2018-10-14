<?php
/**
 * Created by PhpStorm.
 * User: pierr
 * Date: 30/08/2018
 * Time: 13:41
 */

if (isset($_POST['nom']) AND isset($_POST['description']) AND isset($_POST['type']) AND isset($_POST['lat']) AND isset($_POST['lng']) AND isset($_POST['adresse'])
    && strcmp($_POST['action'], "add") == 0)
{
    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');
    $add = $bdd->prepare("INSERT INTO services(nom, description, type, lat, lng, adresse) VALUES (:nom, :description, :type, :lat, :lng, :adresse)");
    $add->execute(array(
        "nom" => $_POST['nom'],
        "description" => $_POST['description'],
        "type" => $_POST['type'],
        "lat" => $_POST['lat'],
        "lng" => $_POST['lng'],
        "adresse" => $_POST['adresse']
    ));
    echo 'Added successfully';
}
if (isset($_POST['id']) AND strcmp($_POST['action'], "delete") == 0)
{
    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');
    $add = $bdd->prepare("DELETE FROM services WHERE id = :id");
    $add->execute(array(
        "id" => intval($_POST['id']),
    ));
    echo 'Deleted successfully';
}