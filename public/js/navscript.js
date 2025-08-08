const header = document.getElementById('header');
let lastScrollTop = 0;

window.addEventListener('scroll', () => {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if(scrollTop === 0) {
    header.classList.remove('hidden');
  } else if(scrollTop > lastScrollTop) {
    header.classList.add('hidden');
  } else {
    header.classList.remove('hidden');
  }
  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});
