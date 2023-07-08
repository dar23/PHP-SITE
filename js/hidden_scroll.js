let scroll_over=document.querySelector('.entries_post');



scroll_over.addEventListener('mouseover', ()=>{

scroll_over.style.overflowY="scroll";
scroll_over.style.width="104%";


});



scroll_over.addEventListener('mouseleave', ()=>{

    scroll_over.style.overflowY="hidden";
    scroll_over.style.width="100.5%";
    
    
    });