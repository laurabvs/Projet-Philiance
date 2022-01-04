<?php

include "bdd.php";



if(isset($_GET['upcategory'])) {
    $id = $_GET['upcategory'];
    $sql = "UPDATE `category` SET `Nom`= "Medico","Social",`Couleurs`=value-3 WHERE 1";
    $nouvelleConnexion->exec($sql);
}
?>
