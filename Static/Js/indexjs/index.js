$(function(){
    $("img.lazy").lazyload();
    $("img.lazy").lazyload({
    		effect : "fadeIn",
    		threshold : 200
	})

	var mySwiper = new Swiper('.banner .swiper-container', {
	autoplay: 3000,
	loop : true,
	pagination : '.swiper-pagination',
	paginationClickable :true,
	}) 
	var eiffelswiper = new Swiper('.eiffel .swiper-container',{
		// preloadImages:false,
		lazyLoading : true,
		
	})
	var zurichswiper = new Swiper('.zurich .swiper-container',{
		lazyLoading : true,
	})
	var picture = new Swiper('.picture-show .swiper-container',{
		loop : true,
		autoplay: 3000,
		spaceBetween:-130,
        // freeMode: true,
        slidesPerView: 'auto',
        effect: 'coverflow',
        slidesPerView: 2.5,
		centeredSlides: true,
		coverflow: {
            rotate: 90,
            stretch: -300,
            depth: 70,
            modifier: 1,
            slideShadows : true
        }
       
        
    })   	
})


    
    

