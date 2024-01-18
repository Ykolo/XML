<?php
$lesVoituresXML= simplexml_load_string('<lesVoitures/>');
$uneVoitureXML=$lesVoituresXML->addChild('voiture');
$uneVoitureXML->addChild('nom','Twingo');
$uneVoitureXML->addChild('marque','Renault');

$uneVoitureXML=$lesVoituresXML->addChild('Voiture');
$uneVoitureXML->addChild('nom','C1');
$uneVoitureXML->addChild('marque','Citroen');
var_dump($lesVoituresXML->asXML());
?>