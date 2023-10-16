<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista zamowien</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
    
</head>
<body>
    <h1>Lista zamówień</h1>
    <table class="zamowienie">
        <tr>
            <th>czas</th>
            <th>ilosc cpu</th>
            <th>ilosc ram</th>
            <th>ilosc hdd</th>
            <th>kwota netto</th>
            <th>kwota brutto</th>
            <th>transport</th>
            <th>łącznie</th>
            <th>ankieta</th>
        </tr>
        <?php
            $ankieta=array(0,0,0,0,0);
            require_once('funkcje.php');
            $dane = file('dane.dat');
            foreach($dane as $linia){
                $zamowienie = explode(';',$linia);
                echo "<tr>";
                echo "<td>$zamowienie[0]</td>";
                echo "<td>$zamowienie[1]</td>";
                echo "<td>$zamowienie[2]</td>";
                echo "<td>$zamowienie[3]</td>";
                echo "<td>". Nformat($zamowienie[4]) . "</td>";
                echo "<td>". Nformat($zamowienie[5]) . "</td>";
                echo "<td>". Nformat($zamowienie[6]) . "</td>";
                echo "<td>". Nformat($zamowienie[5]+$zamowienie[6]) . "</td>";
                echo "<td>$zamowienie[7]</td>";
                echo "</tr>";
            $ankieta[$zamowienie[7]-1]++;
            }
        ?>
    </table>
    <?php     
        $wszystkich = sizeof($dane);
        foreach($ankieta as $linia)
        {
            echo "ankieta: ".$linia . "(".fprocent(($linia/$wszystkich)).")<br>";
        }
    ?>
</body>
</html>
