<?php

include 'bdd.php';

    if(isset($_POST['ajouter'])){

 $lesDonnees = $nouvelleConnexion->prepare ("INSERT INTO `categories`( `nom`, `couleurs`) VALUES ( :nom , :couleurs)");


    //$lesDonnees->bindValue(':id', $_POST['id'], PDO::PARAM_STR);//
    $lesDonnees->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
    $lesDonnees->bindValue(':couleurs', $_POST['couleurs'], PDO::PARAM_STR);

    $insererCategorie = $lesDonnees->execute();

    if($insererCategorie){
        $resultat = "<h5> Categorie ajouté </h5>";
    }else{
        $resultat = "<h5> Échec de l'ajout de la categorie </h5>";
    }

 echo $resultat;
}
?>

