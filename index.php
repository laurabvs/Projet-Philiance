<link rel="stylesheet" href="view.css" />

<?php

include 'bdd.php';
include 'category.php';

?>


<div class="header">
    <p class="header_titre"> Modification des catégories</p>
</div>
 
<div class= "menu-deroulant">

    <?php
    $medico=1;
    $social=2;
    ?>

<FORM>
<SELECT name="nom" size="1">
<OPTION>Medico
<OPTION>Social
</SELECT>
</div>

<table class="categories">
    <tr>
        <th>
            Chapitres
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
    if ($medico = 1)
?>


    <?php
    $reponse = $nouvelleConnexion->query('SELECT * FROM `medical`');
while ($medical = $reponse->fetch()) { 
        ?>
        <tr>
            <td><?php echo $medical['chapitres'] ?></td>
            <?php include 'upcategory.php'; ?>
           
        </tr>

        <!-- <td><a class="suppr" href="index.php?del_id=<?php echo $tache['id'] ?>"> X</a></td>
            -->
        <td><a class="update" href="index.php?upcategory=<?php echo $medical['chapitres'] ?>">V</a></td>

    <?php
    }
 
 
    ?>
 
 
</table>
