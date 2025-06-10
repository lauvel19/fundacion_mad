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



//----------------------------------------------------------------steps

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("multipaso-form");
    const steps = Array.from(form.querySelectorAll(".step"));
    let currentStep = 0;

    function showStep(stepIndex) {
        steps.forEach((step, index) => {
            step.style.display = index === stepIndex ? "block" : "none";
        });
    }

    function nextStep() {
        currentStep++;
        if (currentStep >= steps.length) {
            currentStep = steps.length - 1;
        }
        showStep(currentStep);
    }

    function prevStep() {
        currentStep--;
        if (currentStep < 0) {
            currentStep = 0;
        }
        showStep(currentStep);
    }

    showStep(currentStep);

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        // Aquí puedes agregar el código para enviar el formulario
    });

    const nextButtons = Array.from(form.querySelectorAll(".next-step"));
    const prevButtons = Array.from(form.querySelectorAll(".prev-step"));

    nextButtons.forEach((button) => {
        button.addEventListener("click", nextStep);
    });

    prevButtons.forEach((button) => {
        button.addEventListener("click", prevStep);
    });
});


