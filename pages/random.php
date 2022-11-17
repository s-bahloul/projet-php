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
<!--faire la condition de la bonne ou mauvaise reponse-->
<?php
if (isset($_POST['resultinput'])){
    $resultat = $_POST['resultinput'];
    var_dump ($resultat);
}
if(isset($_POST['bonneReponse'])){
    $bonneReponse = $_POST['bonneReponse'];
    //var_dump ($bonneReponse);
}

if($resultat == $bonneReponse){
    echo "<h1 class='h1-result'> Gagné ! </h1>";

}else{
    echo "<h1 class='h1-result'> Erreur ! </h1>";
}
?>
</body>
</html>