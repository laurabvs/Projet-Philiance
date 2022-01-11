<html>
    <head>
        <link rel="stylesheet" href="view.css" />
    </head>

<body>

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

    <form method='GET' action=''>
        <select name="nom" size="1">
            <option value='medical'>Medico
            <option value='social'>Social
        </select>
        <button> Change </button>
    </form>

    </div>

    <?php include 'vueCategorie.php'; ?>
</body>
</html>