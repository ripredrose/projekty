<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz zamowienia</title>
</head>
<body>
    <h1>Formularz zamowienia</h1>
    <form action="zamowienie.php" method="post">
        <table class="zamowienie">
            <tr>
                <td>Nazwa Produktu</td>
                <td>Ilość</td>
            </tr>
            <tr>
                <td>Procesor</td>
                <td><input name="iloscPro" type="number" value="0" min="0" max="100"></td>
            </tr>
            <tr>
                <td>Pamięć RAM</td>
                <td><input name="iloscRam" type="number" value="0" min="0" max="100"></td>
            </tr>
            <tr>
                <td>Dysk twardy</td>
                <td><input name="iloscHDD" type="number" value="0" min="0" max="100"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Skąd wiesz o naszym sklepie</p>
                    <select name="ankieta" >
                        <option value="1">Internet</option>
                        <option value="2">Gazeta</option>
                        <option value="3">Znajomy</option>
                        <option value="4">Telewizja</option>
                        <option value="5">Inne</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p><b>transport</b><br>Ustal odległość:</p>
                    <select name="transport" >
                        <option value="50">do 50km</option>
                        <option value="100">od 51 do 100km</option>
                        <option value="150">od 101 do 150km</option>
                        <option value="200">od 151 do 200km</option>
                        <option value="250">powyzej 200km</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="reset" value="Resetuj">
                    <input type="submit" value="Wyślij">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
