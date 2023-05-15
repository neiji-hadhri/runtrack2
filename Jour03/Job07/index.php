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
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    $premiercaractere = $str[0];
    $str = substr($str, 1) . $premiercaractere;
    for($i = 0; $i < strlen($str) - 1; $i++){
        $str[$i] = $str[$i + 1];
    }
    echo $str
    ?>
</body>
</html>