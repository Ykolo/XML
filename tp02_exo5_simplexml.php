<?php
$lesComptes = [
    ['login' => 'adil', 'organisation' => 'Turgot', 'budget' => 125],
    ['login' => 'alexandre', 'organisation' => 'Hautil', 'budget' => 35],
    ['login' => 'caroline', 'organisation' => 'Turgot', 'budget' => 5],
];

$compte = simplexml_load_string('<LesComptes/>');

foreach ($lesComptes as $info){
    $uncompte=$compte->addchild('Compte');
    foreach ($info as $k=>$v){
        $uncompte->addChild($k,$v);
    }
}


// $uncompte = $compte->addChild('Compte');
// $uncompte->addChild('login', 'adil');
// $uncompte->addChild('organisation', 'Turgot');
// $uncompte->addChild('budget', '125');

// $uncompte = $compte->addChild('Compte');
// $uncompte->addChild('login', 'alexandre');
// $uncompte->addChild('organisation', 'Hautil');
// $uncompte->addChild('budget', '35');

// $uncompte = $compte->addChild('Compte');
// $uncompte->addChild('login', 'caroline');
// $uncompte->addChild('organisation', 'Turgot');
// $uncompte->addChild('budget', '5');

// var_dump($compte->asXML());

foreach ($compte as $uncompte) {
    echo $uncompte->login . "\n";
    echo $uncompte->organisation . "\n";
    echo $uncompte->budget . "\n";
    echo "\n";
}

foreach ($compte as $uncompte) {
    echo "\n";
    foreach ($uncompte as $prop){
        echo $prop."\n";
    }
}