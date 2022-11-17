<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Quizz</title>

</head>

<body>
    <div class="qst-quiz" >
        <h1 class="h1-quiz">QUIZ DES SCIENCES</h1>

         <form method="post" >
            <label for="namePlayer">Entrer votre Nom</label>
            <input id="namePlayer" type="text" name="namePlayer">  

            <!--faire le bouton jouer de type submit-->
            <button type="submit" class="btn" name="btn-connect">Commencer le Quiz</button>
            
        </form>   
    </div>   
    <!--affincher le nom de joueur sur la page de connexion-->  
    <?php
    if(isset($_POST['btn-connect'])){

        $namePlayer = $_POST['namePlayer'];

        //stocker le contenu rentré par le player dans une variable
        $_SESSION['namePlayer'] = $namePlayer;
        //faire la connexion sur la page de traitement 
      
        header("location: Question1.php");

    }
   
    ?>

</body>
</html>  
