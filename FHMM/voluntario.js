const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function(){
    navbar.classList.toggle('active', window.scrollY >3)
})   


// Inicializa ScrollMagic
const controller = new ScrollMagic.Controller();

// Función para manejar el scroll y aplicar el efecto de fade-in con movimiento
function handleScroll() {
    const elements = document.querySelectorAll('.sc, .sc2');

    elements.forEach(element => {
        if (isElementInViewport(element) && !element.classList.contains('visible')) {
            element.classList.add('visible');

            // Crea una nueva animación GSAP
            const tween = gsap.fromTo(element, { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: .5 });

            // Crea una escena ScrollMagic para activar la animación cuando el elemento esté en el viewport
            new ScrollMagic.Scene({
                triggerElement: element,
                triggerHook: 0.7, 
                reverse: false, 
            })
            .setTween(tween)
            .addTo(controller);
        }
    });
}

// Agrega un listener de scroll para llamar a handleScroll en cada scroll
window.addEventListener('scroll', handleScroll);

// Función para verificar si un elemento está en el viewport (igual que en el ejemplo anterior)
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}


// ---------------------------slider
