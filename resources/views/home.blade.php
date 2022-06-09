@extends('layouts.header')

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
<link rel="stylesheet" href="<?php echo asset('css/home.css')?>" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('Container')
<div class="wrapper">
    <div class="prev-btn"><i class="fas fa-chevron-left"></i></div>

    <div class="slides-container">
      <div class="slide-image">
            <img src="./asset/image-1.png" alt="" />
            <div class="text-content">
                <h2 class="title">Autumn <span>Season</span></h2>
                <p>Autumn, also known as fall in North American English, is one of the four temperate
                seasons. Outside the tropics, autumn marks the transition from summer to winter,
                in September or March. Autumn is the season when the duration of daylight becomes
                noticeably shorter and the temperature cools considerably.</p>
              </div>
      </div>
      <div class="slide-image">
        <img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg" alt=""/>
        <div class="text-content">
            <h2 class="title">Winter <span>Season</span></h2>
            <p>Winter is the coldest season of the year in polar and temperate zones. It occurs
            between autumn and spring.The tilt of Earth's axis causes seasons; winter occurs
            when a hemisphere is oriented away from the Sun. Different cultures define different
            dates as the start of winter, and some use a definition based on weather.</p>
          </div>
      </div>

      <div class="slide-image">
        <img src="https://1.bp.blogspot.com/-GgceYGYr2pk/YPCQp8loxqI/AAAAAAAACXU/Y795AFD-cN8PMV0V2__z2n1B3KFagE8qgCNcBGAsYHQ/s16000/1.jpg" alt="" />
        <div class="text-content">
            <h2 class="title">Summer <span>Season</span></h2>
            <p>Summer is the hottest of the four temperate seasons, occurring after spring and
            before autumn. At or aroundthe summer solstice, the earliest sunrise and latest
            sunset occurs, daylight hours are longest and dark hours are shortest, with day
            length decreasing as the season progresses after the solstice.</p>
        </div>
      </div>
    </div>

    <div class="next-btn"><i class="fas fa-chevron-right"></i></div>
  </div>
    <script>
        const slideImage = document.querySelectorAll(".slide-image");
const slidesContainer = document.querySelector(".slides-container");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");

let numberOfImages = slideImage.length;
let slideWidth = slideImage[0].clientWidth;
let currentSlide = 0;

// Set up the slider

function init() {
  /*   
    slideImage[0] = 0
    slideImage[1] = 100%
    slideImage[2] = 200%
    */

  slideImage.forEach((img, i) => {
    img.style.left = i * 100 + "%";
  });

  slideImage[0].classList.add("active");
}

init();

// Next Button

nextBtn.addEventListener("click", () => {
  if (currentSlide >= numberOfImages - 1) {
    goToSlide(0);
    return;
  }

  currentSlide++;
  goToSlide(currentSlide);
});

// Previous Button

prevBtn.addEventListener("click", () => {
  if (currentSlide <= 0) {
    goToSlide(numberOfImages - 1);
    return;
  }

  currentSlide--;
  goToSlide(currentSlide);
});

// Go To Slide

function goToSlide(slideNumber) {
  slidesContainer.style.transform =
    "translateX(-" + slideWidth * slideNumber + "px)";

  currentSlide = slideNumber;

  setActiveClass();
}

// Set Active Class

function setActiveClass() {
  // Set active class for Slide Image

  let currentActive = document.querySelector(".slide-image.active");
  currentActive.classList.remove("active");
  slideImage[currentSlide].classList.add("active");
}    
</script>

@endsection