const ALLKEYS = document.querySelectorAll('.key');
var j = 1;
//tworzenie listy w ktore są pary 1-false(oznacza że nie jest w użyciu klawisz)itp..
var listAudio = [ 1,false,2,false,3,false,4,false,5,false];
function playSound(URL,i,key){
    if(i<15) key.classList.add("InUseB");
    else key.classList.add("InUseW");
    audio = new Audio(URL);
    audio.play()
    setTimeout(function(){
        key.classList.remove("InUseB");
        key.classList.remove("InUseW");
    },300)
}
//głowne operacje
ALLKEYS.forEach((key,i) =>{
    const Numbers = ['47','49','52','54','56','59','61','64','66','68','71','73','76','78','80',/*koniec czarnych */  '46','48','50','51','53','55','57','58','60','62','62','63','65','67','69','70','72','74','75','77','79','81','82','69',/*numlocki*/'72','74','81'];
    //przyciski jakie uzywasz do grania poszczególnych dźwięków
    const Letters = ['a' ,'s' ,'f' ,'g' ,'h' ,'k' ,'l' ,"3" ,'4' ,'5' ,'7' ,'8' ,'0' ,'-' ,'=' ,/*koniec czarnych */  ' ' ,'z' ,'x' ,'c' ,'v' ,'b' ,'n' ,'m' ,',' ,'.' ,'q' ,"w" ,'e' ,'r' ,'t' ,'y' ,'u' ,'i' ,'o' ,'p','[' ,']','\\',/* numlocki */'Home','ArrowUp','PageUp','+','ArrowLeft','Clear','ArrowRight','End','ArrowDown','PageDown']; //19
    const URL = 'sounds/' + Numbers[i] + '.mp3';
    
    
    //dodanie działania na naciśniecie klawisza w dół
    document.addEventListener('keydown',(event)=>{
        
        //jeśli naciśnięty klawisz znajduje sie w liscie uzywanych klawiszy:
        if(event.key==Letters[i]){
            //pomija naciśniecie klawisza 
            //jeśli 4 klawisze w użyciu wtedy niezagrasz muzyki 5 klawiszem
            if(listAudio[9]==true){
                //przerwanie
                return;
            }else
            console.log(Numbers[i]);
            j=j+1;  
            //zmiana wartosci w liscie na true - czyli w użyciu
            listAudio[j*2-1]=true;
            if(i<15) key.classList.add("InUseB");
            else key.classList.add("InUseW");
            let audio = new Audio(URL);
            //żeby soutrack grał
            audio.play();
        }
    });
    document.addEventListener('keyup',(event)=>{
        if(event.key==Letters[i]){
            listAudio[j*2-1]=false;
            j-=1;
            key.classList.remove("InUseB");
            key.classList.remove("InUseW");
        }
    });
    key.addEventListener('click',function(){
        j=1;
        playSound(URL,i,key);
        
    });

})
