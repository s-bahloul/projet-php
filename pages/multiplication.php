<?php
//pour une nouvelle session (demarer)
session_start();
?>
<h1 class="h1-accueil">Bienvenue</h1>

<p class="h1-accueil"><?= $_SESSION['email']; ?><p>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Multiplication</title>
</head>
<body>

    <h1 class="h1-mult"> Bonjour</h1> 

    <div class="multipl">

        <h2 class="h2-mult">Table de multiplication</h2>

        <?php
        //variable multiplication
        $multiplication = 5;

        for($i = 0; $i <11; $i++){
            //variable stocker le resultat
            $resultat = $i * $multiplication;
            //afficher resultat

            echo "<p class='tblMultipl'> $i x $multiplication  = $resultat </p>" ;
        }


        ?>

        <!--bouton de retour a la page index-->
        <div class="tbl-retour">

        <a href="../index.php" class="btn-retour" >Retour</a>
        
        </div>



        <!--créer le formulaire pour la liste deroulante-->

        <div class="form-table"> 

            <form action="table.php"  method="post">

                <label   for="choiMultipl">Choisir la table de multiplication</label>
            
         <!--On récupére la valeur de la liste déroulant grace à $_POST["varMultipl"]-->

                <select id="multipl" name="valMultipl" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

                <!--<bouton submit fait appel à form action-->
            <div class="btn-submit">
                <button type="submit" class=" btn ">Afficher le résultat</button>
            </div>

            </form>
        </div>

        <h2 class="h2-checkbox">Choisissez votre multiple <br /></h2>
        
        <div class="checkbox" >
            
            <form method="post" action="checkbox.php">
                <input type="checkbox" name="inlineCheckbox[]" value="1" id="case1" /> <label for="case1">1</label><br />
                <input type="checkbox" name="inlineCheckbox[]" value="2" id="case2" /> <label for="case2">2</label><br />
                <input type="checkbox" name="inlineCheckbox[]" value="3" id="case3" /> <label for="case3">3</label><br />
                <input type="checkbox" name="inlineCheckbox[]" value="4" id="case4" /> <label for="case4">4</label><br />
                <input type="checkbox" name="inlineCheckbox[]" value="4" id="case5" /> <label for="case5">5</label><br />
                <input type="checkbox" name="inlineCheckbox[]" value="4" id="case6" /> <label for="case6">6</label><br />
                <input type="checkbox" name="inlineCheckbox[]" value="4" id="case7" /> <label for="case7">7</label><br />
                <input type="checkbox" name="inlineCheckbox[]" value="4" id="case8" /> <label for="case8">8</label><br />
                <input type="checkbox" name="inlineCheckbox[]" value="4" id="case9" /> <label for="case9">9</label><br />
                <input type="checkbox" name="inlineCheckbox[]" value="4" id="case10" /><label for="case10">10</label><br />
        
                <button type="submit" class="btn ">VALIDER</button>
                

                <?php
               // var_dump($_POST['inlineCheckbox']);
                ?>
            </form>
        </div>

        <div class="mltpl3" >
            <h1 class="h1-mult">Une multiplication au hasard</h1>

            <!--créer un bouton submit qui appel un form action-->
            <form action="random.php" method="post">
                
                <label for="resultat" >le calcule</label>

                <!--déclarer les variables tableaux en php-->
                <?php

                $tablNombr =[1,2,3,4,5,6,7,8,9,10];
                $tablMultipl =[1,2,3,4,5,6,7,8,9,10];

                //array_rand prend une clé au hasard dans le tableaux 
                //choisir un nembre et l'afficher
                $cleNombr = array_rand($tablNombr);
                //var_dump($cleNombr);

                //choisir un multiple et l'afficher
                $cleMultipl = array_rand($tablMultipl);
                //var_dump($cleMultipl);

                //stocker le resultat dans une variable
                $resultat = $cleNombr * $cleMultipl;
                //l'afficher
                echo "<p class='tblMultipl'> " .$cleNombr . "x" . $cleMultipl . "</p>";
                    
                ?>

                <!--input pour la reponce-->
                <input type="nomber" name="resultinput" id="result">
                <input type="hidden" name="bonneReponse" value="<?= $resultat ?>" />
                
                <!--bouton valider type submit fait appel à form action-->
                <button type="submit" class="btn btnVal"> Valider</button>
            </form>

        </div>


</body>
</html>
           