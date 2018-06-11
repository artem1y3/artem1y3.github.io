$('.slider').slick({
	dots: true,
	arrows: false
});

$('.close-win').click(function(){
	$('.modal-win').css('display','none');
})

$('.open-win').click(function () {
	$('.modal-win').css('display','block');
})