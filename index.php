<?php

    if(!isset($_GET['pageID'])  || $_GET['pageID'] == 'accueil')
    {
        include_once('lib/control/accueilCTRL.php');
    }
    elseif($_GET['pageID'] == 'patho')
    {
        echo 'inexistant';
    }

    elseif($_GET['pageID'] == 'inscription')
    {
        include_once('lib/control/inscriptionCTRL.php');
    }
    elseif($_GET['pageID'] == 'info')
    {
        include_once('lib/control/infoCTRL.php');
    }
    elseif($_GET['pageID'] == 'connexion')
    {
        echo 'inexistant';
    }
?>