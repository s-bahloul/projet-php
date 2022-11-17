<?php
//ouvrir une nouvelle session 
session_start();

//récupére le nom du joueur avec $_post et la valeur de form et l'afficher à l'accueil
if(isset($_POST['namePlayer'])){

//afficher le nom du joueur 

echo "<h2 class='h2-mult'>Bienvenue" .$_POST['namePlayer']."</h2>";
}
//faire le tableau associatif pour les propositions
$tablPropos = [
    [
        "question1" =>"Au millier près, combien y a-t-il de cheveux sur une tête humaine typique?",
        "reponse1" => "30 000",
        "reponse2" => "10 000",
        "reponse3" => "80 000",
        "reponse4" => "50 000"  
    ],
];

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">

        <title>Question1</title>

    </head>

    <body>

        <div class="qst-quiz">

            <?php
            //faire la boucle foreach pour parcourir le tableau
            foreach($tablPropos as $tablProposCopi){
            
            ?>
            <h2 id="question" class="text-center text-warning"><?= $value['question1'] ?></h2>
                <h1 class="h1-quiz"> Quiz Connaissances Générales</h1>
                <div class="form-qust1">
                    <form method="post" >
                        <h2 class="h2-quest" ><?= $tablProposCopi['question1'] ?></h2>
                        
                            <label for="radio1">30 000</label>
                            <input type="radio" name="reponse" id="radio1" value="<?= $tablProposCopi['reponse1'] ?>" /><br/>
                            
                            <label for="radio1">10 000</label>
                            <input type="radio" name="reponse" id="radio1" value="<?= $tablProposCopi['reponse2'] ?>"/><br/>

                            <label for="radio1">80 000</label>
                            <input type="radio" name="reponse" id="radio1" value="<?= $tablProposCopi['reponse3'] ?>" /><br/>

                            <label for="radio1">50 000</label>
                            <input  type="radio" name="reponse" id="radio1" value="<?= $tablProposCopi['reponse4'] ?>" /><br/>

                        <button type="submit" name="btn-valider" class="btn">Valider la reponse</button>

                    </form>

                <?php

                    if(isset($_POST['btn-valider'])){
                        //renisaliser le score
                        $_SESSION['scorPlayer'] = 0;
                        
                        
                    //récupérer la reponse qu'on stock dans une variable
                    $reponseUser = $_POST['reponse'];
                // var_dump($reponseUser);
                    
                    //tester la reponse du joueur
                    if($reponseUser === $tablProposCopi['reponse2']){
                    
                    //afficher le resultat et comparer
                    //on incremente
                    $_SESSION['scorPlayer'] += 1;
                    
                    //message pour la bonne reponse
                    echo "<h2 class='h2-quiz' > Voici la bonne reponse :" .$tablProposCopi['reponse2'] . "</h2>";

                    }else{
                        $_SESSION['scorPlayer'] += 0;

                        //afficher le resultat pour la mauvaise reponse
                    echo "<br><h2 class='h2-quiz' > Erreur ! la bonne reponse est :" .$tablProposCopi['reponse2'] . "</h2><br>";
                    
                    ?>
                
                <!--Bouton pour afficher la page suivante-->
                <a href='Question2.php' class='btn quest1' >Question suivante</a>
            
            <style>
                    .btn-valider{
                        display: none;
                    }
                    #question{
                        display: none;
                        }

                    .form-qust1{
                            display: none;
                        }
                </style>

             <?php
            }   

        }     
            ?>
                
        </div>

    </body>

</html>