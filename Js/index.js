// Rolagem suave para botões/links
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const id = link.getAttribute('href');
    const destino = document.querySelector(id);
    if (destino) {
      destino.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// Animações ao rolar (fadeIn nas seções)
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('fade-in');
    }
  });
}, { threshold: 0.3 });

document.querySelectorAll('.section').forEach(section => {
  section.classList.add('fade-hidden');
  observer.observe(section);
});

// Carousel (já existente)
const carousels = {
  galeria: { index: 0, element: document.getElementById('galeria-carousel') },
  equipe: { index: 0, element: document.getElementById('equipe-carousel') }
};

function moveCarousel(name, direction) {
  const carousel = carousels[name];
  const totalItems = carousel.element.children.length;
  carousel.index = (carousel.index + direction + totalItems) % totalItems;
  carousel.element.style.transform = `translateX(-${carousel.index * 100}%)`;
}
