<?php
function czyistnieje()
{
    if(!isset($_POST['iloscPro']) || !isset($_POST['iloscRam']) ||
    !isset($_POST['iloscHDD']) || !isset($_POST['transport']) ||
    !isset($_POST['ankieta']))
    {
        return false;
    }else{
        return true;
    }
}

// funkcja zastepujaca przypisanie i konwertuje go do liczby
function czytanko($liczba){
    $liczba = intval($liczba);
    if($liczba<0){
        $liczba=0;
    }else if($liczba>100){
        $liczba=100;
    }
    return $liczba;
}
function obliczNetto()
{
    //okreslenie zmiennych globalnych
    global $cpu, $ram, $hdd; 
    return $cpu*CENA_CPU+$ram*CENA_RAM+$hdd*CENA_HDD;
}
function obliczBrutto()
{
    //okreslenie zmiennych globalnych
    
    return obliczNetto()+obliczNetto()*VAT ;
}
//mozna zastapic pierwszą/10
function transport()
{
    return  intval($_POST['transport']/10);
}
function wyborAnkiety(){
    return intval($_POST['ankieta']);
}
//fun bez parametrow, odczytuje z tablicy post
//indeks ankieta, ustala wynor z ankiety i wpisuje odpowiedni tekst
function ankieta(){
    switch(wyborAnkiety()){
        case 1:
            echo "super internet";
            break;
        case 2:
            echo "super gazeta";
            break;
        case 3:
            echo "trzymaj tak dalej ze znajomymi";
            break;
        case 4:
            echo "tv: reklama";
            break;
        case 5:
            echo "super";
            break;
        default:
            echo "blednie wypelniona ankieta";
    }
}
function fprocent($liczba)
{
    return number_format($liczba*100,2,',',' '). "%";
}
//formatowanie number format ezzz
function Nformat($kwota){
    return Number_format($kwota,2,","," ");
}
function zapiszDane(){
    global $czas, $cpu, $hdd, $ram;
    $dane = $czas . ";";
    $dane .= $cpu . ";";
    $dane .= $ram . ";";
    $dane .= $hdd . ";";
    $dane .= obliczNetto() . ";";
    $dane .= obliczBrutto() . ";";
    $dane .= transport() . ";";
    $dane .= wyborAnkiety() . ";";
    $dane .= "\r\n"; //znak nowej lini
    file_put_contents('dane.dat',$dane,FILE_APPEND);
}
?>
