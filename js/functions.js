$(() => {
	// Есть ли поддержка тач событий или это apple устройство
	if (!is_touch_device() || !/(Mac|iPhone|iPod|iPad)/i.test(navigator.platform)) $('html').addClass('custom_scroll')


	// Observer API
	const boxes = document.querySelectorAll('.lazyload, .animate')

	$timerAnim = 0

	function scrollTracking(entries) {
		for (const entry of entries) {
			if (entry.intersectionRatio >= 0.1 && entry.target.getAttribute('data-src') && !entry.target.classList.contains('loaded')) {
				entry.target.src = entry.target.getAttribute('data-src')

				if ( entry.target.getAttribute('data-poster') ) {
					entry.target.poster = entry.target.getAttribute('data-poster')
				}

				entry.target.classList.add('loaded')
			}

			if (entry.intersectionRatio >= 0.2 && entry.target.localName === 'picture' && !entry.target.classList.contains('loaded')) {
				let sources = entry.target.querySelectorAll('source'),
				img = entry.target.querySelector('img')

				sources.forEach(source => source.srcset = source.getAttribute('data-srcset'))
				img.src = img.getAttribute('data-src')

				entry.target.classList.add('loaded')
			}

			if (entry.intersectionRatio >= 0.3 && entry.target.classList.contains('animate')) {
				entry.target.classList.add('animated')
			}
		}
	}

	const observer = new IntersectionObserver(scrollTracking, {
		threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1.0]
	})

	boxes.forEach(element => observer.observe(element))


	// Установка ширины стандартного скроллбара
	$(':root').css('--scroll_width', widthScroll() + 'px')


	// Плавная прокрутка к якорю
	$('.scroll-btn').click(function(e) {
		e.preventDefault()

		let href = $(this).data('anchor')

		let addOffset = 0

		if ( $(window).width() < 1025 ) {
			addOffset = 63
		} else {
			addOffset = 72
		}

		$('.header.show').removeClass('show')
		$('.mob-menu-btn').removeClass('active')
		$('body').removeClass('menu-open')

		$('html, body').stop().animate({ scrollTop: $(href).offset().top - addOffset }, 1000)
	})


	// Маска ввода
	$('input[type=tel]').inputmask('+7 (999) 999-99-99', {
		showMaskOnHover: false
	})


	// Табы
	var locationHash = window.location.hash

	$('body').on('click', '.tabs button', function(e) {
		e.preventDefault()

		if( !$(this).hasClass('active') ) {
			let parent = $(this).closest('.tabs-container')
			let activeTab = $(this).data('content')
			let level = $(this).data('level')

			parent.find('.tabs:first').find('button').removeClass('active')
			parent.find('.tab-content.' + level).removeClass('active animated')

			$(this).addClass('active')
			$(activeTab).addClass('active')
		}
	})

	if( locationHash && $('.tabs-container').length ) {
		let activeTab = $('.tabs button[data-content="'+ locationHash +'"]')
		let parent = activeTab.closest('.tabs-container')
		let level = activeTab.data('level')

		parent.find('.tabs:first').find('button').removeClass('active')
		parent.find('.tab-content.' + level).removeClass('active')

		activeTab.addClass('active')
		$(locationHash).addClass('active')

		let text = activeTab.text()

		activeTab.closest('.tabs-container').find('.open-tabs').text(text)

		$('html, body').stop().animate({
			scrollTop: $(locationHash).offset().top - 430
		}, 1000)
	}


	// Fancybox
	Fancybox.defaults.autoFocus = false
	Fancybox.defaults.dragToClose = false
	Fancybox.defaults.placeFocusBack = false
	Fancybox.defaults.l10n = {
		CLOSE: "Закрыть",
		NEXT: "Следующий",
		PREV: "Предыдущий",
		MODAL: "Вы можете закрыть это модальное окно нажав клавишу ESC"
	}

	Fancybox.defaults.template = {
		closeButton: '<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 19L18.9999 1.00011" fill="none" stroke-width="2" stroke-linecap="round"/><path d="M1 1L18.9999 18.9999" fill="none" stroke-width="2" stroke-linecap="round"/></svg>',
	}

	// Всплывающие окна
	$('body').on('click', '.modal-btn', function (e) {
		e.preventDefault()

		Fancybox.close()

		Fancybox.show([{
			src: $(this).data('content'),
			type: 'inline'
		}])
	})

	$('body').on('click', '[data-modal-close]', function (e) {
		e.preventDefault()

		Fancybox.close()
	})
	

	// Увеличение картинки
	Fancybox.bind('.fancy-img', {
		Image: {
			zoom: false,
		},
		Thumbs: {
			autoStart: false,
		}
	})
})


$(window).on('load', () => {
	// Шапка
	if( $(window).scrollTop() > $(window).height() ) {
		$('header').addClass('fixed')
	} else{
		$('header').removeClass('fixed')
	}

	if( $(window).scrollTop() > 0 && $(window).width() < 1025 ) {
		$('header').addClass('fixed')
	} else if( $(window).width() < 1025 ) {
		$('header').removeClass('fixed')
	}

	$(window).scroll(function(){
		if( $(window).scrollTop() > $(window).height() ) {
			$('header').addClass('fixed')
		} else{
			$('header').removeClass('fixed')
		}

		if( $(window).scrollTop() > 0 && $(window).width() < 1025 ) {
			$('header').addClass('fixed')
		} else if( $(window).width() < 1025 ) {
			$('header').removeClass('fixed')
		}
	})
})


// Вспомогательные функции
const widthScroll = () => {
	let div = document.createElement('div')

	div.style.overflowY = 'scroll'
	div.style.width = '50px'
	div.style.height = '50px'
	div.style.visibility = 'hidden'

	document.body.appendChild(div)

	let scrollWidth = div.offsetWidth - div.clientWidth
	document.body.removeChild(div)

	return scrollWidth
}


function setHeight(className){
    let maxheight = 0

    className.each(function() {
		let elHeight = $(this).outerHeight()

        if( elHeight > maxheight ) {
			maxheight = elHeight
        }
    })

    className.outerHeight( maxheight )
}


const is_touch_device = () => !!('ontouchstart' in window)