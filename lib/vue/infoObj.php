<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 08/04/2015
 * Time: 16:23
 */

class infoObj {

    public function __construct() {
    }

    public function display()
    {
        echo file_get_contents('/fragments/header.txt', true); //true permet d'indiquer que l'on prend la racine du projet comme origine

        echo file_get_contents('/fragments/info.txt',true);

        echo file_get_contents('/fragments/footer.txt',true);
    }

}