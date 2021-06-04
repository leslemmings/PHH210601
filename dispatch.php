<?php
if(isset($_GET["page"]))
{
    switch ($_GET["page"]) {
        case 'new':
        case 'saveproduit':
            include 'sqlfonctions.php';

            if(isset($_POST["titre-produit"])
            && isset($_POST["cat-produit"]))
            {
                $result=insertSqlProduit($_POST["titre-produit"],
                $_POST["ref-produit"],
                $_POST["prix-produit"],
                $_POST["description-produit"],
                $_POST["cat-produit"]);
                
                
                $_GET["idp"]=$result;

            }
        case 'edit':
            include('includes/formproduit.php');
            break;
        case 'panier':
            include('includes/panier.php');
            break;
        case 'listproduits':
            include('includes/listproduits.php');
            break;
        case 'produit':
            include('includes/produit.php');
            break;
        case 'produit':
            include('includes/search.php');
             break;
        case 'pageErreur':
                include('pageErreur.php');
            break;
        default:
            include('includes/home.php'); 
        break;
    }
}
else
{
    include('includes/home.php'); 
}
?>