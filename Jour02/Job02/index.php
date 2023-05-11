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
    $x = 1;
    while ($x <=1337){
        if ($x == 26 || $x == 37 || $x == 88 || $x == 1111 || $x == 3233){
            $x++;
        }
        else{
            echo "$x <br>";
            $x++; 
        }
    }
    ?>
</body>
</html>