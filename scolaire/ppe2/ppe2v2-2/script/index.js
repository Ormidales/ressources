// Slider Js First Start Here
//image with in pixels
var imageWidth = 1024;
// Slider content loaded
$(window).ready(function() {
  var currentImage = 0;
  //Image count
  var allImages = $('#slider li img').length;
  //setup slideshow frame width
  $('#slider ul').width(allImages * imageWidth);
  //attach click event to slideshow buttons
  $('.nextarrow').click(function() {
    //increase image count
    currentImage++;
    // if we are at end let set it to 0
    if (currentImage >= allImages) currentImage = 0;
    // calculate  and set position
    setFramePosition(currentImage);
  });
  //attach click event to slideshow buttons
  $('.prevarrow').click(function() {
    //increase image count
    currentImage--;
    // if we are at end let set it to 0
    if (currentImage < 0) currentImage = allImages - 1;
    // calculate  and set position
    setFramePosition(currentImage);
  });
});

//Frame Position
function setFramePosition(pos) {
  //calculate position  
  var px = imageWidth * pos * -1;
  //set left position
  $('#slider ul').animate({
    left: px
  }, 300);
};
// Slider Js First End Here 

// Slider 2 Js Start Here (Auto play) 
jQuery(document).ready(function($) {
  var slideCount = $('#slider2 ul li').length;
  var slideWidth = $('#slider2 ul li').width();
  var slideHeight = $('#slider2 ul li').height();
  var sliderUlWidth = slideCount * slideWidth;

  $('#slider2').css({
    width: slideWidth,
    height: slideHeight
  });
  $('#slider2 ul').css({
    width: sliderUlWidth,
    marginLeft: -slideWidth
  });
  $('#slider2 ul li:last-child').prependTo('#slider2 ul');

  function moveLeft() {
    $('#slider2 ul').animate({
      left: +slideWidth
    }, 200, function() {
      $('#slider2 ul li:last-child').prependTo('#slider2 ul');
      $('#slider2 ul').css('left', '');
    });
  };

  function moveRight() {
    $('#slider2 ul').animate({
      left: -slideWidth
    }, 200, function() {
      $('#slider2 ul li:first-child').appendTo('#slider2 ul');
      $('#slider2 ul').css('left', '');
    });
  };

  // Slider Arrows
  $('#slider2 .prevarrow2').click(function() {
    moveLeft();
  });
  $('#slider2 .nextarrow2').click(function() {
    moveRight();
  });

  // auto play function
  setInterval(function() {
    moveRight();
  }, 3000);
});
// Slider 2 Js End Here