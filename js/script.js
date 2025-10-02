// Menu Mobile
const toggle = document.getElementById("menu-toggle");
const nav = document.getElementById("nav");

toggle.addEventListener("click", () => {
  nav.classList.toggle("active");
  if (nav.classList.contains("active")) {
    nav.style.display = "block";
  } else {
    nav.style.display = "none";
  }
});
