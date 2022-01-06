<?php

include "bdd.php";



if(isset($_GET['upcategory'])) {
    $id = $_GET['upcategory'];
    $sql = ("UPDATE `medical` SET `chapitres`= WHERE 1");
    $nouvelleConnexion->exec($sql);
}
?>
