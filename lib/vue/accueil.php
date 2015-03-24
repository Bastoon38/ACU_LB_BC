<?php
    echo file_get_contents('/fragments/header.txt', true); //true permet d'indiquer que l'on prend la racine du projet comme origine
    //content here
    if(isset($errorMessage))
    {
        echo "<p class=alert>".$errorMessage."</p>";
    }
    if(isset($_SESSION['prenom']))
    {
        echo file_get_contents('/fragments/deconnexion.txt',true);
    }
    else
    {
        echo file_get_contents('/fragments/connexion.txt',true);
    }


    echo file_get_contents('/fragments/footer.txt',true);
?>
