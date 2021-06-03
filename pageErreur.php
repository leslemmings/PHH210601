<h2>page erreur</h2>

<?php
if(isset($_GET["code"]))
{
    switch ($_GET["code"]) {
        case '0':
            $err = "Erreur : pas de POST ou GET";
            break;
        case '1':
            $err = "Erreur : pas d'id produit";
            break;
        case '2':
            $err = "Erreur : idproduit inconnu";
            break;
        case '3':
            $err = "Erreur : Problème l'ors de la recupération de produits";
            break;
        default:
        $err = "Erreur : Erreur inconnue"; 
        break;
    }
    echo '<p>'.$err.'</p>';
}
else
{
include('includes/home.php'); 
}
?>