<?php
/**
 * Created by PhpStorm.
 * User: Bastien
 * Date: 09/04/2015
 * Time: 19:07
 */

//La transformation XSL commence par l'instanciation [c'est quoi?] d'un objet XSLTProcessor.
/*$xslt = new XSLTProcessor();

//Puis charger la feuille XSL une fois cette dernière instanciée (comme nous avons pu le voir pour le traitement d'un document XML avec un arbre DOM)
$xslDoc = new DOMDocument();
$xslDoc->load('C:\wamp\www\Langage_Internet\MainProject\lib\rss\rss.xsl');
$xslt->importStylesheet($xslDoc);

//Il est alors possible d'appliquer la transformation sur un objet DOMDocument et d'afficher le résultat par
$xmlDoc = new DOMDocument();
$xmlDoc->load('C:\wamp\www\Langage_Internet\MainProject\lib\rss\rss.xml');
echo $xslt->transformToXML($xmlDoc);*/



//echo '<div style="width:150px;height:150px;line-height:3em;overflow:scroll;padding:5px;">';

echo'<div class="scrollbar" id="style-2">';
      echo'<div class="force-overflow"></div>';
    echo'</div>';

echo '<div class="div_rss">';

$url = "http://www.sante.gouv.fr/spip.php?page=backend&id_rubrique=7";
$rss = simplexml_load_file($url); // Convertit le document XML en un objet de type SimpleXMLElement.


//echo '<img src='.$rss->channel->image->url.' border="0" />';
echo '<h1>';
echo $rss->channel->title;
echo '</h1>';

echo '<ul>';
foreach ($rss->channel->item as $item){
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd-m-Y');
    echo '<li>'.$date.' : <a href="'.$item->link.'">'.$item->title.'</a> </li>';
}

foreach ($rss->channel->item as $item){
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd-m-Y');
    echo '<li>'.$date.' : <a href="'.$item->link.'">'.$item->title.'</a> </li>';
}

foreach ($rss->channel->item as $item){
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd-m-Y');
    echo '<li>'.$date.' : <a href="'.$item->link.'">'.$item->title.'</a> </li>';
}

foreach ($rss->channel->item as $item){
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd-m-Y');
    echo '<li>'.$date.' : <a href="'.$item->link.'">'.$item->title.'</a> </li>';
}
echo '</ul>';
echo '</div>';

?>