<?php
$chaine = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<films>
    <film>
        <titre>Alien</titre>
        <sortie>1979</sortie>
        <acteur>
            <nom>Sigourney Weaver</nom>
            <nom>Alien</nom>
        </acteur>
    </film>
    <film>
        <titre>Vertigo</titre>
        <sortie>1958</sortie>
        <acteur>
            <nom>Alfred Hitchcock</nom>
        </acteur>
    </film>
</films>
XML;

$xml = new SimpleXMLElement($chaine);
foreach ($xml->film as $unFilm) {
    echo $unFilm->titre, "\n";
    echo $unFilm->sortie, "\n";
    echo "acteurs: ","\n";
    foreach ($unFilm->acteur->nom as $unActeur) {
        echo ' ', $unActeur, "\n";
    }
}

?>