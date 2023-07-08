const all_li=document.querySelectorAll('body>nav>ul>li');



all_li.forEach(e=>{

  const icon= e.querySelector('span');
  const text= e.querySelector('ul>li>a');
 
 
  e.addEventListener('mouseover', () => {

    icon.classList.add('icon_animation');
    text.classList.add('name_element_menu');
  
 });

 e.addEventListener('mouseleave', () => {
  
  icon.classList.remove('icon_animation');     
  text.classList.remove('name_element_menu');
  
})
});

