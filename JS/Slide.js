var currentIndex = 0;
var totalSlides = document.querySelectorAll('.slide').length;

function showSlide(index) {
    var slides = document.querySelector('.slides');
    if (index < 0) {
        currentIndex = totalSlides - 1;
    } else if (index >= totalSlides) {
        currentIndex = 0;
    } else {
        currentIndex = index;
    }
    slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

function nextSlide() {
    showSlide(currentIndex + 1);
}
