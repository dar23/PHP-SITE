const photo=document.querySelectorAll('.gallery_post>.photo');


photo.forEach(e=>{

    e.addEventListener('click', ()=>{
       
        const main_photo=document.querySelector('.place_big_photo');
    
        const photo_src=e.src;

              
            main_photo.innerHTML=`<img src="${photo_src}" class="big" >`;


});

});
