//window.alert('Bonjour Damien !');

$("a[href^='#']").click(function(e) {
	e.preventDefault();

	var position = $($(this).attr("href")).offset().top;

	$("html, body").animate({
		scrollTop: position
	}, 1000 );
});

console.log(top)

//$("html, body").animate({scrollTop : 0}, 1500);


