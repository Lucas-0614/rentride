// script.js
document.addEventListener("DOMContentLoaded", function () {
    const serviceItems = document.querySelectorAll('.service-item');

    serviceItems.forEach((serviceItem, index) => {
        let slideIndex = 0;
        const slides = serviceItem.querySelectorAll('.mySlides');

        const showSlides = () => {
            slides.forEach(slide => slide.style.display = 'none');
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1; }
            slides[slideIndex - 1].style.display = 'block';
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        };

        showSlides();
    });
});
