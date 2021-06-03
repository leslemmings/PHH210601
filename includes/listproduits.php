<h2>Liste produits</h2>

<?php 
    // includes 
    include 'sqlfonctions.php';

    $maRecherche = null;
    if(isset($_GET["recherche"]))
    {
        $maRecherche = $_GET["recherche"];
        if(strlen($maRecherche)>0)
        {
            echo 'Pour la recherche :'.$maRecherche;
        }
    }
    // recup du produit en base
    $retourProduit = getProduits($maRecherche);
    // vérification des donées venant de la base
    if(!isset($retourProduit) or empty($retourProduit))
    {
        //header('Location: ?page=pageErreur&code=3');
        echo '</br>Aucun produit trouvé.';
        exit(0);
    }
    else
    {
        $mesProduits = $retourProduit;
        echo 'Il y a '.count($mesProduits).' résultat(s)';
    }
?>

<div class="listProduits">
        <?php 
            for($i=0;$i<count($mesProduits);$i++)
            {
                $monProduit = $mesProduits[$i];
        ?>

        <div class="produits">
            <img src="<?=$monProduit["photo"]?>" class="img" alt="img">
            <h3 class="titre"><?=$monProduit["titre"]?></h3>
            <h3 class="prix"><?=$monProduit["prix"]?> €</h3>
            <a href="?page=produit&idp=<?=$monProduit["idproduit"]?>" target="_blank" rel="noopener noreferrer">
            <button type="button" class="btn btn-primary">Voir Produit</button></a>
            <button type="button" class="btn btn-primary">Ajouter Produit</button>
        </div>
        
        <?php
            }
        ?>

</div>