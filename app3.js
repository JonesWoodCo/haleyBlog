$(document).ready(function(){
         $('.login').hide();
         $('.messageMe').hide();


  $('.loginAppear').click(function() {
    $('.login').toggle();
  });
  $('.messageDrop').click(function() {
    $('.messageMe').toggle();
  });
});