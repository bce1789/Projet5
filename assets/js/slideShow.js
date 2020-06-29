class SlideShow {
    constructor(container) {
        this.slides = document.querySelectorAll(container + ' .slide');
        this.currentSlide = 0;
        this.slideInterval = setInterval(this.nextSlide.bind(this), 3000);
    }
    nextSlide() {
        this.slides[this.currentSlide].className = 'slide';
        this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        this.slides[this.currentSlide].className = 'slide showing';
    }
}