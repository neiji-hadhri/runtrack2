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
    function calcule($nombre1,$opération,$nombre2){
        switch ($opération){
            case "+":
                return $nombre1 + $nombre2;
            case "-":
                return $nombre1 - $nombre2;
            case"*":
                return $nombre1 * $nombre2;
            case"/":
                if($nombre2 != 0){
                return $nombre1 / $nombre2;}
                else{
                    return "Erreur : Vous ne pouvez pas diviser par 0.";
                }
            case "%":
                return $nombre1 % $nombre2;

            default :
                echo "L'opération émise ne peut pas être effectué.Veuillez réessayer :)";
          }
        
    }
    $resultat = calcule(2,"*",5);
    echo "$resultat <br>";
    $resultat = calcule(2,"/",0);
    echo "$resultat <br>";
    $resultat = calcule(10,"/",2);
    echo "$resultat <br>";
    $resultat = calcule(10,"+",2);
    echo "$resultat <br>";
    $resultat = calcule(10,"-",2);
    echo "$resultat <br>";
    $resultat = calcule(10,"%",2);
    echo "$resultat <br>";
    $resultat = calcule(10,"=",2);
    ?>
    
</body>
</html>