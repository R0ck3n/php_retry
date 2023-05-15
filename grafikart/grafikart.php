<?php
$newRange=null;
$range = [];

while (true){
    $start = readline('Debut du créneau :');
    $fin = readline('FIN du créneau :');

    if ($fin > $start) {
        $range = [...$range, [$start,$fin]];
    }else {
        echo "Horraire de fin non cohérent avec l'horraire du début créneau non ajouté";
    }
    
    $newRange = readline('Voulez vous ajouter un nouveau créneau ? (o/n) : ');

    if ($newRange === "n"){
        break;
    }
    if($newRange !== "o" || $newRange !== 'n' ){
        echo ' saisissez "o" pour oui et "n" pour non .';
        echo "\n";
        $newRange = readline('Voulez vous ajouter un nouveau créneau ? (o/n) : ');
        if ($newRange === "n"){
            break;
        }
    }

}

$actualHour = readline('quel heure est il ? ');

$opened = false;

foreach ($range as $hours){
    if ($actualHour >= $hours[0] && $actualHour <= $hours[1]){
        $opened = true;
    }
}

if ($opened){
    echo "le magasin est ouvert";
}else{
    echo "Le magasin est fermé";
}

