<?php
//rozpoczyna sesje
session_start();
//sprawdza zapamietane zmienne w tablicy sesji
if(!isset($_SESSION['imie']) || !isset($_SESSION['nazwisko']) || !isset($_SESSION['wiek']))
{
    //jesli nie zostaly przeslane
    echo "brak danych!";
    return;
}
else
{
    //wypisuje imie
    echo $_SESSION['imie'] . "<br>";
    //wypisuje nazwisko
    echo $_SESSION['nazwisko'] . "<br>";
    //jesli wiek rowny 0 
    if($_SESSION['wiek']==0)
    {
        //wypisuje wiek i "bleny rok"
        echo $_SESSION['wiek'] . "błedny rok!";
    }
    else
    {
        //jesli nie jest zerem wypisuje obecna date-date urodzenia np 2021- 1999 = 22
        echo 2021-$_SESSION['wiek'] ;
    }
}
?>