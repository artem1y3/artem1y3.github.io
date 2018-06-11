var modal = document.getElementsByClassName('modal-win')[0];

$('.slider').slick({
	dots: true,
	arrows: false
});

$('.close-win').click(function(){
	$('.modal-win').css('display','none');
})
// $('.modal-win').click(function(){
// 	$('.modal-win').css('display','none');
// })

$('.open-win').click(function () {
	$('.modal-win').css('display','block');
})

window.onclick = function (event) {
	if(event.target == modal){
		modal.style.display = 'none';
	}
}