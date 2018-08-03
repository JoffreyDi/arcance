var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
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

$( ".close-panel" ).click(function() {
  $( ".user-panel" ).slideUp( "slow", function() {
    // Animation complete.
  });
});

$( ".myaccount-select" ).click(function() {
  $( ".user-panel" ).slideDown( "slow", function() {
    // Animation complete.
  });
});



function openNav() {
  document.getElementById("aside").classList.add("aside-open");
  document.getElementById("overlay").style.left = "0";
}

function closeNav() {
  document.getElementById("aside").classList.remove("aside-open");
  document.getElementById("overlay").style.left = "-100%";
}

