<h2>Liste produits</h2>

<?php 
    // includes 
    include 'sqlfonctions.php';

    // recup du produit en base
    $retourProduit = getListProduits();
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
    .listProduits .produits img{width:384px;}
</style>

<div class="listProduits">
    <div class="produits">
        <?php 
            for($i=0;$i<count($mesProduits);$i++)
            {
                echo '<img src="'.$mesProduits[$i]["photo"].'" class="img" alt="img">';
                echo '<h3 class="titre">'.$mesProduits[$i]["titre"].'</h3>';
                echo '<h3 class="titre">'.$mesProduits[$i]["prix"].'</h3>';
                echo '<button type="Ajouter" class="btn btn-primary">Ajouter Produit</button>';
            }
        ?>
    </div>
</div>