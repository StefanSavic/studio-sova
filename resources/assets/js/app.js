
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

(function(){
	var $imgHeight=$('.img-container img').innerHeight(),
	$imgWrapHeight= $('.img-wrap').css('height', $imgHeight),
	$imgWidth=$('.img-container img').innerWidth(),
	$imgWrapWidth= $('.img-wrap').css('width', $imgWidth),
	$sovaButtonsHero = $('.sova-hero .sova_button');
	$this = $(this);
	
	if($(window).outerHeight() < 870){
		
		$('.container-fluid').css('height','auto');
	}

	$('.caption').css('height',$imgWrapHeight);
	
	$('.img-container img').on('mouseover',function(){
		$this = $(this);
		$this.css('transform','scale(1.2,1.2)').siblings('.caption').delay(300).fadeIn('ease-in-out').addClass('flex-center');
	});

	$('.caption').on('mouseout',function(){
		$this = $(this);
		$this.siblings('.img-container img').css('transform','none');

	});
	$('.img-container img').on('mouseout',function(){
		$this = $(this);
		$this.siblings('.caption').delay(1800).fadeOut('ease-out');
		
	});

// zakazi termin 
var $windowTop = $(window).scrollTop();
$('.zakazi-termin').css('top',$windowTop);

$('.sova-hero button:first-child').on('click',function(){
	$('.zakazi-termin').slideDown(500).addClass('flex-center-1');
	$('body').addClass('overflow-hidden');

});

$('.sova_close').on('click',function(){
	$('.zakazi-termin').fadeOut(500);	

	setTimeout(function(){

		$('.zakazi-termin').removeClass('flex-center-1');
	},500);

	$('body').removeClass('overflow-hidden');

});	



// ULECUCE  animacije 
$sovaButtonsHero.each(function(i){
	setTimeout(function(){
		$sovaButtonsHero.eq(i).addClass('is-showing');
	},500 * (i+1));
});	


$(window).on('scroll',function(){
	$this = $(this);
	wScroll = $this.scrollTop();

	if(wScroll > $('.img-container').offset().top - ($(window).height() / 1.2))	{
		var $imgWrap = $('.img-container .img-wrap'); 
		$imgWrap.each(function(i){
			setTimeout(function(){
				$imgWrap.eq(i).addClass('is-showing');
			},150 * (i+1));	
		})
	}
	if(wScroll > $('.blog-container').offset().top - ($(window).height() / 1.1))	{
		var $blogPost = $('.blog-post')
		$blogPost.each(function(i){
			setTimeout(function(){
				$blogPost.eq(i).addClass('bounce is-showing');
			},500 * (i+1));
		});	
	}

});	


})();

