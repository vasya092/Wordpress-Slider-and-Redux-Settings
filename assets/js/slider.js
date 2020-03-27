var currentSlide = 0;

let slides = document.getElementsByClassName("slider-element");

function InitSlider(){
    for(let i=1;i<slides.length;i++){
        slides[i].style.display = "none";
    }
    console.log(slides[0]);
}

document.getElementById('arrow-next').addEventListener('click', moveSlide.bind(null,1));
document.getElementById('arrow-prev').addEventListener('click', moveSlide.bind(null,-1));


function moveSlide(value,event){
    
    slides[currentSlide].style.display = "none";
    if(value == 1){
        (currentSlide < slides.length-1) ? currentSlide++ : currentSlide = 0;
    }
    else{ 
        (currentSlide != 0) ? currentSlide-- : currentSlide = slides.length-1;
    }
    slides[currentSlide].style.display = "block";
}

InitSlider();

let timerId = setInterval(() => moveSlide(1), 5000);