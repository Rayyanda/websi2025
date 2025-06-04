document.querySelectorAll(".carousel").forEach(initCarousel);

function initCarousel(carousel) {
    const slides = carousel.querySelectorAll(".carousel-slide");
    const prevBtn = carousel.querySelector(".carousel-button.prev");
    const nextBtn = carousel.querySelector(".carousel-button.next");
    const intervalTime = parseInt(carousel.dataset.interval, 10) || 5000;

    let currentIndex = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
            slide.setAttribute("aria-hidden", i === index ? "false" : "true");
        });
        currentIndex = index;
    }

    function showNext() {
        const nextIndex = (currentIndex + 1) % slides.length;
        showSlide(nextIndex);
    }

    function showPrev() {
        const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(prevIndex);
    }

    function startInterval() {
        slideInterval = setInterval(showNext, intervalTime);
    }

    function resetInterval() {
        clearInterval(slideInterval);
        startInterval();
    }

    if (nextBtn)
        nextBtn.addEventListener("click", () => {
            showNext();
            resetInterval();
        });
    if (prevBtn)
        prevBtn.addEventListener("click", () => {
            showPrev();
            resetInterval();
        });

    showSlide(currentIndex);
    startInterval();
}
