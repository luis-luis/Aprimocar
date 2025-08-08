// navscript.js

const nav = document.getElementById('navmenu');
let lastScrollTop = 0;

window.addEventListener('scroll', () => {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if(scrollTop === 0) {
    // No topo, mostra a navbar
    nav.classList.remove('hidden');
  } else if(scrollTop > lastScrollTop) {
    // Rolando para baixo, esconde a navbar
    nav.classList.add('hidden');
  } else {
    // Rolando para cima, mostra a navbar
    nav.classList.add('hidden');
  }
  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Evita scroll negativo
});
