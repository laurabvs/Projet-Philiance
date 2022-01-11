<?php
include "bdd.php";

if(isset($_GET['publierCategorie'])) {
    $id = $_GET['publierCategorie'];
    $sql = ("UPDATE `medical` SET `chapitres`= WHERE 1");
    $nouvelleConnexion->exec($sql); 
}

?>
