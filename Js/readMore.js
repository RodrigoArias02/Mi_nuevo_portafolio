//Read more
let hideTextBtn = document.getElementById("hideText_btn");
let hideText = document.getElementById("hideText");

hideTextBtn.addEventListener("click", toggleText);

function toggleText() {
  hideText.classList.toggle("mostrar");
  if (hideText.classList.contains("mostrar")) {
    hideTextBtn.innerHTML = "Leer menos";
  } else {
    hideTextBtn.innerHTML = "Leer mas";
  }
}
