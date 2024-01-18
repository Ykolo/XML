<?php
$chaine=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<voiture>
    <occasion>
        <modele>Twingo</modele>
        <marque >Renault</marque>
        <moteur>Essence</moteur>
        <annee>2016</annee>
        <kms>25000</kms>
    </occasion>
    <occasion>
        <modele>C1</modele>
        <marque >Citroen</marque>
        <moteur>Diesel</moteur>
        <annee>2014</annee>
        <kms>110000</kms>
    </occasion>
</voiture>
XML;
$xml = new SimpleXMLElement($chaine);
foreach($xml->children() as $child){
    echo "\n";
    foreach($child->children() as $child2){
        echo $child2," ";
    }
}

?>