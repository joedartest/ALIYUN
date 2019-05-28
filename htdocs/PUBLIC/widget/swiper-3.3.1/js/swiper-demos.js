$(function(){
	//Main Swiper
	var swiper = new Swiper('.swiper-container', {
		loop : true,
		pagination: '.pagination1',
        nextButton: '.arrow.right',
        prevButton: '.arrow.left',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 5000,
        autoplayDisableOnInteraction: false
	});
})

