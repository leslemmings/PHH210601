<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP store</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style/magasin.css" />
</head>

<body>
    <?php 
        include('includes/navbar.php'); 
        include('includes/titre.php'); 
        include('dispatch.php');
    ?>

<script>
        document.querySelector("nav form input[name=recherche]")
            .addEventListener('change',function(evt){
                if(evt.target.value.length<=1){
                    document.querySelector('#completion-container').style.display='none';
                    return;
                }
                fetch('http://localhost/phh/autocomplete.php?recherche='+evt.target.value)
                    .then(e=>e.text())
                    .then(t=>{
                        document.querySelector('#completion-container').innerHTML=t;
                        document.querySelector('#completion-container').style.display='block';
                    });
                }
            );
    </script>
    
</body>

</html>