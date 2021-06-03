<style>
    #auto-complet img{
        width:48px ;
        height:48px ;
    }
</style>

<?php
    // includes 
    include_once('sqlfonctions.php');

    $mesProduits=getProduits($_GET["recherche"]);
?>

<table id="auto-complet">
    <?php
    foreach ($mesProduits as $produit)
    {
    ?>
        <tr>
            <td>
                <img src="<?=$produit["photo"];?>" class="img" alt="Image">
            </td>
            <td>
                <?=$produit["titre"];?>
            </td>
        </tr>
    <?php
    }
    ?>
    
</table>
