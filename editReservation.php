<?php
/**
 * Created by PhpStorm.
 * User: pierr
 * Date: 20/05/2018
 * Time: 15:09
 */

$bdd = new PDO('mysql:host=localhost;dbname=chambres;charset=utf8', 'root', '');

if (strcmp($_POST['type'], "ajouter") == 0)
{
    $req = $bdd->prepare('INSERT INTO reservations(chambre, date, nom, prénom) VALUES(:chambre, :date, :nom, :prenom)');
    $chambre = "forge";
    $req->execute(array(
        'chambre' => $chambre,
        'date' => $_POST["date"],
        'nom' => $_POST["nom"],
        'prenom' => $_POST["prenom"]
    ));
    echo 'ok ajouter';
}
else if (strcmp($_POST['type'], "supprimer") == 0)
{
    $req = $bdd->prepare('DELETE FROM reservations WHERE chambre = :chambre AND date = :date');
    $chambre = "forge";
    $req->execute(array(
        'chambre' => $chambre,
        'date' => $_POST["date"]
    ));
    echo $_POST["date"];
}
