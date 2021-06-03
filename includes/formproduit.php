<form action="traitement-formulaire.php" method="GET" role="form">
        <legend>Edition produit</legend>

        <div class="form-group">
            <label for="titre-produit">Produit</label>
            <input type="text" class="form-control" id="titre-produit" name="titre-produit" placeholder="nom produit">
            <label for="ref-produit">Référance</label>
            <input type="text" name="ref-produit" id="ref-produit" class="form-control" value="REF-" required="required"
                pattern="REF-[\d\w]{1,25}" title="">
            <label for="cat-produit">Catégortie</label>
            <?php 
                include 'sqlfonctions.php';
                $monResult = selectTable("SELECT idcategorie, titre, description FROM categorie ;");
            ?>
            <select name="" id="cat-produit" name="cat-produit" class="form-control" required="required">
                <?php
                    for($i=0;$i<count($monResult);$i++)
                    {
                    echo '<option value="'.$monResult[$i]["idcategorie"].'">'
                    .$monResult[$i]["titre"].' - '.$monResult[$i]["description"].'</option>'  ;
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
            <input type="number" name="prix-produit" id="prix-produit" class="form-control" value="" min="0" max=""
                step="0.1" required="required" title="Prix">

        </div>

        <div class="form-group">
            <label for="description-produit">Description</label>
            <textarea name="description-produit" id="description-produit" class="form-control" cols="30" rows="2"
                required="required" placeholder="Saisir description"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Valider</button>
    </form>