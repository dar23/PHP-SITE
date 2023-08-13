let container_search = document.querySelector(".input_search");
let body = document.querySelector(".main"); //
let main_info = document.querySelector(".main_info");

container_search.addEventListener("click", search_open, false);
body.addEventListener("mouseover", search_close, false);

function search_open() {
  let input_search = document.querySelector(".input_search");
  let loopa = document.querySelector(".loop");

  if ((input_search.style.width = "300px")) {
    input_search.style.color = "white";

    input_search.style.width = "300px";

    loopa.style.visibility = "hidden";
  }
}

function search_close() {
  let input_search = document.querySelector(".input_search");
  let loopa = document.querySelector(".loop");

  if ((input_search.style.width = "300px")) {
    input_search.style.color = "rgb(109,109,109)";
    input_search.style.width = "300px";
  }

  if ((input_search.style.width = "300px")) {
    loopa.style.visibility = "visible";
    loopa.style.color = "silver";
  }
}
