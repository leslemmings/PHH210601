<h2>Produit</h2>

<?php 
    // includes 
    include 'sqlfonctions.php';

    // recupération des paramètres de la page !
    $mesData=null;
    if(count($_GET) > 0)
    {
        $mesData=$_GET;
    }
    elseif(count($_POST) > 0)
    {
        $mesData=$_POST;
    }
    else{
        echo 'Aucune donnée trouvée !';
        header('Location: ?page=pageErreur&code=0');
    }

    // vérification des paramètres necessaire de la page
    if(isset($mesData["idp"]) and !empty($mesData["idp"]))
    {
        $idp = $mesData["idp"];
    }
    else
    {
        //exit(0);
        header('Location: ?page=pageErreur&code=1');
    }
?>

<div class="produit">
    <div class="left">
        <?php
        // recup du produit en base
        $retourProduit = getProduit($idp);
        // vérification des donées venant de la base
        if(!isset($retourProduit) or count($retourProduit) < 1)
        {
            header('Location: ?page=pageErreur&code=2');
        }
        else
        {
            $monProduit = $retourProduit[0];
        }
        // affichage partie gauche
        echo '<a href="'.$monProduit["photo"].'" target="_blank">';
        echo '<img src="'.$monProduit["photo"].'" class="img-responsive" alt="Piano"></a>';
        echo '<h3 class="prix">Prix : '.$monProduit["prix"].' € TTC*<h3>';
        ?>
    </div>
    <div class="right">
        <?php
            // Affichage partie droite
            echo '<h3 class="titre">'.$monProduit["titreProduit"].'</h3>';
            echo '<h4 class="cat">Categorie : '.$monProduit["titreCat"].'</h4>';
            echo '<h5 class="titredescriptif">Descriptif</h5>';
            echo '<p class="descriptif">'.$monProduit["description"].'</p>';
        ?>
    </div>
    <div class='buttons'>
        <button type="Ajouter" class="btn btn-primary">Ajouter Produit</button>
    </div>
</div>