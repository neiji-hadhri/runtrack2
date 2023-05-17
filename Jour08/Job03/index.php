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
    session_start();
    if(isset($_POST['reset'])){
        $_SESSION['nbvisites'] = 0;
    }
    elseif (isset($_POST['prenoms'])){
        echo "<ul>";
        foreach($_SESSION['prenoms'] as $prenom){
            echo $prenom <br>;
        }
        echo "</ul>";
    }
    else{
        echo "Aucun prénom enregistré.";
    }
    
    ?>
<form method = "post">
<label from="prenom">Prenom : </label>
<input type = "text" id="prenom" name ="prenom">
<button type ="submit"> Ajouter</button>
        
</form>
    <from method = "post">
    <button type="submit" name ="reset">Réinitialiser</button>
</body>
</html>