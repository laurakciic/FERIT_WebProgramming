<?php

    /* Napraviti cjelobrojni niz pod imenom student. U niz upisati vaše ime, prezime, JMBG,
    broj indeksa i godinu studija. Nakon toga treba ispisati sve elemente niza pomoću foreach
    petlje. */

    $student = array(
        "Ime" => "Laura", 
        "Prezime" => "Kovačić", 
        "JMBG" => 123456,
        "Godina studiranja" => 3.);

    foreach ($student as $value) {
        echo "$value &nbsp";
    }

    
    /* Napraviti niz koji ima imenovane indekse s dvije dimenzije. Prva dimenzija je niz
    automobil koji se zove Citroen koji dalje ima svoj podniz u kojem se nalaze indeksi
    tip_automobila, kubikaža, boja, godina_proizvodnje i motor. Drugi niz je Mercedes koji
    ima iste indekse podniza kao i Citroen. */

    echo "<br><br>";
    $automobili = array(
        "Citroen" => array(
            "tip_automobila" => array("C3 Aircross", "C4 Cactus", "C4 Picasso"),
            "kubikaza" => array(1200, 1500, 1760),
            "boja" => array("crvena", "crna", "siva"),
            "godina_proizvodnje" => array(2010, 2015, 2019),
            "motor" => array("benzin", "dizel", "plin")
        ),

        "Mercedes" => array(
            "tip_automobila" => array("C", "S", "GLS"),
            "kubikaza" => array(2000, 2760, 3000),
            "boja" => array("crna", "siva", "crna"),
            "godina_proizvodnje" => array(2010, 2015, 2019),
            "motor" => array("benzin", "dizel", "plin")
        )
    );


    /* Ispisati sve elemente ovog višedimenzionalnog niza. Elemente niza Citroen ispisati
    pomoću foreach petlje, a elemente niza Mercedes direktnim indeksiranjem. */

    for($i = 0; $i < 3; $i++){
        foreach ($automobili["Citroen"] as $citroen => $value){
            echo "$citroen : $value[$i], <br>";
        }
        echo "<br>";
    }

    for($i = 0; $i < 3; $i++){
        echo "Model: " .$automobili["Mercedes"]["tip_automobila"][$i]."<br>";
        echo "Kubikaza: " .$automobili["Mercedes"]["kubikaza"][$i]."<br>";
        echo "Boja: " .$automobili["Mercedes"]["boja"][$i]."<br>";
        echo "Godina proizvodnje: " .$automobili["Mercedes"]["godina_proizvodnje"][$i]."<br>";
        echo "Motor: " .$automobili["Mercedes"]["motor"][$i]."<br><br>";
    }


    /* Napisati kod za razred Kupac s imenom i prezimenom te metodama za postavljanje
    imena i prezimena. Također napisati metodu koja ispisuje ''Kupac je: IME i PREZIME''.
    Stvoriti objekt razreda Kupac, postavite mu ime i prezime te ispišite gornju poruku. */

    class Kupac{
        public $ime, $prezime;

        function set_ime($ime){
            $this->ime = $ime;
        }

        function set_prezime($prezime){
            $this->prezime = $prezime;
        }

        function ispisKupca(){
            echo "Kupac je: " .$this->ime."&nbsp".$this->prezime;
        }
    }

    $kupac1 = new Kupac();
    $kupac1->set_ime("Luka");
    $kupac1->set_prezime("Ron");
    $kupac1->ispisKupca();

?>