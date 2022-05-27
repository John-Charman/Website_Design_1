"use strict";
var slideIndex = 1;
var defaultgallery = '';


function activebtn(){
  var activepage = window.location.pathname.substring(window.location.pathname.lastIndexOf("/") + 1);
  var btns = document.getElementsByClassName("btn");
  for (var i = 0; i< btns.length; i++){
    if (btns[i].getAttribute("href") == activepage){
      btns[i].className += " active";
      return
    }
  }
}
function setupSlideShow(files){
  var myGallery = '<div class="slider"><div class="slides">';
  for (var i = 0; i < files.length; i++){
    myGallery += '<div class = "slide" id = "slide-' + (i+1) + '"><img src="' + files[i] + '"></div>';
    }
  myGallery+='</div></div><div class = "dot-container" style = "position:relative; padding-top:5px; padding-bottom:20px;">'
  for (var i = 0; i< files.length; i++){
    myGallery+= '<a class = "dot" href="#slide-' + (i+1) +   '"></a>';
  }
  myGallery+='</div>';
  document.getElementById("gallery").innerHTML = myGallery;

}
function setupModalGallery(cols,files){
  var myGallery = '<div class = "row">';
  for (var j = 0; j < cols; j++){
    myGallery += '<div class = "column">';
    for (var i = 0; (i*cols + j) < files.length; i++){
      myGallery += '<img src = "' + files[i*cols + j] + '" onclick="openModal();currentSlide(' + (i*cols +j +1) + ')">';
    }
    myGallery += '</div>';
  }
  myGallery += '</div><div style = "padding:10px"></div><div id="myModal" class="modal"><div class="modal-content"> ';
  for (var i = 0; i < files.length; i++){
    myGallery += '<div class="mySlides"><img src="' + files[i] + '"></div>';
    }
  myGallery+= '<div class = "dot-container">'
  for (var i = 0; i< files.length; i++){
    myGallery+= '<a class="dot" onclick="currentSlide(' + (i+1) + ')"></a>';
  }
  myGallery += '</div></div>'
  document.getElementById("gallery").innerHTML = myGallery;
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
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
   for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

function storeDefaultGallery(){
  defaultgallery = document.getElementById("gallery").innerHTML;
}
function restoreDefaultGallery(){
  document.getElementById("gallery").innerHTML = defaultgallery;
}
function setupBookSample(bookname,description,purchaselink){
  storeDefaultGallery();
  setupSlideShow(['assets/BookSamples/'+bookname +'/01.jpg', 'assets/BookSamples/'+bookname+'/02.jpg', 'assets/BookSamples/'+bookname+'/03.jpg']);
  var buttons = '\
    <div class = "booksamplebuttons">'
    if (purchaselink!=null){
      buttons += '<a href = "'+ purchaselink + '">Purchase</a>'
    }
    buttons += '<a style="float:right;" onclick="restoreDefaultGallery()">Return</a></div>'
  document.getElementById("gallery").insertAdjacentHTML("beforeend", description);
  document.getElementById("gallery").insertAdjacentHTML("beforeend", buttons);
}