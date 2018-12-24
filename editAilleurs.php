<?php
/**
 * Created by PhpStorm.
 * User: pierr
 * Date: 30/08/2018
 * Time: 13:41
 */

if (isset($_POST['nom']) AND isset($_POST['adresse']) AND isset($_POST['lat']) AND isset($_POST['lng']) AND isset($_POST['site']) AND  isset($_POST['categorie'])
    && strcmp($_POST['action'], "add") == 0)
{
    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');
    $add = $bdd->prepare("INSERT INTO ailleurs(nom, adresse, lat, lng, site, categorie) VALUES (:nom, :adresse, :lat, :lng, :site, :categorie)");
    $add->execute(array(
        "nom" => $_POST['nom'],
        "adresse" => $_POST['adresse'],
        "lat" => $_POST['lat'],
        "lng" => $_POST['lng'],
        "site" => $_POST['site'],
        "categorie" => $_POST['categorie']
    ));
    echo 'Added successfully';
}
if (isset($_POST['id']) AND strcmp($_POST['action'], "delete") == 0)
{
    $bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');
    $add = $bdd->prepare("DELETE FROM ailleurs WHERE id = :id");
    $add->execute(array(
        "id" => intval($_POST['id']),
    ));
    echo 'Deleted successfully';
}