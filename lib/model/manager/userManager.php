<?php
include('connexion_sql.php');
//include_once('../entities/user.php');
class userModel {

    private $_bdd;

    public function __construct()
    {
        $this->_bdd = new connexion_sql();
    }

    public function add($prenom, $nom, $mail, $pswd )
    {
        $pswd = md5($pswd);
        $query = $this->_bdd->prepare('INSERT INTO users (nom, prenom,mail,password) VALUES (?,?,?,?)');
        //Ajout des paramètre et controle le type
        $query->bindParam(1,$nom,PDO::PARAM_STR);
        $query->bindParam(2,$prenom,PDO::PARAM_STR);
        $query->bindParam(3,$mail,PDO::PARAM_STR);
        $query->bindParam(4,$pswd,PDO::PARAM_STR);
        $query->execute();
        $result = $query->errorCode();

        return $result;//retourne 0 si ok
    }

    public function getById($id)
    {
        $query = $this->_bdd->prepare('SELECT * FROM users where id=?');
        $query->bindParam(1,$id,PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch();

        return new user($result);
    }

    public function getByMail($mail)
    {
        $query = $this->_bdd->prepare('SELECT * FROM users where mail=?');
        $query->bindParam(1,$mail,PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch();

        return new user($result);
    }

    public function getAll()
    {
        $query = $this->_bdd->prepare('SELECT * FROM users');
        $query->execute();
        $result = $query->fetchAll();

        return $result;
    }
}