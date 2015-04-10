<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 08/04/2015
 * Time: 19:01
 */

class recherche {

    private $isConnected;

    function __construct()
    {
        $this->isConnected = 0;
    }

    public function display()
    {
        echo file_get_contents('/fragments/header.txt', true); //true permet d'indiquer que l'on prend la racine du projet comme origine

        $fragment = '<form id="pathoForm" method="post" action="index.php?pageID=resultats">';

        if($this->isConnected > 0)
        {
            $fragment .= '<label for="key">Mot clé :</label>
                           <input type="text" name="key" size="20"
                           maxlength="40" id="key" />';
        }

        echo $fragment;
        echo file_get_contents('/fragments/formulaire_patho.txt',true);

        echo file_get_contents('/fragments/footer.txt',true);
    }


    public function setIsConnected()
    {
        $this->isConnected = 1;
    }


}