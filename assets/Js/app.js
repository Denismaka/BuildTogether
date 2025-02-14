// Javascript for navigation bar affects on scroll

window.addEventListener('scroll', function () {
  const header = document.querySelector('header');
  header.classList.toggle('sticky', window.scrollY > 0);
});

const menuBtn = document.querySelector('.menu-btn');
const navigation = document.querySelector('.navigation');
const navigationItems = document.querySelectorAll('.navigation a'); // Ajouté

menuBtn.addEventListener('click', () => {
  menuBtn.classList.toggle('active');
  navigation.classList.toggle('active');
});

navigationItems.forEach((navigationItem) => {
  navigationItem.addEventListener('click', () => {
    menuBtn.classList.remove('active');
    navigation.classList.remove('active');
  });
});

ScrollReveal({
  reset: true,
  distance: '80px',
  duration: 2000,
  delay: 200,
});
ScrollReveal().reveal('.container, .heading', { origin: 'top' });
ScrollReveal().reveal('img, .col-md-4, form', { origin: 'bottom' });
ScrollReveal().reveal('h1, h3, h4, h5, span, li', { origin: 'left' });
ScrollReveal().reveal('p, i, .row', { origin: 'right' });
