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

// Active Navbar
const sections = document.querySelectorAll("section[id]");
const navLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop - 120;
        const sectionHeight = section.offsetHeight;

        if (
            window.scrollY >= sectionTop &&
            window.scrollY < sectionTop + sectionHeight
        ) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach((link) => {
        link.classList.remove("text-blue-700");

        if (link.getAttribute("href") === `#${current}`) {
            link.classList.add("text-blue-700");
        }
    });
});

// Counter Animation
const counters = document.querySelectorAll(".counter");

const counterObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;

            const counter = entry.target;
            const target = +counter.dataset.target;

            let current = 0;
            const increment = target / 50;

            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.innerText = Math.ceil(current);

                    requestAnimationFrame(updateCounter);
                } else {
                    counter.innerText = target;
                }
            };

            updateCounter();

            counterObserver.unobserve(counter);
        });
    },
    {
        threshold: 0.5,
    },
);

counters.forEach((counter) => {
    counterObserver.observe(counter);
});

// Scroll Progress Bar
const scrollProgress = document.getElementById("scrollProgress");

window.addEventListener("scroll", () => {
    if (!scrollProgress) return;

    const scrollTop = window.scrollY;
    const docHeight =
        document.documentElement.scrollHeight - window.innerHeight;

    const progress = (scrollTop / docHeight) * 100;

    scrollProgress.style.width = `${progress}%`;
});
