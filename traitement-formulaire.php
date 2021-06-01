<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement-formulaire</title>
</head>

<body>
    <h1>Création variable + calcule</h1>
    <?php 
    $mavar=1;
    $mavar = $mavar + 3;
    echo $mavar; ?>

    <h1>Affichage tableau POST</h1>
    <?php print_r($_POST) ; ?>

    <h1>Affichage valeur d'un champ POST</h1>
    <?php echo $_POST["titre-produit"] ; ?>

    <h1>Test POST ou GET</h1>
    <?php 
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
        exit(0);
    }
    print_r($mesData);
     ?>

<h1>Check de la presence de la photo</h1>
<?php 
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
        exit(0);
    }
    $maPhoto=null;
    if(array_key_exists("photo-produit", $mesData) && strlen($mesData["photo-produit"]))
    {
        $maPhoto=$mesData["photo-produit"];
    }
    else
    {
        echo "pas de photo";
    }
    echo $maPhoto;
     ?>

</body>

</html>