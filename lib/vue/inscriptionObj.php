<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 08/04/2015
 * Time: 16:36
 */

class inscriptionObj {

    private $state;
    private $message;

    public function __construct($state, $message) {
        $this->state = $state;
        $this->message = $message;
    }

    public function display()
    {
        echo file_get_contents('/fragments/header.txt', true); //true permet d'indiquer que l'on prend la racine du projet comme origine
        if($this->state > 0)
        {
            echo "<p class=alert>".$this->message."</p>";
        }

        if($this->state == 0)
        {
            echo "<p class=success>".$this->message."</p>";
        }
        else
        {
            echo file_get_contents('/fragments/inscription.txt',true);
        }
        echo file_get_contents('/fragments/footer.txt',true);
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

}