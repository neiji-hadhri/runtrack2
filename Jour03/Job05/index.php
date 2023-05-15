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
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
    $dic = array("consonnes" => 0, "voyelles" => 0 );
    $voyelles = ['a','A','e','E','i','I','o','O','u','U','y','Y'];
    $consonnes = ['B','b','c', 'C', 'D','d','F','f' ,'g','G', 'H','h','J','j' ,'K','k', 'L','l', 'M','m', 'N','n', 'P','p', 'Q','q', 'R','r', 'S','s', 'T','t', 'v', 'V', 'W','w', 'X','x', 'z', 'Z'];
    for ($i =0; $i < strlen($str);$i++){
        echo$str[$i];

        if (in_array($str[$i],$voyelles)){
            $dic["voyelles"]++;
        }
        elseif (in_array($str[$i],$consonnes)){
            $dic["consonnes"]++;
        }
    }
    echo"<table>";
    echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
    echo"<tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody";
    echo "</table>";
    ?>
</body>
</html>