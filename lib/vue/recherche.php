<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 08/04/2015
 * Time: 19:01
 */

class recherche {


    function __construct()
    {
    }

    public function display()
    {
        echo 'test';
        echo file_get_contents('/fragments/header.txt', true); //true permet d'indiquer que l'on prend la racine du projet comme origine

        echo file_get_contents('/fragments/formulaire_patho.txt',true);

        echo file_get_contents('/fragments/footer.txt',true);
    }
}