const slides = document.querySelector(".slider").children;
const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
const position = document.querySelector(".position");
let index = 0;

prev.addEventListener("click",function(){
    prevSlide();
    updateCirclePosition();
    resetTimer();
})
next.addEventListener("click",function(){
    nextSlide();
    updateCirclePosition();
    resetTimer();
})

function circlePosition(){
    for(let i = 0; i < slides.length; i++){
        const div=document.createElement("div");
              div.innerHTML=i+1;
            div.setAttribute("onclick","slideIndicator(this)")
            div.id = i;
            if(i == 0){
                div.className = "active";
            }
           position.appendChild(div);
    }
}
circlePosition();

function slideIndicator(element){
    index=element.id;
    changeSlide();
    updateCirclePosition();
    resetTimer();
}

function updateCirclePosition(){
    for(let i = 0; i < position.children.length; i++){
        position.children[i].classList.remove("active");
    }
    position.children[index].classList.add("active");
}

function prevSlide(){
    if(index == 0){
        index = slides.length-1;
    }
    else{
        index--;
    }
    changeSlide();
}

function nextSlide(){
    if(index == slides.length-1){
        index = 0;
    }
    else{
        index++;
    }
    changeSlide();
}

function changeSlide(){
    for(let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
    }
    slides[index].classList.add("active");
}

function resetTimer(){
    clearInterval(timer);
    timer = setInterval(autoPlay,6000);
}

function autoPlay(){
    nextSlide();
    updateCirclePosition();
}

let timer = setInterval(autoPlay,6000);