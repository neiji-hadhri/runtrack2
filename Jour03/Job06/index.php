<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "Les choses que l'on possede finissent par nous posseder.";
    for ($i=strlen($str) - 1; $i >= 0 ; $i--){
        echo $str[$i];
    }
    ?>
</body>
</html>