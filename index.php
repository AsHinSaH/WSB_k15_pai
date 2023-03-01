<?php
    $firstName = "Jan";
    $lastName = "Kowalski";

    echo "Imie i Nazwisko: $firstName $lastName <br>";
    echo 'Imie i Nazwisko: $firstName $lastName <br>';

    //heredoc

    echo <<< DATA
        <hr>
        Imie: $firstName <br>
        Nazwisko: $lastName
        <br>
    DATA; 

    $data = <<< DATA
        <hr>
        Imie: $firstName <br>
        Nazwisko: $lastName
        <br>
    DATA;

    echo $data;

    $data1 = <<< 'DATA'
        <hr>
        Imie: $firstName <br>
        Nazwisko: $lastName
        <br>
    DATA;

    echo $data1;

    $bin = 0b1010;
    echo $bin;

    echo "<hr>";

    $oct = 1010;
    echo $oct;

    echo "<hr>";

    $hex = 0x1A;
    echo $hex;//

    echo "<hr>";

    echo PHP_VERSION; //wersja php

    echo "<hr>";

    $x=1;
    $y=1.0;

    echo gettype($x);//int
    echo "<br>";
    echo gettype($y);//double

    echo "<hr>";

    if ($x==$y) {
        echo "Równe";
    } else {
        echo "Krzywe";
    }
    


?>