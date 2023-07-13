const html_class=document.querySelector('.html_class'); //  cała strona
const record_video=document.querySelector('.records_video'); // kontener wewnątrz strony






const record_video_offsetTop = record_video.offsetTop; //górny brzeg div record_video;
const page_height= window.innerHeight; //wysokość okna przeglądarki; 
const record_video_height=record_video.offsetHeight; //wysokość kontenera record_video;





const scrollEnd = record_video_offsetTop + record_video_height - page_height;



function stopscroll(){

    if(window.scrollY>=scrollEnd){

   
     
  html_class.style.overflowY="hidden";


    }

   

    
}

record_video.addEventListener('mouseover', stopscroll);




function endscroll(){

 
html_class.style.overflowY="visible";


  
}


record_video.addEventListener('mouseleave', endscroll);






const html_class1 = document.querySelector('.html_class'); // cała strona
const entry = document.querySelector('.entries_post'); // kontener wewnątrz strony

const entry_offsetTop = entry.offsetTop; // górny brzeg div record_video;
const page_heighter = window.innerHeight; // wysokość okna przeglądarki;
const entry_height = entry.offsetHeight; // wysokość kontenera record_video;

const scrollEndTwo = entry_offsetTop + entry_height - page_heighter;

function stopscroller() {
  if (window.scrollY >= scrollEndTwo) {
    html_class1.style.overflowY = "hidden";
  }
}

entry.addEventListener('mouseover', stopscroller);

function endscroller() {
  html_class1.style.overflowY = "visible";
}

entry.addEventListener('mouseleave', endscroller);



//function stopscroll(){


   // document.write(record_video_offsetTop)
   // document.write(record_video_height);
    
    
  //  document.write(page_height);
    
    
    
    
    
    
   // record_video.addEventListener('scrollend', stopscroll);
    