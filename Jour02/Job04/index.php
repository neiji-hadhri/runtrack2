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
    $x = 1 ;
    while($x <= 100){
        if ($x % 15 == 0){
            echo "FizzBuzz<br>";
        }
        elseif ($x % 5 == 0){
            echo "Buzz<br>";}
        elseif ($x % 3 == 0){
            echo "Fizz<br>";}
        else {
            echo "$x<br>";
        }
    $x++;
    }
    ?>
</body>
</html>