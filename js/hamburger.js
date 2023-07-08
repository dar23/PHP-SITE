const hamburger=document.querySelector('.hamburger');


    const hamburger_child_one= hamburger.children[0];
    const hamburger_child_two= hamburger.children[1];
    const hamburger_child_three= hamburger.children[2];


hamburger.addEventListener('click', ()=>{
  
    const menu= document.querySelector('nav>ul');

        hamburger_child_three.classList.toggle('hamburger_three_3');
        hamburger_child_one.classList.toggle('hamburger_one_1')
        hamburger_child_two.classList.toggle('hamburger_two_2');
     
        const menu_open= menu.classList.toggle('class_open');  // funkcja może być również zmienną...
       
        const place_to_post=document.querySelector('.place_to_posts'); 
        const place_to_video=document.querySelector('.player');
      //  const place_to_main=document.querySelector('.main_info'); 

if(menu_open){    // gdy kliknę, zostało dokonane a więc warunek spełniony, wartość spełnionego warunku true i rozumiem że tylko raz się dokona 


        place_to_post.style.animation="lefting 1s forwards"  // po kliknięciu w ikonę hamburgera warunek się spełnia
        place_to_video.style.animation="lefting_three 1s forwards" 
     //   place_to_main.style.animation="lefting 1s forwards" 

} else{

      
        place_to_post.style.animation="lefting1 1s forwards"  
        place_to_video.style.animation="lefting1_three 1s forwards" 
        //place_to_main.style.animation="lefting1 1s forwards" 

}



})
