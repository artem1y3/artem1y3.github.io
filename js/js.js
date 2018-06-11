var modal = document.getElementsByClassName('modal-win')[0];

$('.slider').slick({
	dots: true,
	arrows: false
});

$('.close-win').click(function(){
	$('.closes').css('display','none');
	$('.closes1').css('display','none');
})
// $('.modal-win').click(function(){
// 	$('.modal-win').css('display','none');
// })

$('.backss').click(function () {
	$('.closes1').css('display','none');
})

$('.open-win').click(function () {
	$('.closes').css('display','block');
})

window.onclick = function (event) {
	if(event.target == modal){
		modal.style.display = 'none';
	}
}