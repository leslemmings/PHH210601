<h2>Liste produits</h2>

<?php 
    // includes 
    include 'sqlfonctions.php';

    // recup du produit en base
    $retourProduit = getProduits();
    // vérification des donées venant de la base
    if(!isset($retourProduit))
    {
        header('Location: ?page=pageErreur&code=3');
    }
    else
    {
        $mesProduits = $retourProduit;
    }
?>

<style type="text/css">
    .listProduits .produits>*{display:inline;vertical-align:middle}
    .listProduits .produits img{width:200px;}
</style>

<div class="listProduits">
        <?php 
            for($i=0;$i<count($mesProduits);$i++)
            {
                $monProduit = $mesProduits[$i];
        ?>

        <div class="produits">
            <img src="<?=$monProduit["photo"]?>" class="img" alt="img">
            <h3 class="titre"><?=$monProduit["titre"]?></h3>
            <h3 class="titre"><?=$monProduit["prix"]?></h3>
            <a href="?page=produit&idp=<?=$monProduit["idproduit"]?>" target="_blank" rel="noopener noreferrer">
            <button type="button" class="btn btn-primary">Voir Produit</button></a>
            <button type="button" class="btn btn-primary">Ajouter Produit</button>
        </div>
        
        <?php
            }
        ?>

</div>