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
    $array = [200, 204, 173, 98, 171, 404, 459] ;{
        foreach ($array as $nombre){
        if ($nombre % 2 == 0){
        echo "$nombre est pair<br>";
    }else{
        echo "$nombre est impair<br>";}
    }
}
    ?>
</body>
</html>