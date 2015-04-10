<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 02/04/2015
 * Time: 14:21
 */

class accueilObj {

    private $prenom;
    private $message;

    public function __construct() {
    }

    public function display()
    {
        echo file_get_contents('/fragments/header.txt', true); //true permet d'indiquer que l'on prend la racine du projet comme origine
        //content here
        if(isset($this->message))
        {
            echo "<p class=alert>".$this->message."</p>";
        }
        if(isset($this->prenom))
        {
            echo file_get_contents('/fragments/deconnexion.txt',true);
        }
        else
        {
            echo file_get_contents('/fragments/connexion.txt',true);
        }

        include_once('/lib/rss/convertRSS.php');

        echo file_get_contents('/fragments/footer.txt',true);
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }


}