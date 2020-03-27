var domReady = (function (){
var currentSlide = 0;

let slides = document.getElementsByClassName("slider-element");

function InitSlider(){
    for(let i=1;i<slides.length;i++){
        slides[i].style.display = "none";
    }
    console.log(slides[0]);
}

document.getElementById('arrow-next').addEventListener('click', nextSlide);
document.getElementById('arrow-prev').addEventListener('click', prevSlide);

function nextSlide(){
    slides[currentSlide].style.display = "none";
    (currentSlide < slides.length-1) ? currentSlide++ : currentSlide = 0;
    slides[currentSlide].style.display = "block";
}

function prevSlide(){
    slides[currentSlide].style.display = "none";
    (currentSlide != 0) ? currentSlide-- : currentSlide = 2;
    slides[currentSlide].style.display = "block";
}


InitSlider();

let timerId = setInterval(() => nextSlide(), 5000);
})()