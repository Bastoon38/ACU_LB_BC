<?php
echo file_get_contents('/fragments/header.txt', true); //true permet d'indiquer que l'on prend la racine du projet comme origine

echo file_get_contents('/fragments/formulaire_patho.txt',true);

//echo $inputMeridien;
//echo file_get_contents('/fragments/testBot.txt',true);
/*
if(isset($_POST['meridien']))
{
    foreach($_POST['meridien'] as $case) {

        echo $case;

    }
}*/

echo file_get_contents('/fragments/footer.txt',true);
?>