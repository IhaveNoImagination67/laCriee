<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=lacriee;charset=utf8', 'root', '');



$nomBateau = addslashes($_POST['nomBateau']);
$immBateau = addslashes($_POST['immBateau']);


try {
    if ($bdd != null) {

        $requete = "insert into bateau(nomBateau,immatriculationBateau) values ('".$nomBateau."','".$immBateau."')";
        $resultat = $bdd->prepare($requete);
       $resultat->execute();


        header('Location: gestion.php');

    }
} catch (PDOException $e) {
    die('Erreur: ' . $e->getMessage());
}
?>