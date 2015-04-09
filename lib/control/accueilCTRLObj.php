<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 08/04/2015
 * Time: 18:01
 */

class accueilCTRLObj {
    private $mail;
    private $pwd;
    private $manUser;
    private $vue;
    private $prenom;

    function __construct()
    {
        $this->manUser = new userModel();
        $this->vue = new accueilObj();
    }

    function connexion()
    {

        if(($this->mail) && isset($this->pwd))
        {
            $user = $this->manUser->getByMail($this->mail);
            $pass = md5($this->pwd);

            if($pass==$user->getPassword())
            {
                $this->prenom = $user->getPrenom();
                $_SESSION['prenom']  = $this->prenom;
            }
            else
            {
                $this->vue->setMessage('utilisateur ou mot de passe incorrect');
            }
        }
    }

    public function deconnexion()
    {
        session_destroy();
    }

    public function display()
    {
        $this->vue->display();
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        $this->vue->setPrenom($this->prenom);
    }



}