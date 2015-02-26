<?php
    echo file_get_contents('/fragments/header.txt', true); //true permet d'indiquer que l'on prend la racine du projet comme origine
    //content here
    echo file_get_contents('/fragments/footer.txt',true);
?>
