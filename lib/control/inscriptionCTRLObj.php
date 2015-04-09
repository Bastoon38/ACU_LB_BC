<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 08/04/2015
 * Time: 16:57
 */

class inscriptionCTRLObj {

    private $prenom;
    private $nom;
    private $mail;
    private $pwd;
    private $vue;

    function __construct()
    {
        $this->vue = new inscriptionObj(-1,'');
    }

    public function inscrire()
    {
        $manUser = new userModel();
        if( isset($this->prenom) and isset($this->nom) and isset($this->mail) and isset($this->pwd))
        {
            $result = $manUser->add($this->prenom,$this->nom,$this->mail,$this->pwd);
            if($result==0)
            {
                $this->vue->setMessage('Vous ètes maintenant membre du site !');
                $this->vue->setState(0);
            }
            elseif($result==23000)
            {
                $this->vue->setMessage('email déjà utilisé');
                $this->vue->setState(1);
            }
            else
            {
                $this->vue->setMessage("Une erreur s'est produite !");
                $this->vue->setState(1);
            }
        }
        $this->vue->display();
    }

    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }
}