$(document).ready(function(){
         $('.login').hide();
         $('.messageMe').hide();


  $('.loginAppear').click(function() {
    $('.login').toggle();
  });
  $('.messageDrop').click(function() {
    $('.messageMe').slideDown( "slow", function() {
    // Animation complete.
  });
  //$('.messageMe').toggle();
  });
});