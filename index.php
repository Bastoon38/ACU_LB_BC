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
        echo 'inexistant';
    }
    elseif($_GET['pageID'] == 'info')
    {
        echo 'inexistant';
    }
?>