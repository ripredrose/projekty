
<!-- projekt porzucony na rzecz tworzenia w react -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Czat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <script src="script.js"></script>
    <header>
        <h1>Czatuj ze znajomymi!</h1>
    </header>
    <section class="kontener">
        <nav class="znajomi">
            <input class="szukaj" type="text" placeholder="szukaj">
            <ul class="lista_znajomych">
                <!-- <li class="znajomy">
                    <div class="ikona"><span  class="material-symbols-outlined aktywnosc aktywny">circle</span></div>
                    <div class="pomoc">
                        <div class="nazwa">Adam Kasowalski</div> 
                        <div class="ostatni_tekst">ty:hejka</div> 
                    </div>
                </li> -->
    
            </ul>
            <div class="media">
                <div class="ikona"></div>
                <div class="nazwa">Twoje imie</div> 
                <span class="material-symbols-outlined">person_add</span>
            </div>
        </nav>
        <article class="czat">
            <div class="panel_gorny">
                <div class="nazwa"><h3>Nikt</h3></div> 
                <div class="ikona"><span  class="material-symbols-outlined aktywnosc aktywny">circle <!--- ikonka od google ---></span></div>
            </div>
            <div class="wiadomosci">
                <div class="wiadomosc uzytkownik1">
                    <div class="ikona"><span  class="material-symbols-outlined aktywnosc  aktywny">circle</span></div> 
                    <div class="tresc "> hejkadfsasdfasdf</div>
                </div>
                <div class="wiadomosc uzytkownik2">
                    <div class="tresc "> buenos dias porfafor</div>
                    <div class="ikona"><span  class="material-symbols-outlined aktywnosc aktywny">circle</span></div>
                </div>
                <div class="wiadomosc uzytkownik2">
                    <div class="tresc "> bLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum praesentium consequatur quidem rerum consectetur ea, iusto officia, dicta hic eligendi maxime tempora molestias molestiae. Consectetur ut architecto illo nobis a?s dias porfafor</div>
                    <div class="ikona"><span  class="material-symbols-outlined aktywnosc aktywny">circle</span></div>
                </div>
            </div>
            <div class="panel_dolny">
                <textarea class="widomosc_do_wysylania" type="text" placeholder="napisz wiadomość" cols="2"></textarea>
                <button class="wyslij">Wyślij </button>
            </div>
        </article>
    </section>
    
</body>
</html>
