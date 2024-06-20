let hideTextBtn = document.querySelectorAll(".main--btn_read");

hideTextBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    let text = btn.parentNode.querySelector(".hide"); // Seleccionar el elemento .hide dentro del mismo padre del botón
  
    text.classList.toggle("mostrar");
    if (text.classList.contains("mostrar")) {
      btn.innerHTML = "Leer menos";
    } else {
      btn.innerHTML = "Leer más";
    }
  });
});
