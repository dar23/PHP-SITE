const all_video = document.querySelectorAll(".video_list");
//zmienna zawiera wszystkie elementy (video bez kontrolek) listy z filmami
const place_player = document.querySelector(".video_player");
const time_video = document.querySelector(".time_video");

all_video.forEach((e) => {
  e.addEventListener("click", () => {
    // każdy element listy kliknięty wykona kod zawarty w klamrze

    const video_source = e.querySelector("source").src; // zmienna pobierająca ścieżkę klikniętego filmiku :)

    place_player.innerHTML = `<video controls autoplay  class="time_video"><source src='${video_source}' type="video/mp4"></video>`;
  });
});

const video = document.querySelectorAll(".video_list"); // lista divów zawierających pliki video

//kontener na tekst i liczbę zliczeń
const count_div = document.querySelectorAll(".video_container>.record_video");
// do zliczania

for (let x = 0; video.length; x++)
  video[x].addEventListener("click", () => {
    count_div[x].innerText = 1 + video[x].textContent++; // kontener na wypisanie klikniętego video
  });

// stwórz nowe e.addEventlistener('click', ()=>{})
