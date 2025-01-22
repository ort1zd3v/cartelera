document.addEventListener("DOMContentLoaded", () => {
    // Menú desplegable
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");
    menuToggle.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });

    const carouselImages = ["/images/slide1.jpg", "/images/slide2.jpg", "/images/slide3.jpg"];
    let currentImageIndex = 0;
    const carouselImage = document.getElementById("carousel-image");

    const showImage = () => {
        carouselImage.style.transform = "scale(1.1)";
        setTimeout(() => {
            carouselImage.style.transform = "scale(1)";
            carouselImage.src = carouselImages[currentImageIndex];
        }, 300);
    };

    document.getElementById("next").addEventListener("click", () => {
        currentImageIndex = (currentImageIndex + 1) % carouselImages.length;
        showImage();
    });
    document.getElementById("prev").addEventListener("click", () => {
        currentImageIndex = (currentImageIndex - 1 + carouselImages.length) % carouselImages.length;
        showImage();
    });

    const contactForm = document.getElementById("contact-form");
    contactForm.addEventListener("submit", (event) => {
        event.preventDefault();
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const message = document.getElementById("message").value;
        if (!name || !email || !message) {
            alert("Please fill in all fields.");
        } else {
            alert("Form submitted successfully!");
        }
    });
});
