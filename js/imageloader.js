$(function(){
$(document).ready(function(){
 
 $('#hideshow').click(function(){
   $('#message').toggle();
   
   if ($(this).html() == 'Hide'){
    $(this).html('First Semester');
   } else {
    $(this).html('Hide');
   }
   
 });
});
});