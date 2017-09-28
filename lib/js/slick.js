$(document).ready(function(){
  $('.slideshow').slick({
  	slidesToShow:1,
  	slidesToScroll: 1,
  	autoplay: true,
  	autoplaySpeed: 5000,
  	arrows: false
  });
});

$(document).ready(function(){
  $('.featured').slick({
  	slidesToShow:4,
  	slidesToScroll: 2,
  	autoplay: true,
  	autoplaySpeed: 3000,
  	arrows: false
  });
});