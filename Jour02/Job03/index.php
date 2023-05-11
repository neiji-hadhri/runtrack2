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
    $x = 0;
    while ($x <= 100){
        if ($x == 42){
            echo "La Plateforme_<br>";
        }
        elseif (0 > $x || $x < 21 ){
            echo "$x <i><br>";
            }
        elseif (25 > $x || $x < 51){
            echo "<u>$x</u><br>";
        }
        
    $x++;
    }
    ?> 
</body>
</html>