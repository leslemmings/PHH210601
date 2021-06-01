<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement-formulaire</title>
</head>

<body>
    <?php 
    $mavar=1;
    $mavar = $mavar + 3;
    echo $mavar; ?>

    <?php print_r($_POST) ; ?>

    <?php echo $_POST["titre-produit"] ; ?>

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

</body>

</html>