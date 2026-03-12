// ================= MENU MOBILE =================
function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    const overlay = document.querySelector('.overlay');

    const isOpen = navLinks.style.right === "0px";

    navLinks.style.right = isOpen ? "-300px" : "0px";
    overlay.classList.toggle("active", !isOpen);
}
function closeMenu() {
    document.querySelector('.nav-links').style.right = "-300px";
    document.querySelector('.overlay').classList.remove("active");
}

