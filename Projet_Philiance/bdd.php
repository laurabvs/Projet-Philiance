<?php

try {

    $nouvelleConnexion= new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'root', '');

}
catch (Expection $e) {

    die ('Erreur: '.$e->getMessage()); 
}

?>