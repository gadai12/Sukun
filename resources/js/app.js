import './bootstrap';
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');   // fade in
        } else {
            entry.target.classList.remove('show'); // fade out
        }
    });
});

document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));