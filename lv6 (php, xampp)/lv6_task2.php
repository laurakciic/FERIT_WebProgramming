<?php

// Otvoriti datototeku tekst.txt za čitanje i pisanje pomoću PHP-a.
$str_tekst = fopen("C:\\xampp\\htdocs\\tekst.txt", "r+");

// Pročitati čitav sadržaj datoteke i spremiti ga u string pod imenom $str_tekst.
$str_tekst = file_get_contents("tekst.txt");

// Zatvorite datoteku i ispišite sadržaj varijable $str_tekst kao h1. 
//fclose($str_tekst);
echo "<h1>$str_tekst</h1>";

/* Izrezati string $str_tekst na dijelove i dijelove spremiti u string $izrezani_tekst. Uvjet
razdvajanja neka bude razmak. */
$izrezani_tekst = explode(" ", $str_tekst);
$file = fopen("C:\\xampp\\htdocs\\tekst.txt", "a");
fwrite($file, "\n");
foreach($izrezani_tekst as $value){
    fwrite($file, $value.PHP_EOL);
}

?>