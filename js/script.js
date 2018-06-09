$(document).ready(function(){
  

  $(".slider").owlCarousel({
  		items: 1,
  		loop:true,
  		autoplay:true,
  		autoplayTimeout:3000
  	});
	

  $(".btn-nav").on("click",function() {
		var target = $(this).data("target");
		$(target).toggleClass("nav__list--open");
	});

  $("a.masters__yk").click(function () {
var elementClick = $(this).attr("href")
var destination = $(elementClick).offset().top;
jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);
return false;
});
});



$(function() {
 
$(window).scroll(function() {
 
if($(this).scrollTop() != 0) {
$("#up").css('visibility', 'visible'); 
$('#up').fadeIn();
 
} else {
 
$('#up').fadeOut();

 
}
 
});
 
$('#up').click(function() {
 
$('body,html').animate({scrollTop:0},800);

 
});
 
});


 
var canvas = document.getElementById('c3');
var ctx = canvas.getContext('2d');

    ctx.beginPath();
    ctx.moveTo(20,50);
    ctx.lineTo(40,50);
    ctx.lineTo(40,30);
    ctx.lineTo(40,30);
    ctx.lineTo(50,30);
    ctx.lineTo(30,10);
    ctx.lineTo(10,30);
    ctx.lineTo(20,30);    
    ctx.lineTo(20,50);
    ctx.fillStyle="#fff";
    ctx.fill();



var elements = document.querySelectorAll('input');

function checkValidity() {};

for (i=0; i<elements.length; i++) {
 (function(element) {
   var id = element.getAttribute('id');
   element.value = sessionStorage.getItem(id); // обязательно наличие у элементов id
   element.oninput = function() {
     sessionStorage.setItem(id, element.value);
     checkValidity();
   };
 })(elements[i]);
}