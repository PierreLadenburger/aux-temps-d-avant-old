<?php
/**
 * Created by PhpStorm.
 * User: pierr
 * Date: 18/12/2018
 * Time: 17:58
 */

$bdd = new PDO('mysql:host=localhost;dbname=aux-temps-d-avant;charset=utf8', 'adminCura', 'adminCura');

$rep = $bdd->prepare('SELECT * FROM ailleurs');
$rep->execute();

$json = json_encode($rep->fetchAll());
echo $json;