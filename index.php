<?php
//Pour démarer une nouvelle session
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>CONNEXION</title>
</head>
<body>

<div class="bg-img">
  <form  class="container" method="post">
    <h1 class="h1-conect">CONNEXION</h1>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="formConnect"><b>Mot de passe</b></label>
    <input type="password" placeholder="Enter Mot de passe" id="formConnect" required>

    <input type="checkbox" class="formInput" id="check">
    <label class="formlabel" for="check">Verifier</label>

    <button type="submit"  name="btnConnect" class="btn">Connexion</button>
  </form>
</div>


<?php
//le click pour la connexion (isset : varaible déclaré et differente de null) 
//on utilise la variable HTTP POST

if(isset($_POST["btnConnect"])){
    
    //var_dump ($email);
    connextion();
}

//faire la functin avec la condition avec l'existance des champs mail et mot de passe de

function connextion(){
//verifier l'existance du chams
$emailUser = "dalidi915@gmail.com";
$passwordUser = "1234";

$email =  $_POST['email'];
//si les champs ne sont pas vide
//on recupére avec $_post pour envoyer à une autre page
if(isset($_POST['email']) && !empty($_POST['email'])){



//si le mail correspond au email definit, donc connecté, on fait la redirection
  if($email == $emailUser){
    //stocker le resultat dans une variable
    $_SESSION["email"] = $email;
    //on affiche avec var_dump
    //var_dump($email);
  header("location: pages/multiplication.php");
  }else{
    echo "<p class='p-blan'>ERREUR DE CONNEXION</p>";
  }
}

}
    ?>

    
</body>
</html>