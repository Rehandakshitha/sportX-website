const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar){
    bar.addEventListener('click', () =>{
        nav.classList.add('active');
    })
}

if (close){
    close.addEventListener('click', (event) =>{
        event.preventDefault(); // This prevents the default behavior (scrolling to the top)
        nav.classList.remove('active');
    })
}

// slider

// -----Variables-----
var slides = document.querySelectorAll('.slide');
var rbtn = document.querySelectorAll('.rad-btn');
var leftArrow = document.querySelector('.left');
var rightArrow = document.querySelector('.right');
var slideInt; // Store On Going Timer
var intTime = 5000;

// -----Iterate All Radio Navigation Buttons-----
rbtn.forEach(function(item, index){
    // Click Event for Buttons
    item.addEventListener('click', function(){
        manButtonNav(index);
    });
});

// -----Click Events for Arrows-----
// Right Arrow
rightArrow.addEventListener('click', function(e){
    e.preventDefault();
    nextSlide();
    clrInterval();
});

// Left Arrow
leftArrow.addEventListener('click', function(e){
    e.preventDefault();
    prevSlide();
    clrInterval();
});

// -----Function for Radio Navigation-----
function manButtonNav(index){
    for(var i = 0; i < slides.length; i++){
        // Set Slide and Radio Navigation Button
        if(i !== index){
            slides[i].classList.remove('curr');
            rbtn[i].classList.remove('active');
        }
        else{
            slides[index].classList.add('curr');
            rbtn[index].classList.add('active');
        }
    }
    clrInterval();
}

// -----Function for the Next Slide-----
function nextSlide(){
    var curr = document.querySelector('.curr');
    var active = document.querySelector('.active');
    // Unset Current Slide and Radio Button
    curr.classList.remove('curr');
    active.classList.remove('active');
    // Set Next Slide and Radio Button
    if(curr.nextElementSibling){
        curr.nextElementSibling.classList.add('curr');
        active.nextElementSibling.classList.add('active');
    }
    else{
        slides[0].classList.add('curr');
        rbtn[0].classList.add('active');
    }
}

// -----Function for the Previous Slide-----
function prevSlide(){
    var curr = document.querySelector('.curr');
    var active = document.querySelector('.active');
    // Unset Current Slide and Radio Button
    curr.classList.remove('curr');
    active.classList.remove('active');
    // Set Next Slide and Radio Button
    if(curr.previousElementSibling){
        curr.previousElementSibling.classList.add('curr');
        active.previousElementSibling.classList.add('active');
    }
    else{
        slides[slides.length - 1].classList.add('curr');
        rbtn[rbtn.length - 1].classList.add('active');
    }
}

// -----Function for Clear Interval-----
function clrInterval(){
    clearInterval(slideInt);
    slideInt = setInterval(nextSlide, intTime);
}

// -----Automatic Slide Navigation-----
slideInt = setInterval(nextSlide, intTime);