<?php
echo file_get_contents('/fragments/header.txt', true); //true permet d'indiquer que l'on prend la racine du projet comme origine

echo file_get_contents('/fragments/formulaire_patho.txt',true);


foreach($liste as $meridien) {


    //$nom = $meridien->getNom();
    
    echo $meridien->getNom();

}

/*if(isset($_POST['meridien']))
{
    var_dump($_POST['meridien']);
    foreach($_POST['meridien'] as $case) {

        echo 'checked'="checked";
        echo $case;

    }
}*/

echo file_get_contents('/fragments/footer.txt',true);
?>