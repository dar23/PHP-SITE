const social_media=document.querySelectorAll('.material-symbols-outlined')






social_media.forEach((e) => {


    const whatsupp=document.querySelector(".fa-brands.fa-whatsapp");
    const facebook=document.querySelector(".fa-brands.fa-facebook-messenger");
 


 
  e.addEventListener("click", () => {
    // każdy element listy kliknięty wykona kod zawarty w klamrze

    whatsupp.style.display = "block";
    facebook.style.display = "block";
  });

});


















