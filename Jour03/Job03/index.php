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
    $str = "I'm sorry Dave I'm afraid I can't do that";
    $voyelle = ['a','A','e','E','i','I','o','O','u','U','y','Y'];
    
    for ($i = 0; $i < strlen($str); $i++) {
      if (in_array($str[$i], $voyelle)) {
        echo $str[$i]; 
      }
    }
    
    
    
    ?>
</body>
</html>