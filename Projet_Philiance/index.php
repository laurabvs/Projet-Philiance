<link rel="stylesheet" href="view.css" />

<?php

include 'bdd.php';
include 'category.php';


if (isset($_POST['ajouter_categorie'])) { 
    if (empty($_POST['ajouter_categorie'])) {  
        $erreurs = 'Vous devez indiquer la categorie à ajouter';
    } else {
        $category = $_POST['ajouter_categorie'];
       //$etat = 0
      $sql= ("INSERT INTO `categories`(`nom`, `couleurs`) VALUES (:nom , :couleurs)");
        //$lesDonnees->bindParam(':nom', $nom);
      $nouvelleConnexion->exec($sql);

      
    }
}
?>

<div class="header">
    <p class="header_titre"> Modification des catégories</p>
</div>
 
 
    <form class="categorie_input" method="post" action="index.php">
        <input id="inserer" type="text" name="creer_categorie"/>
        <button id="envoyer">Créer</button>
    </form>

<table class="categories">
    <tr>
        <th>
            Créer
        </th>
        <th>
            Modifier
        <th>
            Archiver
        </th>
        <th>
            Publier
        </th>
    </tr>


<?php


// if (isset($_POST['ajouter_category'])) { 
//     if (empty($_POST['ajouter_category'])) {  
//         $erreurs = 'Vous devez indiquer la categorie à ajouter';
//     } else {
//         $category = $_POST['ajouter_category'];
//        //$etat = 0
//       $sql= 'INSERT INTO `category`(`id`, `Nom`, `Couleurs`) VALUES ()';
//         //$lesDonnees->bindParam(':nom', $nom);
//       $nouvelleConnexion->exec($sql);

      
//     }
// }

//  if($category['category'] == 0 ){
//     echo 'Secteur Medico';


// }else {
//     echo 'Secteur Social';
// } 

?>