//tu przechowywane są wszystkie klawisze
const ALLKEYS = document.querySelectorAll('.key');
// j jest pudełkiem na liczenie ile klawiszy jest nacisnietych
var j = 1;
//tworzenie listy w ktore są pary 1-false(oznacza że nie jest w użyciu klawisz)itp..
var listAudio = [ 1,false,2,false,3,false,4,false,5,false];
//funkcja która robi że gra muzyka 
//pomiń na początek 
function playSound(URL,i,key){
    //jeśli klawisze są czarne i został naciśnięty zmiana koloru
    if(i<15) key.classList.add("InUseB");
    //jeśli jest inny to jest to biały czyli zmiana koloryu natroche inny odcień
    else key.classList.add("InUseW");
    //tworzenie jakby soundtracka i przypisanie do : audio , audio mozna startowac i pauzować
    audio = new Audio(URL);
    //żeby soutrack grał
    audio.play()
    //ustawianie czasówki po której kolory klawiszy wracają do normy
    setTimeout(function(){
        key.classList.remove("InUseB");
        key.classList.remove("InUseW");
    },300)
}
//głowne operacje
//sprawdza po kolei każdy klawisz z zmiennej (patrz 1linijka) 
ALLKEYS.forEach((key,i) =>{
    //tworzenie zmiennej 'i' która po każdym klawiszu dodaje sobie jednen czyli 0,1,2,3,4,5,6,7,8,9,10... w programowaniu liczenie zaczyna sie od 0
    //numery dzwiekow w plikach
    const Numbers = ['47','49','52','54','56','59','61','64','66','68','71','73','76','78','80',/*koniec czarnych */  '46','48','50','51','53','55','57','58','60','62','62','63','65','67','69','70','72','74','75','77','79','81','82','69',/*numlocki*/'72','74','81'];
    //przyciski jakie uzywasz do grania poszczególnych dźwięków
    const Letters = ['a' ,'s' ,'f' ,'g' ,'h' ,'k' ,'l' ,"3" ,'4' ,'5' ,'7' ,'8' ,'0' ,'-' ,'=' ,/*koniec czarnych */  ' ' ,'z' ,'x' ,'c' ,'v' ,'b' ,'n' ,'m' ,',' ,'.' ,'q' ,"w" ,'e' ,'r' ,'t' ,'y' ,'u' ,'i' ,'o' ,'p','[' ,']','\\',/* numlocki */'Home','ArrowUp','PageUp','+','ArrowLeft','Clear','ArrowRight','End','ArrowDown','PageDown']; //19
    //tworzenie sciezki do sountracka
    const URL = 'sounds/' + Numbers[i] + '.mp3';
    //Numbers[i] oznacza lista na pozycji i np lista[0] czyli 47 (patrz 30 linijka pierwszy dzwiek/numer)
    
    
    //dodanie działania na naciśniecie klawisza w dół
    document.addEventListener('keydown',(event)=>{
        
        //jeśli naciśnięty klawisz znajduje sie w liscie uzywanych klawiszy (patrz 32 linijka) to:
        if(event.key==Letters[i]){
            //jeśli listAudio[7] zawsze rowna sie false lub true jeśli jest true czyli w użyciu pomija naciśniecie klawisza 
            //(oznacza tyle że jeśli 4 klawisze w użyciu wtedy niezagrasz muzyki 5 klawiszem)
            if(listAudio[9]==true){
                //przerwanie
                return;
            }else
            console.log(Numbers[i]);
            //dodanie liczby klawiszy
            j=j+1;  
            //zmiana wartosci w liscie na true - czyli w użyciu
            listAudio[j*2-1]=true;
            //jeślu jest czarny(czrnych klawiszy jest 15) to zmiana koloru 
            if(i<15) key.classList.add("InUseB");
            //jeślu jest inny(biały) to zmiana koloru innego
            else key.classList.add("InUseW");
            //tworzenie jakby soundtracka i przypisanie do : audio , audio mozna startowac i pauzować
            let audio = new Audio(URL);
            //żeby soutrack grał
            audio.play();
 

        }
    
    });
    //dodanie reakcji na odciśnięcie klawisza( czyli jak klawisz idzie do góry )
    document.addEventListener('keyup',(event)=>{
        //jesli znaduje sie w liscie uzywanych klawiszy
        if(event.key==Letters[i]){
            //usuwa klawisz z uzywanych
            listAudio[j*2-1]=false;
            //odejmuje 1 klawisz z uzycia
            j-=1;
            //usuwa kolory
            key.classList.remove("InUseB");
            key.classList.remove("InUseW");
        
        }
    
    });
    
    //dodawanie eventu na klikniecie
    key.addEventListener('click',function(){
        //granie
        //zawsze jeden klawisz w uzyciu(myszka)
        j=1;
        //odwałanie do fukcnji graj(patrz 9 linijka)
        playSound(URL,i,key);
        
    });

})