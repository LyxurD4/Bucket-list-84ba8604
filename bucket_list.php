<?php
echo "Heb je de film the bucket list gezien? Nee? tfoe neef. achso, je kan er hier eentje maken!\nEen bucketlist is een lijst met dingen die je wilt doen voordat je sterft.\nHoeveel activiteiten wil je toevoegen?\n\n";
$array = array ();
$hoeveelheid = readline();
    if(is_numeric($hoeveelheid)) {
        for ($i= 1; $i <= $hoeveelheid; $i++) {
            array_push($array, readline("Wat wil je toevoegen aan je bucket list? "));
    }
} else {
    echo "Geef een nummer op a neef.";
    exit;
}    
echo "Op jouw bucketlist staat:\n";
foreach ($array as $value) {
    echo $value. PHP_EOL;
}

?>
