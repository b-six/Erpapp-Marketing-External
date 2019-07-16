//dropdown materialize
$(".dropdown-trigger").dropdown();
$(document).ready(function () {
	$('.sidenav').sidenav();
});

//carousel materialize
$(document).ready(function () {
	$('.carousel').carousel();
	autoplay();

	function autoplay() {
		$('.carousel').carousel('next');
		setTimeout(autoplay, 2500);
	}
});

$('.carousel.carousel-slider').carousel({
	indicators: true,
});

//parallax
$(document).ready(function(){
    $('.parallax').parallax();
  });

//select
$(document).ready(function(){
    $('select').formSelect();
  });