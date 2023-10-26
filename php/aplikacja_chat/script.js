window.onload = () => {
   main();
  };

function main(){
  szukanie();
  aktualizacja_danych();
  

}
function wybierz(div){

  document.querySelector(".panel_gorny .nazwa h3").innerHTML =  div.children[1].children[0].innerHTML;
  document.querySelector(".panel_gorny .ikona").innerHTML = div.children[0].outerHTML;
}
function aktualizacja_danych(){

  // for (var znajomy of znajomi) {
  //       znajomy.addEventListener("click",()=>{
  //       var nazwa = this;
  //       ajax()
  //   });
  // }
    var dane = document.querySelector(".media");
    ajax(dane,"",2);
    



}

function szukanie(){
  var div = document.querySelector(".lista_znajomych");
  ajax(div,"",1);
  var szukaj = document.querySelector(".szukaj");
  szukaj.addEventListener("input", ()=>{
    ajax(div,szukaj.value,1);     
  });
}
function ajax(div, str, nr){
  var xml = new XMLHttpRequest();
  xml.onload = function() {
    div.innerHTML = this.responseText;
  }
  xml.open("GET", "informacje.php?szukane="+str+"&zapytanie="+nr);
  xml.send();

}
