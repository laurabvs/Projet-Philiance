<?php 
    $categorie = "medical";
    if(isset($_GET['nom'])) { 
        $categorie = $_GET['nom'];
    } 
?>
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
        $reponse = $nouvelleConnexion->query("SELECT * FROM $categorie");
    while ($medical = $reponse->fetch()) { 
    ?>
        <tr>
            <td><?php echo $medical['chapitres'] ?></td>
            <?php 
            include 'upcategory.php'; 
            include 'publierCategorie.php';
            ?>

            <td><a class="update" href="index.php?upcategory=<?php echo $medical['chapitres'] ?>"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets10.lottiefiles.com/packages/lf20_dfulynng.json"  background="transparent"  speed="1"  style="width: 75px; height: 75px;"    ></lottie-player></a></td>
            <td><a class="suppr" href="index.php?deletecategory=<?php echo $medical['chapitres'] ?>"> <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_a5ghwfwe.json"  background="transparent"  speed="1"  style="width: 75px; height: 75px;"     ></lottie-player></a></td>
            <td><a class="update" href="index.php?publierCategorie=<button onclick="myFunction()><a class="update" href="index.php?publierCategorie="script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_r4alsuls.json"  background="transparent"  speed="1"  style="width: 85px; height: 85px;" ></lottie-player></a></td>
           
        </tr>
        
    <?php
    }
    ?>