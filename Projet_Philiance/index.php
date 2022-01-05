<link rel="stylesheet" href="view.css" />

<?php

include 'bdd.php';
include 'category.php';

?>


<div class="header">
    <p class="header_titre"> Modification des catégories</p>
</div>
 
<div class= "menu-deroulant">
<FORM>
<SELECT name="nom" size="1">
<OPTION>Médico
<OPTION>Social
</SELECT>
</div>

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
    $reponse = $nouvelleConnexion->query('SELECT * FROM `medical`');
while ($medical = $reponse->fetch()) { 
        ?>
        <tr>
            <td><?php echo $medical['chapitres'] ?></td>
            <?php include 'upcategory.php'; ?>
           
        </tr>

    <?php
    }
 
 
    ?>
 
 
</table>
