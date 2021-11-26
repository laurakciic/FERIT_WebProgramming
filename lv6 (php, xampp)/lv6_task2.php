<?php

/* Otvoriti datototeku tekst.txt za čitanje i pisanje pomoću PHP-a.
Pročitati čitav sadržaj datoteke i spremiti ga u string pod imenom $str_tekst.
Zatvorite datoteku i ispišite sadržaj varijable $str_tekst kao h1.

Izrezati string $str_tekst na dijelove i dijelove spremiti u string $izrezani_tekst. Uvjet
razdvajanja neka bude razmak. Ispisati taj izrezani string u datoteku tekst.txt tako da svaka riječ bude u jednom redu ali
da originalni tekst se ne obriše.

Pronaći mjesto prvog pojavljivanja slova k u stringu $str_tekst i ukupan broj
pojavljivanja istog slova i ispisati ih na stranici ispod naslova zajedno s porukom: ''Prvi
put se slovo k pojavljuje na xx mjestu i ukupno se pojavljuje xx puta.'' 
*/

$fp = fopen("C:\\xampp\\htdocs\\tekst.txt", "r+");
$str_tekst = file_get_contents("tekst.txt");
fclose($fp);
echo "<h1>$str_tekst</h1>";

$izrezani_tekst = explode(" ", $str_tekst);
$fp2 = fopen("C:\\xampp\\htdocs\\tekst.txt", "a");
fwrite($fp2, "\n\n");
foreach($izrezani_tekst as $value){
    fwrite($fp2, $value."\n");  // ili fwrite($fp2, $value.PHP_EOL); 
}

$k = strpos($str_tekst, "k");
$kSum = substr_count($str_tekst, "k");
echo "Prvi put se slovo k pojavljuje na ".$k.". indeksu (".++$k.". mjestu) i ukupno se pojavljuje ".$kSum." puta.";

?>