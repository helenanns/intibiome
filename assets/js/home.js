(function (factory) {
	typeof define === 'function' && define.amd ? define('home', factory) :
	factory();
})((function () { 'use strict';

	document.addEventListener('DOMContentLoaded', () => {
		new Swiper('.JS__products', {
	        spaceBetween: 16,
	        slidesPerView: 'auto',
			breakpoints: {
				1280: {
					slidesPerView: 3,
					spaceBetween: 33,
				},
			},
		});

		new Swiper('.JS__news', {
	        spaceBetween: 16,
	        slidesPerView: 'auto',
			breakpoints: {
				1280: {
					slidesPerView: 3,
					spaceBetween: 32,
				},
			},
		});


	});

}));
