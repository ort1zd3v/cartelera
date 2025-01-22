require("./bootstrap");

const carousel = new bootstrap.Carousel(document.getElementById('carouselExample'), {
    interval: 2000,
    wrap: true
});


document.addEventListener("DOMContentLoaded", () => {
    // Menú desplegable
    const navbar = document.querySelector(".navbar");
    navbar.addEventListener("click", () => {
        navbar.classList.toggle("show");
    });
});
