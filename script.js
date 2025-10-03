const menuToggle = document.getElementById("menu-toggle");
const nav = document.getElementById("nav");
const menuClose = document.getElementById("menu-close");


document.querySelectorAll('.nav ul li a').forEach(link => {
  link.addEventListener('click', function(e) {
    const href = link.getAttribute('href');
    if (href && href.startsWith('#')) {
      e.preventDefault();
      const section = document.querySelector(href);
      if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
       
        const nav = document.getElementById('nav');
        const menuToggle = document.getElementById('menu-toggle');
        const menuClose = document.getElementById('menu-close');
        if (window.innerWidth < 768 && nav.classList.contains('active')) {
          nav.classList.remove('active');
          nav.style.display = 'none';
          if (menuToggle) {
            menuToggle.style.display = 'block';
            menuToggle.classList.remove('active');
          }
          if (menuClose) menuClose.style.display = 'none';
        }
      }
    }
  });
});


menuToggle.addEventListener("click", () => {
  nav.classList.add("active");
  nav.style.display = "block";
  menuToggle.classList.add("active");
  if (menuClose) menuClose.style.display = "block";
  menuToggle.style.display = "none";
});