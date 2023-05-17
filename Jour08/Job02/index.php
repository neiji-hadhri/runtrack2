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
    if(isset($_POST['reset'])){
        setcookie('nbvisites', '', time() -3600);
        $nbvisites = 0;
    }
    elseif(isset($_COOKIE['nbvisites'])){
        $nbvisites = $_COOKIE['nbvisites'] + 1;
    }else{
        $nbvisites = 1 ;
    }
    setcookie('nbvisites',$nbvisites, time()+3600*24);
    echo "Nombre de visites : " . $nbvisites;

    ?>
    <form method = 'post'>
        <button type="submit" name = "reset">Réinitialiser</button>
    
    
</body>
</html>