document.addEventListener('DOMContentLoaded', function() {
  
  const socialMediaIcons = document.querySelectorAll('.link');


  socialMediaIcons.forEach(function(icon) {

    const messengerIcon = icon.nextElementSibling;
    const whatsuppIcon = icon.nextElementSibling.nextElementSibling;


      icon.addEventListener('click', function() {
          // Toggleowanie klasy `turn_on_off` dla ikon Messengera i WhatsAppa
          messengerIcon.classList.toggle('turn_on_off');
          whatsuppIcon.classList.toggle('turn_on_off');
      });
  });
});
 
//const bodys = document.querySelectorAll('.dupa');

//bodys.forEach(function (element) {
 //   element.addEventListener('click', function () {
  //      element.classList.toggle('łomotong');
 //   });
//});