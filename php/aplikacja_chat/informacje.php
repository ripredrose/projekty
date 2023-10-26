<?php

$conn = new mysqli("localhost", "root", "", "chat");
if($conn->connect_error) 
    exit('Nie można połączyć');
  

if($_GET["zapytanie"]==1){
    znajomi();
}else{
    dane();
}

function dane(){
    $id = 1;//bedzie pobierane od GET session 
    global $conn;
    $zapytanie = "SELECT nick,ikona FROM uzytkownicy WHERE ID_uzytkownika='$id'";
    $wynik=$conn->query($zapytanie);
    $wiersz = mysqli_fetch_array($wynik);
    $imie = $wiersz[0];
    $ikona = $wiersz[1];
    echo "
        <div class='ikona' style='background-image:url(ikony/$ikona)'></div>
        <div class='nazwa'> $imie</div> 
        <span class='material-symbols-outlined'>person_add</span>
    ";

}
function znajomi(){
    global $conn;
    if(isset($_GET['szukane']) && $_GET['szukane']!=""){
        $szukana = $_GET['szukane'];
        $zapytanie = "SELECT nick, aktywnosc,ikona FROM uzytkownicy WHERE nick LIKE '%$szukana%'";
    }else{
        $zapytanie = "SELECT nick, aktywnosc,ikona FROM uzytkownicy";
    }
    $wynik=$conn->query($zapytanie);
    while ( $wiersz = mysqli_fetch_array($wynik)) {
        $nazwa = $wiersz[0];
        $wiadomosc="lubie plackaiasdAdfsa";//do przebudowy
        $aktywnosc=$wiersz[1];
        $ikona = $wiersz[2];
        if($aktywnosc==0){
            $aktywnosc="nieaktywny";
        }else{
            $aktywnosc="aktywny";
        }

        echo "<li class='znajomy' onclick='wybierz(this)'>
                 <div class='ikona' style='background-image:url(ikony/$ikona);'><span  class='material-symbols-outlined aktywnosc $aktywnosc'>circle</span></div>
                 <div class='pomoc'>
                     <div class='nazwa'>$nazwa</div> 
                     <div class='ostatni_tekst'>$nazwa:$wiadomosc</div> 
                 </div>
             </li>";
    }
}




    
    // $nazwa = "TY";
    // $wiadomosc="wiadomosc";
    // $aktywnosc="aktywny";
    // echo "
    // <li class='znajomy'>
    //     <div class='ikona'><span  class='material-symbols-outlined aktywnosc $aktywnosc'>circle</span></div>
    //     <div class='pomoc'>
    //         <div class='nazwa'>$nazwa</div> 
    //         <div class='ostatni_tekst'>$nazwa:$wiadomosc</div> 
    //     </div>
    // </li>";

?>
