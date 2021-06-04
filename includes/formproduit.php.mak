<form action="?page=saveproduit<?=isset($_GET["idp"])?"&idp=".$_GET["idp"]:"" ?>" method="POST" role="form">

        <?php 
        include_once('sqlfonctions.php');

        if(isset($_GET["idp"]))
        {
            $prod = getProduit($_GET["idp"])[0];
        }
        else
        {
            $prod = null;
        }

        if(!isset($_GET["page"]))
        {
            echo '<legend>¨Produit</legend>';
        }
        else if($_GET["page"]=="new")
        {
            echo '<legend>Nouveau produit</legend>';
        }
        else if($_GET["page"]=="edit")
        {
            echo '<legend>Editer produit</legend>';
        }
        else if($_GET["page"]=="saveproduit")
        {
            echo '<legend>Nouveau produit créé !</legend>';
        }
        ?>

        <div class="form-group">
            <label for="titre-produit">Produit</label>
            <input type="text" 
                class="form-control" 
                id="titre-produit" 
                name="titre-produit" 
                placeholder="nom produit"
                value="<?= $prod?$prod["titreProduit"]:"" ?>"
            >
            <label for="ref-produit">Référance</label>
            <input type="text" name="ref-produit" id="ref-produit" class="form-control" required="required"
                pattern="REF-[\d\w]{1,25}" title="" value="<?= $prod?$prod["ref"]:"REF-" ?>">
            <label for="cat-produit">Catégortie</label>
            <?php 
                include_once('sqlfonctions.php');
                $monResult = selectTable("SELECT idcategorie, titre, description FROM categorie ;");
            ?>
            <select id="cat-produit" name="cat-produit" class="form-control" required="required" >
                <?php
                    for($i=0;$i<count($monResult);$i++)
                    {
                ?>
                    <option value="<?=$monResult[$i]["idcategorie"]?>"
                    <?=($prod["idcategorie"]==$monResult[$i]["idcategorie"])?"selected":""?>
                    >
                        <?=$monResult[$i]["titre"].' - '.$monResult[$i]["description"]?>
                    </option>
                <?php
                    };
                ?>
            </select>

        </div>
        <div class="form-group">
            <label for="photo-produit">Photo</label>
            <input type="file" class="form-control" id="photo-produit" name="photo-produit"
                placeholder="selectionnez photo">
        </div>

        <div class="form-group">
            <label for="prix-produit">Prix</label>
            <input type="number" name="prix-produit" id="prix-produit" class="form-control" min="0" max=""
                step="0.1" required="required" title="Prix" value="<?= $prod?$prod["prix"]:"" ?>">

        </div>

        <div class="form-group">
            <label for="description-produit">Description</label>
            <textarea name="description-produit" id="description-produit" class="form-control" cols="30" rows="2"
                required="required" placeholder="Saisir description"><?= $prod?$prod["description"]:"" ?></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Valider</button>
    </form>