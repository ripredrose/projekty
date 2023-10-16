<?php

require_once("funkcje.php");
    if(czyistnieje()===false)
    {
        die("musisz zloczyc zamowienie");
    }
    //definiowanie stalych
    define('CENA_CPU',679.45);
    define('CENA_RAM',234.12);
    define('CENA_HDD',124.30);
    define('VAT',0.23);
    $cpu = czytanko($_POST['iloscPro']);
    $ram = czytanko($_POST['iloscRam']);
    $hdd = czytanko($_POST['iloscHDD']);
    $ankieta = czytanko($_POST['ankieta']);
    //kwota netto
    
    /*
     1. kwota stala z vatem(23%)
     2. wyliczyc i zapamietac kwote w zmiennej kwote zamowienia brutto
     3. wypisac kwote brutto sformatowana zgodnie z netto
    */
    $czas = date('Y-m-d  H:i:s');

    //zapisywanie do pliku
    zapiszDane();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie</title>
</head>
<body>
    <h1>Podsumowanie zamówienia</h1>
    <h3>Czas złożenia zamówienia:<?php echo $czas ?></h3>
    <p class="srodek">ilości zamówionych produktów:</p>
    <ul class="lista-srodek">
        <li>Ilość CPU: <b><?php echo $cpu;?></b></li>
        <li>Ilość RAM: <b><?php echo $ram;?></b></li>
        <li>Ilość HDD: <b><?php echo $hdd;?></b></li>
    </ul>
    <p class="srodek">łączna liczba zamówionych produktów: <b>
    <?php echo ($cpu+$ram+$hdd) ?></b></p>
    <hr>
    <p class="srodek">kwota netto: <b><?php echo Nformat(obliczNetto()). "zł";?></b> </p>
    <p class="srodek">kwota brutto: <b><?php echo Nformat(obliczBrutto()). "zł";?></b> </p>
    <hr>
    <p class="srodek">koszty transportu: <b><?php echo Nformat(transport()). "zł" ?></b></p>
    <h2 class="srodek">
        <?php 
            echo "całkowity koszt:" . Nformat(obliczBrutto()+transport())." zł<hr>";
        ?>
    </h2>
    <p class="srodek">
        
    </p>

</body>
</html>
