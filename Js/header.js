let menuIcon = document.querySelector("#menu-icon");
let navbar = document.querySelector(".header--navbar");
let header = document.querySelector(".header");

header.classList.toggle("stycky", window.scrollY > 100);

menuIcon.onclick = () => {
  menuIcon.classList.toggle("bx-x");
  navbar.classList.toggle("active");
};
