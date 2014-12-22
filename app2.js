$(document).ready(function(){
         // this is to start the blog buttons off as full opacity
         $('.hideMe1').fadeTo('slow', 1.0);
         $('.hideMe2').fadeTo('slow', 1.0);
         $('.hideMe3').fadeTo('slow', 1.0);
         $('.lIHomeImg').fadeTo('slow', 0.0);
         $('.twitterHomeImg').fadeTo('slow', 0.0);


// this fades the blog buttons with mouse overs and returns them to full opacity when mouse exits
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
  
  $('.lIHomeImg').mouseenter(function() {
    $(this).fadeTo('fast', 1.0);
  });
  $('.lIHomeImg').mouseleave(function() {
    $(this).fadeTo('slow', 0.0);
  });
  
  $('.twitterHomeImg').mouseenter(function() {
    $(this).fadeTo('fast', 1.0);
  });
  $('.twitterHomeImg').mouseleave(function() {
    $(this).fadeTo('slow', 0.0);
  });
  
  //utilizing the .scrollto function to move to parts of the page when clicking topNav links
  $('.contactLink').click(function(){
  $('haleyContactHome').scrollTo();
});
  
  
});