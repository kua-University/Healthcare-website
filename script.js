document.addEventListener("DOMContentLoaded", () => {

    // =========================================
    // CONTACT FORM MESSAGE
    // =========================================

    const contactForm = document.getElementById("contactForm");

    if (contactForm) {

        contactForm.addEventListener("submit", () => {

            const msg = document.getElementById("contactMsg");

            if (msg) {

                msg.innerText = "✅ Message sent successfully!";

                msg.style.color = "green";

            }

        });

    }

    // =========================================
    // BUTTON HOVER EFFECT
    // =========================================

    const buttons = document.querySelectorAll(".btn");

    buttons.forEach(button => {

        button.addEventListener("mouseenter", () => {

            button.style.transform = "translateY(-3px) scale(1.03)";

        });

        button.addEventListener("mouseleave", () => {

            button.style.transform = "translateY(0) scale(1)";

        });

    });

    // =========================================
    // FEATURE CARD ANIMATION
    // =========================================

    const cards = document.querySelectorAll(".feature-card");

    cards.forEach(card => {

        card.addEventListener("mouseenter", () => {

            card.style.transform = "translateY(-10px)";

        });

        card.addEventListener("mouseleave", () => {

            card.style.transform = "translateY(0)";

        });

    });

    // =========================================
    // SMOOTH SCROLLING
    // =========================================

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {

        anchor.addEventListener("click", function(e) {

            e.preventDefault();

            const target = document.querySelector(this.getAttribute("href"));

            if (target) {

                target.scrollIntoView({
                    behavior: "smooth"
                });

            }

        });

    });

    // =========================================
    // NAVBAR ACTIVE LINK
    // =========================================

    const navLinks = document.querySelectorAll(".navbar a");

    navLinks.forEach(link => {

        link.addEventListener("click", () => {

            navLinks.forEach(nav => nav.classList.remove("active"));

            link.classList.add("active");

        });

    });

    // =========================================
    // SIMPLE FADE-IN ANIMATION
    // =========================================

    const fadeElements = document.querySelectorAll(
        ".feature-card, .stat-box, .service-card, .about-card"
    );

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.classList.add("show");

            }

        });

    }, {
        threshold: 0.2
    });

    fadeElements.forEach(el => {

        el.classList.add("hidden");

        observer.observe(el);

    });

});