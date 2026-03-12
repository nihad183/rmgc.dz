// ================= CHIFFRES CLES =================
const counters = document.querySelectorAll(".stat h3[data-target]");
const statsSection = document.querySelector(".stats");
function startCount(counter) {
    const target = +counter.getAttribute("data-target");
    let current = 0;
    const increment = target / 100;

    const updateCounter = setInterval(() => {
        current += increment;
        if (current >= target) {
            counter.innerText = "+" + target;
            clearInterval(updateCounter);
        } else {
            counter.innerText = "+" + Math.ceil(current);
        }
    }, 20);
}
if (statsSection) {
    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                counters.forEach(counter => startCount(counter));
                obs.unobserve(statsSection);
            }
        });
    }, {
        threshold: 0.5 
    });

    observer.observe(statsSection);
}



// ================= ANIMATION CARDS =================
document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".service-card");
    const logos = document.querySelectorAll(".filiales-logos a");

    function revealOnScroll(elements, triggerPercent = 0.85, stagger = 0) {
        const triggerBottom = window.innerHeight * triggerPercent;

        elements.forEach((el, i) => {
            const top = el.getBoundingClientRect().top;
            if (top < triggerBottom) {
                setTimeout(() => el.classList.add("show"), i * stagger);
            }
        });
    }

    function animateAll() {
        revealOnScroll(cards, 0.8, 0);
        revealOnScroll(logos, 0.85, 160);
    }

    window.addEventListener("scroll", animateAll);
    animateAll();
});



// ================= BACK TO TOP =================
const backToTopButton = document.getElementById("backToTop");
window.addEventListener("scroll", () => {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        backToTopButton.style.display = "flex";
    } else {
        backToTopButton.style.display = "none";
    }
});
backToTopButton.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

