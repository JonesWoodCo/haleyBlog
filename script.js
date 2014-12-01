$(document).ready(function() {
   $('.buttonanimator').mouseenter(function() {
       	   $(this).animate({
           marginTop: '+=10px'
       });
   });
   $('.buttonanimator').mouseleave(function() {
       $(this).animate({
           marginTop: '-=10px'
       }); 
   });
   $('.profile-pic').mouseenter(function() {
       	   $(this).animate({
           marginLeft: '+=10px'
       });
   });
   $('.profile-pic').mouseleave(function() {
       $(this).animate({
           marginLeft: '-=10px'
       }); 
   });
	$("#terd").imageLightbox({});
});