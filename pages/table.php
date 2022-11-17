<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles.css" >

    <title>choix des tables</title>

</head>

<body>

    <div class="tbl-result">
        <h4 class="h1-result">LE RESULTAT</h4>
        <?php
        
        //on doit récupérer la valeur choisis par l'utilisateur dans le fenaître déroulante
    
            if(isset($_POST['valMultipl'])){

        //garder stocker les valeurs dans une variable

                $valMultipl = $_POST['valMultipl'];
                //faire la boucle et afficher le resultat

                for($i = 1; $i <= 10; $i++){
                   
                    $resultat = $i * $valMultipl;

                    //Afficher le resultat
    
                    echo "<p class='tblResult'> $i x $valMultipl  = $resultat </p>" ;
                }
            }
        ?>
     </div>   



</body>
</html>
