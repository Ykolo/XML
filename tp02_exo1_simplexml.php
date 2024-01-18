<?php
$chaine=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<voiture>
    <modele>Twingo</modele>
    <marque >Renault</marque>
</voiture>
XML;

$xml = new SimpleXMLElement($chaine);
var_dump($xml);//$xml est un objet. Il a deux élements modele et marque

echo $xml->modele,PHP_EOL;//-> permet d'exécuter les méthodes
echo $xml->marque,PHP_EOL;

$xml->addChild('moteur','essence');//addChild est une méthode qui rajoute des élements
echo $xml->moteur,PHP_EOL;

echo $xml->count(),PHP_EOL;//ça compte le nombre d'élements dans la variable $xml

foreach($xml->children() as $child){//$xml->children permet d'afficher les valeurs de $xml
    echo $child,PHP_EOL;
}
echo $xml->children()[0],PHP_EOL;
echo $xml->children()[1],PHP_EOL;
echo $xml->children()[2],PHP_EOL;

echo $xml->asXML();//asXML() retourne la variable $chaine en entier

?>