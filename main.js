// Navbar
$(document).ready(function() {
    $(window).scroll(function(event) {
        var y = $(this).scrollTop();
        console.log(y);
        if (y >= 770) {
            $('.navigation').addClass('animate-nav');
            $('.navigation__item--1').addClass('animate-nav-color');
            $('.navigation__item--2').removeClass('animate-nav-color');
            $('.navigation__item--3').removeClass('animate-nav-color');
        } 
        if (y >= 1100) {
            $('.navigation__item--2').addClass('animate-nav-color');
            $('.navigation__item--1').removeClass('animate-nav-color');
            $('.navigation__item--3').removeClass('animate-nav-color');
            
        } 
        if (y >= 2200) {
            $('.navigation__item--3').addClass('animate-nav-color');
            $('.navigation__item--2').removeClass('animate-nav-color');
            $('.navigation__item--1').removeClass('animate-nav-color');
        }
        if (y < 770) {
            $('.navigation').removeClass('animate-nav');
        }
    });
});

// Slideshow
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
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

// Modal section
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}