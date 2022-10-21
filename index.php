<?php

session_start();

//vérification si le membre est passé par la page de login :

    if(!isset($_SESSION['Login'])) {

    $msg = 'Désolé, vous devez être identifié pour enregistrer un lieu.';

    // si la variable de session login n'est pas enregistré : retour sur la page index.php
    header('location: index.php?page=index&msg=' . $msg);

    } else { // si tu es bien connecté.

    $Login = $_SESSION['Login'];

    }

?> 






-----------------------------------------------------------


        <?php   
        // vérif du formulaire de connection

    function renvoi($login, $password)
    {


    if (($login == "LOGIN1" && $password == "MDP1") ||  $login == "LOGIN2"  && $password == "MDP2")
    {
        header("location: acceuil.php");
        //Si réussite renvoyer vers -> acceuil.php
    }

    elseif ($login != "LOGIN1" || $login != "LOGIN2")
    {
        //Si echec renvoyer :
        echo "<p style='color:purple;'>L'Username entré est incorrect.</p>";
    }
    elseif ($password != "MDP1" || $password != "MDP2")
    {
        //Si echec renvoyer :
        echo "<p style='color:purple;'>Le password est incorrect.</p>";
    }

    }
    ?>
    
    
    
    
-----------------------------------------------------------


<?php

//login.php

session_start();
include("index.php");
$_SESSION["Login"] = $_POST['login'];
$_SESSION["Password"] = $_POST['password'];
echo renvoi($_SESSION["Login"], $_SESSION["Password"]);
?>



-----------------------------------------------------------


<?php

//disconnect


session_start();

session_destroy();
header('Location: index.php');
?>
