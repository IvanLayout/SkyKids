$(() => {
	// Моб. меню
	$('body').on('click', '.mob-menu-btn', function(e) {
		e.preventDefault()

		if ( $(this).hasClass('active') ) {
			$('.header').removeClass('show')
			$('.mob-menu-btn').removeClass('active')
			$('body').removeClass('menu-open')
		} else {
			$('.header').addClass('show')
			$('.mob-menu-btn').addClass('active')
			$('body').addClass('menu-open')
		}
	})


	// Ингредиенты
	if ($('.first-section__list').length) {
		new Swiper('.first-section__list', {
			loop: true,
			slidesPerView: 3,
			spaceBetween: 0,
			centeredSlides: true,
			watchSlidesProgress: true,
			watchOverflow: true,
			direction: "vertical",
			allowTouchMove: false,
			speed: 200,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false
			},
		})
	}

	if ($('.dialogue').length) {
		new Swiper('.dialogue', {
			loop: false,
			rewind: true,
			slidesPerView: 2,
			spaceBetween: 6,
			watchSlidesProgress: true,
			watchOverflow: true,
			direction: "vertical",
			allowTouchMove: false,
			speed: 500,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false
			},
			// on: {
			// 	init: swiper => {
			// 		$(swiper.$el).find('.swiper-slide').height('auto')

			// 		setTimeout(function(){
			// 			setHeight( $(swiper.$el).find('.swiper-slide') )
			// 		}, 200)
			// 	},
			// 	resize: swiper => {
			// 		$(swiper.$el).find('.swiper-slide').height('auto')

			// 		setTimeout(function(){
			// 			setHeight( $(swiper.$el).find('.swiper-slide') )
			// 		}, 200)
			// 	}
			// }
		})
	}
})