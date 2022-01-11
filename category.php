<?php

include 'bdd.php';

if(isset($_POST['ajouter'])){

    $lesDonnees = $nouvelleConnexion->prepare("INSERT INTO `medical` (`chapitres`) VALUES (NULL, 'Chapitre 1'), (NULL, 'Chapitre 2 ')");

    $lesDonnees->bindValue(':chapitre', $_POST['chapitre'], PDO::PARAM_STR);

    $insererCategorie = $lesDonnees->execute();
}
?>

