
document.addEventListener("DOMContentLoaded", () => {
    const section = document.querySelector(".history-horizontal");
    const topCards = document.querySelectorAll(".top-row .timeline-card");
    const bottomCards = document.querySelectorAll(".bottom-row .timeline-card");
    const progress = document.querySelector(".timeline-progress");
    const dots = document.querySelectorAll(".timeline-dot");

    const sequence = [
        { card: topCards[0], percent: 5, percentMobile: "20%" },
        { card: bottomCards[0], percent: 40, percentMobile: "50%" },
        { card: topCards[1], percent: 70, percentMobile: "75%" },
        { card: bottomCards[1], percent: 100, percentMobile: "100%" }
    ];

    let started = false;

    function animateStep(step, delay) {
        setTimeout(() => {
            const isMobile = window.innerWidth <= 768;

       
            if (isMobile) {
                progress.style.height = step.percentMobile;
            } else {
                progress.style.width = step.percent + "%";
            }

            if (step.card) step.card.classList.add("active");

            
            const dotIndex = sequence.indexOf(step);
            if (dots[dotIndex]) dots[dotIndex].classList.add("active");
        }, delay);
    }

    function startAnimation() {
        sequence.forEach((step, i) => {
            animateStep(step, i * 1200); 
        });

    
        section.querySelectorAll("h2").forEach(h =>
            h.classList.add("show-line")
        );
    }

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !started) {
                started = true;
                startAnimation();
            }
        });
    }, { threshold: 0.3 });

    observer.observe(section);
});


document.addEventListener("DOMContentLoaded", () => {

  const revealElements = document.querySelectorAll(
    ".reveal, .reveal-left, .reveal-right"
  );

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
          observer.unobserve(entry.target); 
        }
      });
    },
    { threshold: 0.25 }
  );

  revealElements.forEach((el, index) => {
    el.style.transitionDelay = `${index * 110}ms`; 
    observer.observe(el);
  });

});

// ================= Teams =================

const cardsView = document.getElementById('team-cards');
const membersView = document.getElementById('team-members');
const membersContent = document.getElementById('membersContent');
const deptTitle = document.getElementById('deptTitle');
const backArrow = document.getElementById('backArrow');

const teams = {
  hr: {
    title: "Human Resources",
    members: [
      { name: "Abderrahmen Ghomari", role: "PDG", img: "images/team/Ghoumari-abderahman.png" },
      { name: "Karim L.", role: "Recruitment", img: "images/team/souhil-meddah.png" }
    ]
  },
  finance: {
    title: "Finance",
    members: [
      { name: "Nadia K.", role: "Financial Director", img: "images/team/fin1.jpg" }
    ]
  },
  marketing: {
    title: "Communication & Marketing",
    members: [
      { name: "Yassine M.", role: "Marketing Lead", img: "images/team/mk1.jpg" }
    ]
  },
  operation: {
    title: "Operation",
    members: [
      { name: "Samir O.", role: "Operations Manager", img: "images/team/op1.jpg" }
    ]
  },
  it: {
    title: "IT Department",
    members: [
      { name: "Mohamed A.", role: "IT Manager", img: "images/team/it1.jpg" }
    ]
  }
};

document.querySelectorAll('.team-card').forEach(card => {
  card.addEventListener('click', () => {
    const dept = card.dataset.dept;
    const team = teams[dept];

    deptTitle.textContent = team.title;
    membersContent.innerHTML = team.members.map(m => `
      <div class="team-member">
        <img src="${m.img}" alt="${m.name}">
        <h4>${m.name}</h4>
        <span>${m.role}</span>
      </div>
    `).join('');

    cardsView.classList.remove('active');
    membersView.classList.add('active');
  });
});

backArrow.addEventListener('click', () => {
  membersView.classList.remove('active');
  cardsView.classList.add('active');
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
