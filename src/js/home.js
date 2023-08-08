document.addEventListener('DOMContentLoaded', () => {
	const products = new Swiper('.JS__products', {
        spaceBetween: 16,
        slidesPerView: 'auto',
		breakpoints: {
			1280: {
				slidesPerView: 3,
				spaceBetween: 33,
			},
		},
	});

	const news = new Swiper('.JS__news', {
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
