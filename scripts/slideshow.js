let slideIndex = 1;
  // always start on the first slide
showSlides(slideIndex);
  // run the function

function showSlides(n) {
  let slides = document.getElementsByClassName("slide");
    //find the html elements that I've added the 'slide' class to
    if (n > slides.length) {slideIndex = 1}
      //if I try to go past the length of slides array then head back to the first one
    if (n < 1) {slideIndex = slides.length}
      //if I try to go backwards from the first slide, go to the last slide
  for (i = 0; i < slides.length; i++)
  {
    slides[i].style.display = "none";
  }
    //set all slides to not be displayed
  slides[slideIndex-1].style.display = "block";
    //then set the currently viewed slide to be visible
}

// Next/previous controls
function changeSlides(n) {
  showSlides(slideIndex += n);
  // n is only ever 1 or -1 depending on which arrow is clicked.
}

//learned and modified from https://www.w3schools.com/howto/howto_js_slideshow.asp