<?php

include 'bdd.php';

    if(isset($_POST['ajouter'])){

 $lesDonnees = $nouvelleConnexion->prepare ("INSERT INTO `medical` (`chapitres`) VALUES (NULL, 'Chapitre 1'), (NULL, 'Chapitre 2 ')");

    //$lesDonnees->bindValue(':id', $_POST['id'], PDO::PARAM_STR);//
    $lesDonnees->bindValue(':chapitre', $_POST['chapitre'], PDO::PARAM_STR);

    $insererCategorie = $lesDonnees->execute();

    // if($insererCategorie){
    //     $resultat = "<h5> Chapitre ajouté </h5>";
    // }else{
    //     $resultat = "<h5> Échec de l'ajout du chapitre </h5>";
    // }

//  echo $resultat;
}
?>

