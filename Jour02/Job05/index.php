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
    while($x <= 1000){
        if($x > 1){
        $i = 2; 
        while ($i < $x){
            if ($x % $i == 0){
                break;
            }
            $i++;
        }
        if ($i == $x){
            echo $x . "<br>";
        }
    }
    $x++;
}  
    ?>
</body>
</html>