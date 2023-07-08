let player=document.querySelector(".player");
let records_video=document.querySelector(".records_video");
let posts=document.querySelector(".main_post");
let entries_post=document.querySelector(".entries_post");
//window.scroll - wartość o którą skrollowaliśmy stronę
// window.innerHeight - wysokość okna przeglądarki 


function current_scroll(){

   const opacity_player = 1 - (scrollY*2 / window.innerHeight); //opacity od 0 pozycji zanika      
   
   const opacity_post= 0  +   (scrollY / window.innerHeight);  // opacity od 0 pozycji pojawia się
       

     if(scrollY>=0){    // jeżęli scroller jest na pozycji 0 i więcej (pixele pionowe)

       
        player.style.opacity= opacity_player;  // uchwyt do obiektu ze stylem opacity, przypisanie do niego zmiennej opacity_player
      

        posts.style.opacity=opacity_post; // uchwyt do obiektu ze stylem opacity, przypisanie do niego zmiennej opacity_player

        entries_post.style.opacity=opacity_post;

     }


       
}
  
window.addEventListener("scroll",current_scroll);