<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
   
    <title>checkbox</title>
</head>
<body>

<div class="table-affich">
        <?php
        //faire  la condition si la valeur existence

            if(isset($_POST['inlineCheckbox'])){

                $multiplicateur = $_POST['inlineCheckbox'];

                foreach ($multiplicateur as $table){

                    echo  "<p class='text-bleu'>la table de $table </p>";
                    //incrementation
                    for($i = 1; $i < 11; $i++){
                        //stocker le resultat dans une variable
                        $resultat = $i * $table;

                        echo "<p class='tblMultipl'> $i x $table  = $resultat </p>" ;
                        
                    }
                }
            }

        ?>
     
</div>


</body>
</html>