<?php
    session_start();
    include_once('lib/includes.php');

    if(!isset($_GET['pageID'])  || $_GET['pageID'] == 'accueil')
    {
        $accueil = new accueilCTRLObj();

        if(isset($_POST['mail'])){$accueil->setMail($_POST['mail']);}
        if(isset($_POST['pwd'])){$accueil->setPwd($_POST['pwd']);}
        if(isset($_POST['deco']))
        {
            $accueil->deconnexion();
        }
        elseif(isset($_POST['mail']) && isset($_POST['pwd']))
        {
            $accueil->connexion();
        }

        if(isset($_SESSION['prenom'])){$accueil->setPrenom($_SESSION['prenom']);}

        $accueil->display();
        //include_once('lib/control/accueilCTRL.php');
    }
    elseif($_GET['pageID'] == 'patho')
    {
        new rechercheCTRL();
    }
    elseif($_GET['pageID'] == 'resultats')
    {
        $resultats = new resultatsCTRL();
        if(isset($_POST['meridien'])){$resultats->setMeridien($_POST['meridien']);}
        if(isset($_POST['type'])){$resultats->setType($_POST['type']);}
        if(isset($_POST['carac'])){$resultats->setCarac($_POST['carac']);}
    }
    elseif($_GET['pageID'] == 'inscription')
    {
        $inscription = new inscriptionCTRLObj();
        if(isset($_POST['prenom'])){$inscription->setPrenom($_POST['prenom']);}
        if(isset($_POST['nom'])){$inscription->setNom($_POST['nom']);}
        if(isset($_POST['mail'])){$inscription->setMail($_POST['mail']);}
        if(isset($_POST['pwd'])){$inscription->setPwd($_POST['pwd']);}
        $inscription->inscrire();
        //include_once('lib/control/inscriptionCTRL.php');
    }
    elseif($_GET['pageID'] == 'info')
    {
        //include_once('lib/control/infoCTRL.php');
        new infoCTRLObj();
    }
?>