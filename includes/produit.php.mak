<h2>Produit</h2>

<!-- photo + prix -->
<div class="produit">
    <div class="left">
        <img src="https://piano-lille.fr/2416-large_default/august-forster-125-piano-droit.jpg" class="img-responsive" alt="Piano">
        <h3 class="prix">12,88€<h3>
    </div>
    <div class="right">
        <?php
            for($i=0;$i<count($monResult);$i++)
            {
                echo '<option value="'.$monResult[$i]["idcategorie"].'">'
                .$monResult[$i]["titre"].' - '.$monResult[$i]["description"].'</option>'  ;
            };
        ?>
        <h3 class='titre'>Un Piano</h3>
        <h4 class='cat'>Categorie : Corde</h4>
        <h5 class='titredescriptif'>Descriptif</h5>
        <p class='descriptif'>blablabla</p>
    </div>
    <div class='buttons'>
        <button type="Ajouter" class="btn btn-primary">Ajouter Produit</button>
    </div>
</div>