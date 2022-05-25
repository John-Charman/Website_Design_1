"use strict";
function setup(current,bg) {
  var myHTML = '\
  <div id="nav">\
    <div class="nav-mid">\
        <a id = "books" class = "btn" href="Books.html">Books</a>\
        </div>\
    <div class = "nav-left">\
      <a id = "author" class = "btn" href="Author.html">Author</a>\
      </div>\
    <div class="nav-right">\
      <a id = "illustrator" class = "btn" href="Illustrator.html">Illustrator</a>\
    </div>\
  </div>\
  <div id = "background">'
  + document.body.innerHTML
  + '</div>';
  document.body.innerHTML = myHTML;
  var activebtn = document.getElementById(current);
  activebtn.className += " active";
  var background = document.getElementById("background");
  background.style = "background-image: url(" + bg + ")";
}

function setupGridGallery(cols,files,modal){
  var myGallery = '<div class = "row">';
  for (var j = 0; j < cols; j++){
    myGallery += '<div class = "column">';
    if (modal){
      for (var i = 0; (i*cols + j) < files.length; i++){
        myGallery += '<img src = "' + files[i*cols + j] + '" onclick="openModal();currentSlide(' + (i*cols +j +1) + ')">';
      }
    }
    else{
      for (var i = 0; (i*cols + j) < files.length; i++){
        myGallery += '<img src = "' + files[i*cols + j] + '">';
      }
    }
    myGallery += '</div>';
  }
  myGallery += '</div>';
  if(!modal){
    document.getElementById("gallery").innerHTML = myGallery;
  }
  else{
    setupModalGallery(myGallery,files);
  }
}
function setupModalGallery(myGallery,files){
  myGallery += '<div id="myModal" class="modal"><div class="modal-content">';
  for (var i = 0; i < files.length; i++){
    myGallery += '<div class="mySlides"><img src="' + files[i] + '"></div>';
    }
  myGallery+= '</div><a class="prev" onclick="plusSlides(-1)">&#10094;</a><a class="next" onclick="plusSlides(1)">&#10095;</a></div>'
  document.getElementById("gallery").innerHTML = myGallery;
  console.log(myGallery);
}


// Open the Modal
function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  // Close the Modal
  window.onclick = function(event) {
    if(event.target == document.getElementById("myModal")){
    document.getElementById("myModal").style.display = "none";
    }
  }
  // Next/previous controls
  var slideIndex = 1;
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }