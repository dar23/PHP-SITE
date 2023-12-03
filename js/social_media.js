const social_media=document.querySelectorAll('.lin') ;






social_media.forEach((e) => {

  e.addEventListener("click", () => {
    // każdy element listy kliknięty wykona kod zawarty w klamrze
 e.classList.toggle('dupa');

  });

});





//const bodys = document.querySelectorAll('.dupa');

//bodys.forEach(function (element) {
 //   element.addEventListener('click', function () {
  //      element.classList.toggle('łomotong');
 //   });
//});