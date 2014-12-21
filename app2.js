$(document).ready(function(){
         $('.hideMe1').fadeTo('slow', 1.0);
         $('.hideMe2').fadeTo('slow', 1.0);
         $('.hideMe3').fadeTo('slow', 1.0);



  $('.hideMe1').mouseenter(function() {
    $(this).fadeTo('fast', 0.45);
  });
  $('.hideMe1').mouseleave(function() {
    $(this).fadeTo('slow', 1.0);
  });
  
  
  
  
  $('.hideMe2').mouseenter(function() {
    $(this).fadeTo('fast', 0.45);
  });
  $('.hideMe2').mouseleave(function() {
    $(this).fadeTo('slow', 1.0);
  });
  
  
  
  
  $('.hideMe3').mouseenter(function() {
    $(this).fadeTo('fast', 0.45);
  });
  $('.hideMe3').mouseleave(function() {
    $(this).fadeTo('slow', 1.0);
  });
  
  
  
});