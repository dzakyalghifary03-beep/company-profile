import { createIcons, icons } from "lucide";
import AOS from "aos";
import "aos/dist/aos.css";

createIcons({ icons });

AOS.init({
    duration: 1000,
    once: true,
    offset: 100,
});

const backToTop = document.getElementById("backToTop");

window.addEventListener("scroll", () => {
    if (!backToTop) return;

    if (window.scrollY > 300) {
        backToTop.classList.remove("opacity-0", "invisible");
        backToTop.classList.add("opacity-100", "visible");
    } else {
        backToTop.classList.add("opacity-0", "invisible");
        backToTop.classList.remove("opacity-100", "visible");
    }
});

backToTop?.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});

// Mobile Menu
const menuButton = document.getElementById("menuButton");
const mobileMenu = document.getElementById("mobileMenu");

menuButton?.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
});
