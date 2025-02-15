document.addEventListener('DOMContentLoaded', () => {
  const sr = ScrollReveal({
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200,
  });

  sr.reveal('.container, .heading', { origin: 'top' });
  sr.reveal('img, .col-md-4, form', { origin: 'bottom' });
  sr.reveal('h1, h3, h4, h5, span, li', { origin: 'left' });
  sr.reveal('p, i, .row', { origin: 'right' });
});

const swiper = new Swiper('.slider-wrapper', {
  loop: true,
  grabCursor: true,
  spaceBetween: 30,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // Breakpoints
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
