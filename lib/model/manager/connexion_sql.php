<?php

class connexion_sql extends PDO{

    public function __construct()
    {
        try
        {
            parent::__construct('mysql:host=localhost;dbname=acupuncture', 'root', '',array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }
}