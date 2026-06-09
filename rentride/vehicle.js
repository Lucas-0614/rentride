
document.addEventListener("DOMContentLoaded", function() {
    let slideIndex = 0;
    const slides = document.getElementsByClassName("slideshow-image");

    // Show the initial slide
    showSlides();

    // Function to display slides
    function showSlides() {
        // Hide all slides
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        // Increment slideIndex and reset if out of bounds
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        // Display the current slide
        slides[slideIndex - 1].style.display = "block";
    }

    // Function to move slides forward or backward
    function plusSlides(n) {
        slideIndex += n;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        if (slideIndex < 1) {
            slideIndex = slides.length;
        }
        showSlides();
    }

    // Keyboard navigation using left and right arrow keys
    document.addEventListener("keydown", function(event) {
        if (event.key === "ArrowLeft") {
            event.preventDefault(); // Prevent page scrolling
            plusSlides(-1); // Move back one slide
        } else if (event.key === "ArrowRight") {
            event.preventDefault(); // Prevent page scrolling
            plusSlides(1); // Move forward one slide
        }
    });
});
