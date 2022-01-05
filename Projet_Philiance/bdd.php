<?php

try {

    $nouvelleConnexion= new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'root', '');

}
catch (Expection $e) {

    die ('Erreur: '.$e->getMessage()); 
}
$sqlQuery = 'SELECT * FROM `medical` ORDER BY `medical`.`id` ASC'; 'SELECT * FROM `social` ORDER BY `social`.`id` ASC';
    $tacheStatement = $nouvelleConnexion->prepare($sqlQuery);
    $tacheStatement->execute();
    $tache = $tacheStatement->fetchAll();

?>