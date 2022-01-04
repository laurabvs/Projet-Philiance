<?php 

    include 'bdd.php';

    if(isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $sql = "DELETE FROM category WHERE id=$id";
    $nouvelleConnexion->exec($sql);
}
?>