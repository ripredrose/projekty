<?php

//sprawdzanie czy zostaly przeslane zmienne metoda post
if(!isset($_POST['imie']) || !isset($_POST['nazwisko']) || !isset($_POST['wiek'])) {
    //jesli nie wypisuje: 
    echo "brak danych!";
    //konczy dzialanie
    return ;

}else{
    //rozpoczyna sesje
    session_start();
    //sprawdza czy imie jest rozne od pustego ciagu znakow
    if($_POST['imie']!=""){
        //przypisuje do sesji imie wartosc z tablicy post[imie]
        $_SESSION['imie']=$_POST['imie'];
    }else{
        //jesli jest puste wpisuje brak
        $_SESSION['imie']="brak";
    }
    if($_POST['nazwisko']!=""){
        //przypisuje do sesji nazwisko wartosc z tablicy post[nazwisko]
        $_SESSION['nazwisko']=$_POST['nazwisko'];
    }else{
        //jesli jest puste wpisuje brak
        $_SESSION['nazwisko']="brak";
    }
    if($_POST['wiek']<2020&&$_POST['wiek']>1900){
        //przypisuje do sesji wiek wartosc z tablicy post[imwiekie]
        $_SESSION['wiek']=$_POST['wiek'];
    }else{
        //jesli jest mneijsze od 1900 lub wieksze od 2021 wpisuje do sesji wiek 0
        $_SESSION['wiek']=0;
    }
    //przenosi nas do informacje.php
    header('location: informacje.php');
}
?>