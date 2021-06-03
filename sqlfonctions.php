<?php


/**
 * fonction de selection en table sql
 * @param mixed $query passage de la requete
 * 
 * @return [type] array de retour de la query
 */
function selectTable($query)
{
    // connexion a la BDD
    $maDb   = mysqli_connect("localhost", "root", "", "magasin");
    $res = mysqli_query($maDb, $query);
   
    // verif si il y a eu un result (vide ou pas d'erreur)
    if(!$res)
        return null;
    //echo '<br/>Nombre de ligne : '.$res->num_rows.'<hr/>';

    // recup un premier enregistrement
    //$row    = mysqli_fetch_assoc($res);
    //print_r($row);

    // recup tout les enregistrements
    $arrayresult = array();

    //$rowscount = mysqli_num_rows($res);
    //echo 'rows count : '.$rowscount.'<hr/>';
    while($row = mysqli_fetch_assoc($res))
    {
        array_push($arrayresult, $row);
    };

    return $arrayresult;
}

//$result = selectTable("SELECT * FROM categorie ;");
//print_r($result);
/**
 * getProduit
 * 
 * Méthode de récupération de produit + cat
 *
 * @param  mixed $id
 * @return void
 */
function getProduit($id)
{
    $query="SELECT `idproduit`, PR.`titre` AS `titreProduit`, `ref`, `prix`, `photo`, PR.`description`, CA.`titre` AS `titreCat`, PR.`description` 
        FROM `produits` PR, `categorie` CA 
        WHERE `idcat`=`idcategorie` AND PR.`idproduit`=".$id.";";
    return selectTable($query);
}

function getProduits($search=false)
{
    $query="SELECT `idproduit`, `idcat`, `titre`, `ref`, `prix`, `photo`, `description` FROM `produits`;";
    return selectTable($query);
}
?>

