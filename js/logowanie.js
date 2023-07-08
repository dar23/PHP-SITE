let button_admin=document.querySelector('.button_admin');
let panel=document.getElementById('panel'); 
//formularz logowania

button_admin.addEventListener("click", open_close_panel);


function open_close_panel(){

if(panel.style.display=="block"){

panel.style.display="none";


}else{

panel.style.display="block";


}






};
