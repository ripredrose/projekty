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
            $ankieta1= 0;
            $ankieta2= 0;
            $ankieta3= 0;
            $ankieta4= 0;
            $ankieta5= 0;
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
                switch($zamowienie[7])
                {
                    case 1:
                        $ankieta1++;
                        break;
                    case 2:
                        $ankieta2++;
                        break;
                    case 3:
                        $ankieta3++;
                        break;
                    case 4:
                        $ankieta4++;
                        break;
                    case 5:
                        $ankieta5++;
                        break;
                }
            }
            $wszystkich = sizeof($dane); 
            echo "ankieta1: $ankieta1 (".fprocent(($ankieta1/$wszystkich)).")<br>";
            echo "ankieta2: $ankieta2 (".fprocent(($ankieta2/$wszystkich)).")<br>";
            echo "ankieta3: $ankieta3 (".fprocent(($ankieta3/$wszystkich)).")<br>";
            echo "ankieta4: $ankieta4 (".fprocent(($ankieta4/$wszystkich)).")<br>";
            echo "ankieta5: $ankieta5 (".fprocent(($ankieta5/$wszystkich)).")<br>";
            echo 'wszystkie:'.$wszystkich;
        ?>
    </table>
    <?php       
    ?>
</body>
</html>
