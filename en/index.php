<?php
	// Создание сессии
	session_start();
	if (!isset($_SESSION["lang"])){
		$_SESSION["lang"] = true;

		// Переадресация по языку
		preg_match('/^\w{2}/', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $m);
		
		switch (strtolower($m[0])) {
			case 'ru': header('Location: /index.php'); break;
			default: break;
		}
	}
?>

<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Переключение IE в последнию версию, на случай если в настройках пользователя стоит меньшая -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Адаптирование страницы для мобильных устройств -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Запрет распознования номера телефона -->
		<meta name="format-detection" content="telephone=no">
		<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

		<!-- Заголовок страницы -->
		<title>Голосовой робот-тренажер для детей и подростков SkyKids</title>

		<!-- Данное значение часто используют(использовали) поисковые системы -->
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- Традиционная иконка сайта, размер 16x16, прозрачность поддерживается. Рекомендуемый формат: .ico или .png -->
		<link rel="shortcut icon" href="/images/favicon.png">

		<!-- Подключение шрифта google -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

		<!-- Подключение файлов стилей -->
		<link rel="stylesheet" href="/css/swiper-bundle.min.css">
		<link rel="stylesheet" href="/css/fancybox.css">
		<link rel="stylesheet" href="/css/styles.css">
		<link rel="stylesheet" href="/css/animation.css">

		<link rel="stylesheet" href="/css/response_1199.css" media="(max-width: 1199px)">
		<link rel="stylesheet" href="/css/response_1024.css" media="(max-width: 1024px)">
		<link rel="stylesheet" href="/css/response_767.css" media="(max-width: 767px)">
		<link rel="stylesheet" href="/css/response_479.css" media="(max-width: 479px)">
	</head>
	<body>
		<div class="wrap">
			<div class="main">
				<!-- Шапка -->
				<header class="header">
					<div class="cont _flex">
						<div class="header__logo">
							<img src="/images/logo.svg" alt="">
						</div>

						<div class="header__wrap">
							<div class="header__scroll _flex">
								<nav class="header__menu _flex">
									<div class="header__item">
										<button class="header__link scroll-btn" data-anchor="#anchor1">About the platform</button>
									</div>
									<div class="header__item">
										<button class="header__link scroll-btn" data-anchor="#anchor2">How it works</button>
									</div>
									<div class="header__item">
										<button class="header__link scroll-btn" data-anchor="#anchor3">Demonstration</button>
									</div>
									<div class="header__item">
										<button class="header__link scroll-btn" data-anchor="#anchor4">Advantages</button>
									</div>
									<div class="header__item header__item_marg">
										<a href="/" class="header__link">Rus / Eng</a>
									</div>
								</nav>

								<div class="header__contact _flex">
									<div class="header__phone">
										<a href="tel:+74950884448">+7 (495) 088-44-48</a>
									</div>

									<div class="header__callback">
										<button type="button" data-content="#modal_callback" class="callback-btn modal-btn">
											<span>
												<svg>
													<use xlink:href="#ic_phone"></use>
												</svg>

												Request a call
											</span>
										</button>
									</div>

									<div class="header__login">
										<a href="https://app.skytrainer.pro/" target="_blank" class="login-btn">
											<span>
												<svg>
													<use xlink:href="#ic_user"></use>
												</svg>

												Log in
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="header__phone header__phone_mob">
							<a href="tel:+74950884448">
								<svg>
									<use xlink:href="#ic_phone"></use>
								</svg>
								+7 (495) 088-44-48
							</a>
						</div>

						<button type="button" class="mob-menu-btn">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
				</header>
				<!-- End Шапка -->


				<section class="section-gray section-gray_bot">
					<section class="first-section">
						<img data-src="/images/main_img.png" src="/images/img_plug.png" alt="" class="first-section__img lazyload">

						<div class="cont">
							<div class="first-section__box">
								<h1 class="first-section__title">Голосовой робот-тренажер для детей и подростков SkyKids</h1>

								<div class="first-section__desc">Подготовьте ребенка к сложным <br>жизненным ситуациям</div>

								<div class="first-section__info">SkyKids will teach:</div>

								<div class="first-section__list swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide first-section__li">Get out of conflict situations</div>
										<div class="swiper-slide first-section__li">Deal with abuse</div>
										<div class="swiper-slide first-section__li">Fight back offenders</div>
										<div class="swiper-slide first-section__li">Выстраивать личные границы</div>
										<div class="swiper-slide first-section__li">Отстаивать свою точку зрени</div>
									</div>
								</div>
							</div>

							<div class="dialogue swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>Привет! Я Катя. Мы походу теперь одноклассники. Как тебя зовут?</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Неважно!</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>Хммм… Подскажи, пожалуйста, какой у нас следующий урок? <br>И в какой кабинет нам нужно идти?</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Посмотри в дневнике.</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>Я его дома оставила к сожалению… Подскажи, пожалуйста.</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Спроси у других, а, отстань от меня уже, я не хочу с тобой общаться, прилипала</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>Почему ты так общаешься со мной?? Что не так?</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Да просто не ходи рядом со мной</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>Я тебя напрягаю чем-то?</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Да</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>Чем же?</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Ты задаешь слишком много вопросов, зануда.</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>Мне кажется, человек должен радоваться, когда у него чем-то интересуются. <br>Да и вообще, я же не затрудняю тебя сверхзадачами. Обычные вопросы.</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Ты продолжаешь занудничать.</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>Нет, я продолжаю докапываться до истины</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Мне тебя жаль, ты ненормальная</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>А кто, по-твоему, является нормальным?</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Слушай отстань, мне противно с тобой рядом находиться.</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>Но почему?</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Ты одеваешься ужасно, и на тебе очки, а значит ты ботаничка. <br>Фу. Отстань от меня.</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>Ну одеваюсь я так как мне нравится. <br>А очки я ношу, потому что с детства плохо вижу, мне тоже не удобно их носить, но к счастью, у меня скоро операция на глаза и мне востановит зрение</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Прости, пожалуйста. Я не хотел тебя задеть.. <br>Прости за мои глупые слова. <br>Я Саша. Нам сейчас на третий этаж, там будет математика…	</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__question">
											<span>Пока Саша</span>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dialogue__answer">
											<span>Пока.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>


					<section class="main-form">
						<div class="cont">
							<div class="main-form__flex _flex animate fadeInUp">
								<div class="main-form__coll">
									<div class="main-form__img">
										<img data-src="/images/img1.png" src="/images/img_plug.png" alt="" class="lazyload">
									</div>
								</div>

								<div class="main-form__colr">
									<form action="" class="form ajax_submit">
										<div class="form__title">Get demo access <br>to the simulator bot <span>SkyKids</span></div>

										<div class="form__block">
											<div class="form-flex _flex">
												<div class="form__line">
													<div class="form__field">
														<input type="text" name="name" value="" placeholder="Enter your name" class="form__input name">
													</div>
												</div>

												<div class="form__line">
													<div class="form__field">
														<input type="tel" name="phone" value="" placeholder="Phone number" class="form__input phone">
													</div>
												</div>
											</div>

											<div class="form__bot _flex">
												<div class="form-submit">
													<button type="submit" class="btn-orange big">Get access</button>
												</div>

												<div class="form__agree">By clicking on the button, you consent to the processing of your <button class="modal-btn" data-content="#modal_policy">personal data</button></div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>

					<section class="main-quote _marg">
						<div class="cont">
							<div class="main-quote__flex _flex animate">
								<div class="text-block main-quote__text-block fadeInLeft">
									<h2>We all want our children to be self-confident, <span>achieve their goals</span> and could take care of themselves</h2>

									<p>
										But what to do when the child trusts the gadget more and is poorly socialized? Talk to him in the same language!
									</p>

									<p>
										We have combined technology, research and pedagogy in one product, which solves many problems of socialization
									</p>
								</div>

								<div class="main-quote__colr fadeInRight">
									<div class="main-quote__photo">
										<img data-src="/images/photo.jpg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>

									<div class="main-quote__name">Alexey Balakirev</div>

									<div class="main-quote__position">Platform Founder</div>
								</div>
							</div>
						</div>
					</section>
				</section>


				<section class="main-info _marg">
					<div class="cont">
						<div class="main-info__flex _flex animate">
							<div class="main-quote__coll fadeInLeft">
								<div class="main-quote__img">
									<img data-src="/images/img2.jpg" src="/images/img_plug.png" alt="" class="lazyload">
								</div>
							</div>

							<div class="text-block main-info__text-block fadeInRight">
								<h2>The Path of a Responsible Parent:</h2>

								<ul>
									<li>See the problem</li>
									<li>Talk to a child</li>
									<li>Contact a psychologist</li>
									<li>Spend more time with your child</li>
									<li>Apply socialization tools</li>
								</ul>
							</div>
						</div>
					</div>
				</section>


				<section class="main-about _marg" id="anchor1">
					<div class="cont">
						<div class="main-title main-title_white main-title_left animate fadeInUp">The SkyKids platform will help your child develop communication skills in dozens of different situations</div>

						<div class="main-subtitle main-subtitle_white main-subtitle_left animate fadeInUp">SkyKids imitates possible dialogues with peers, teachers and suggests how to behave in this or that situation and emerge victorious from it</div>

						<div class="main-about__items _flex">
							<div class="main-about__item animate fadeIn">Bullying reflection</div>
							<div class="main-about__item animate fadeIn">How to deal with bullies</div>
							<div class="main-about__item animate fadeIn">Development of emotional intelligence</div>
							<div class="main-about__item animate fadeIn">Debate and argumentation of one's point of view</div>
							<div class="main-about__item animate fadeIn">Reading emotions and empathy</div>
							<div class="main-about__item animate fadeIn">Bullying from seniors</div>
							<div class="main-about__item animate fadeIn">Abuse from teachers</div>
							<div class="main-about__item animate fadeIn">Difficulties of socialization and communication in a team</div>
							<div class="main-about__item animate fadeIn">Building long and friendly relationships</div>
							<div class="main-about__item animate fadeIn">Communication with the opposite sex</div>
							<div class="main-about__item animate fadeIn">Распознавать манипуляции мошенников</div>
							<div class="main-about__item animate fadeIn">Избегать склонение к&#160;употреблению запрещенных веществ</div>
						</div>

						<div class="about-quote _flex animate">
							<div class="about-quote__coll">
								<div class="about-quote__important fadeInUp">When developing the dialogues, more than 300 Russian and foreign social studies were taken into account and thousands of specific cases with which parents and children turned to psychologists were analyzed.</div>

								<div class="about-quote__block fadeInUp" data-delay="3">
									<div class="text-block text-block_white">
										<h4>«Working out stress scenarios is a sure way to develop confidence, willpower and character in a child and help avoid psychological trauma in the future.»</h4>
									</div>
								</div>
							</div>

							<div class="about-quote__colr fadeInRight" data-delay="2">
								<div class="about-quote__photo">
									<img data-src="/images/photo2.jpg" src="/images/img_plug.png" alt="" class="lazyload">
								</div>

								<div class="about-quote__box">
									<div class="about-quote__name">Ivanova Galina</div>

									<div class="about-quote__position">psychologist</div>
								</div>
							</div>
						</div>
					</div>
				</section>


				<section class="how-work _marg" id="anchor2">
					<div class="cont">
						<div class="main-title animate fadeInUp">Как работает робот-тренажер</div>

						<div class="how-work__items">
							<div class="how-work__flex _flex animate">
								<div class="how-work__item fadeIn">
									<div class="how-work__number">
										<img data-src="/images/number1.svg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>

									<div class="how-work__name">Problem selection</div>

									<div class="how-work__desc">You choose a problem close to you</div>
								</div>
								<div class="how-work__item fadeIn" data-delay="3">
									<div class="how-work__number">
										<img data-src="/images/number2.svg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>

									<div class="how-work__name">Script selection</div>

									<div class="how-work__desc">Choose the most convenient script for you</div>
								</div>
								<div class="how-work__item fadeIn" data-delay="5">
									<div class="how-work__number">
										<img data-src="/images/number3.svg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>

									<div class="how-work__name">Dialogue</div>

									<div class="how-work__desc">The child conducts dialogues with the bot</div>
								</div>
								<div class="how-work__item fadeIn" data-delay="7">
									<div class="how-work__number">
										<img data-src="/images/number4.svg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>

									<div class="how-work__name">Report</div>

									<div class="how-work__desc">After passing, you will be sent a report, on the basis of which you can decide whether to extend classes, change the program, or successfully complete the socialization of the child.</div>
								</div>
								<div class="how-work__item fadeIn" data-delay="9">
									<div class="how-work__number">
										<img data-src="/images/number5.svg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>

									<div class="how-work__name">Консультация</div>

									<div class="how-work__desc">При желании проводите онлайн консультацию с психологом для&#160;получения дальнейших рекомендаций</div>
								</div>
							</div>
						</div>
					</div>
				</section>


				<section class="training _marg" id="anchor3">
					<div class="cont">
						<div class="main-title main-title_white animate fadeInUp">See how training usually goes.</div>

						<div class="tabs-container animate fadeInUp">
							<div class="tabs _flex">
								<button class="tabs-button" data-level="level1" data-content="#tab1">
									<span class="tabs-button__icon">
										<svg>
											<use xlink:href="#ic_tab1"></use>
										</svg>
									</span>

									<span class="tabs-button__box">
										<span class="tabs-button__name">Текстовый робот</span>

										<span class="tabs-button__desc">Распознавание мошенничества в переписке</span>
									</span>
								</button>
								<button class="tabs-button active" data-level="level1" data-content="#tab2">
									<span class="tabs-button__icon">
										<svg>
											<use xlink:href="#ic_tab2"></use>
										</svg>
									</span>

									<span class="tabs-button__box">
										<span class="tabs-button__name">Видео робот</span>

										<span class="tabs-button__desc">Склонение к употреблению наркотиков</span>
									</span>
								</button>
								<button class="tabs-button" data-level="level1" data-content="#tab3">
									<span class="tabs-button__icon">
										<svg>
											<use xlink:href="#ic_tab3"></use>
										</svg>
									</span>

									<span class="tabs-button__box">
										<span class="tabs-button__name">Аудио робот</span>

										<span class="tabs-button__desc">Отражение буллинга от одноклассников по телефону</span>
									</span>
								</button>
							</div>

							<div class="tab-content level1" id="tab1">
								<div class="video">
									<img data-src="/images/video1.jpg" src="/images/img_plug.png" alt="" class="video__img1 lazyload">
									<img data-src="/images/video1.jpg" src="/images/img_plug.png" alt="" class="video__img2 lazyload">

									<a href="https://youtu.be/5LMUPj6pp3w" data-fancybox="" class="video__link">
										<img data-src="/images/video1.jpg" src="/images/img_plug.png" alt="" class="lazyload">

										<span class="video__play"></span>
									</a>
								</div>
							</div>

							<div class="tab-content level1 active" id="tab2">
								<div class="video">
									<img data-src="/images/video1.jpg" src="/images/img_plug.png" alt="" class="video__img1 lazyload">
									<img data-src="/images/video1.jpg" src="/images/img_plug.png" alt="" class="video__img2 lazyload">

									<a href="https://youtu.be/-H1FCFgsyYU" data-fancybox="" class="video__link">
										<img data-src="/images/video1.jpg" src="/images/img_plug.png" alt="" class="lazyload">

										<span class="video__play"></span>
									</a>
								</div>
							</div>

							<div class="tab-content level1" id="tab3">
								<div class="video">
									<img data-src="/images/video1.jpg" src="/images/img_plug.png" alt="" class="video__img1 lazyload">
									<img data-src="/images/video1.jpg" src="/images/img_plug.png" alt="" class="video__img2 lazyload">

									<a href="https://youtu.be/K4e2Vru-6LQ" data-fancybox="" class="video__link">
										<img data-src="/images/video1.jpg" src="/images/img_plug.png" alt="" class="lazyload">

										<span class="video__play"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>


				<section class="advantages _marg" id="anchor4">
					<div class="cont">
						<div class="main-title animate fadeInUp">Advantages of the simulator</div>

						<div class="advantages__items">
							<div class="advantages__flex _flex animate">
								<div class="advantages__item fadeInUp">
									<div class="advantages__icon">
										<img data-src="/images/ic_adv1.svg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>

									<div class="advantages__name">The bot cannot be distinguished from a person (emotions, voice, behavior)</div>

									<div class="advantages__desc">Therefore, training does not bother the child</div>
								</div>
								<div class="advantages__item fadeInUp" data-delay="2">
									<div class="advantages__icon">
										<img data-src="/images/ic_adv2.svg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>

									<div class="advantages__name">Easy to use on any device</div>

									<div class="advantages__desc">The platform is available on the web version and mobile applications for IOS and Android</div>
								</div>
								<div class="advantages__item fadeInUp" data-delay="4">
									<div class="advantages__icon">
										<img data-src="/images/ic_adv3.svg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>

									<div class="advantages__name">Conflict situations similar to real ones</div>

									<div class="advantages__desc">Dialogues faced by children are integrated into the simulator</div>
								</div>
								<div class="advantages__item fadeInUp" data-delay="6">
									<div class="advantages__icon">
										<img data-src="/images/ic_adv4.svg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>

									<div class="advantages__name">The platform works like an experienced mentor</div>

									<div class="advantages__desc">Analyzes training sessions and makes recommendations to improve the quality of negotiations</div>
								</div>
								<div class="advantages__item fadeInUp" data-delay="8">
									<div class="advantages__icon">
										<img data-src="/images/ic_adv5.svg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>

									<div class="advantages__name">Catalog of over 200 scripts</div>

									<div class="advantages__desc">You can select scenarios that specifically address your issue.</div>
								</div>
							</div>
						</div>
					</div>
				</section>


				<section class="section-gray section-gray_pad _marg">
					<section class="subscription-options">
						<div class="cont">
							<div class="main-title animate fadeInUp">The Simulator Subscription Options</div>

							<div class="subscription-options__items _flex animate">
								<div class="subscription-options__item fadeInUp">
									<div class="subscription-options__name">Micro</div>

									<div class="subscription-options__desc">Suitable for platform testing</div>

									<div class="subscription-options__price">499 руб.</div>

									<div class="subscription-options__time">Validity:<b>1 Week</b></div>

									<button type="button" data-content="#modal_callback" class="modal-btn subscription-options__btn">Subscribe</button>
								</div>
								<div class="subscription-options__item fadeInUp" data-delay="3">
									<div class="subscription-options__name">Standard</div>

									<div class="subscription-options__desc">To deal with one or more situations</div>

									<div class="subscription-options__price">1599 руб.</div>

									<div class="subscription-options__time">Validity: <b>1 month</b></div>

									<button type="button" data-content="#modal_callback" class="modal-btn subscription-options__btn">Subscribe</button>
								</div>
								<div class="subscription-options__item fadeInUp" data-delay="6">
									<div class="subscription-options__name">Optimal</div>

									<div class="subscription-options__desc">For regular practice and maintenance of skills</div>

									<div class="subscription-options__price">7199 руб.</div>

									<div class="subscription-options__time">Validity: <b>6 months</b></div>

									<button type="button" data-content="#modal_callback" class="modal-btn subscription-options__btn">Subscribe</button>
								</div>
							</div>

							<div class="subscription-demo _flex _marg animate">
								<div class="subscription-demo__box fadeInDown">
									<div class="subscription-demo__title">Get demo access to the «SkyKids» robot simulator</div>

									<div class="subscription-demo__desc">Trial period validity: <b>1 hour</b></div>
								</div>

								<div class="wrap-btn subscription-demo__wrap-btn fadeInDown">
									<button type="button" data-content="#modal_callback" class="modal-btn btn-orange">Get access</button>
								</div>
							</div>
						</div>
					</section>


					<section class="free-consultation _marg" id="anchor5">
						<div class="cont">
							<div class="free-consultation__bg animate _flex">
								<div class="free-consultation__coll fadeInLeft">
									<img data-src="/images/img_platform2.jpg" src="/images/img_plug.png" alt="" class="free-consultation__img2 lazyload">

									<img data-src="/images/img_platform3.jpg" src="/images/img_plug.png" alt="" class="free-consultation__img3 lazyload">

									<div class="free-consultation__img">
										<img data-src="/images/img_platform1.jpg" src="/images/img_plug.png" alt="" class="lazyload">
									</div>
								</div>

								<div class="free-consultation__colr fadeInRight">
									<form action="" class="form ajax_submit">
										<div class="form__title">Sign up for a free demonstration of the <span>«SkyKids»</span> platform</div>

										<ul class="form__list">
											<li>We will show the interface and functionality of the simulator</li>
											<li>Let's demonstrate various scenarios</li>
											<li>We will answer your questions</li>
										</ul>

										<div class="form__block marg">
											<div class="form-flex _flex">
												<div class="form__line">
													<div class="form__field">
														<input type="text" name="name" value="" placeholder="Enter your name" class="form__input name">
													</div>
												</div>

												<div class="form__line">
													<div class="form__field">
														<input type="tel" name="phone" value="" placeholder="Phone number" class="form__input phone">
													</div>
												</div>
											</div>

											<div class="form__bot _flex">
												<div class="form-submit">
													<button type="submit" class="btn-orange big">Get access</button>
												</div>

												<div class="form__agree">By clicking on the button, you consent to the processing of your <button class="modal-btn" data-content="#modal_policy">personal data</button></div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>
				</section>


				<section class="main-partner _marg">
					<div class="cont">
						<div class="main-title animate fadeInUp">Our projects</div>

						<div class="main-partner__items _flex animate fadeInUp">
							<a href="https://skytrainer.pro/" target="_blank" class="main-partner__item">
								<img data-src="/images/ic_project1.svg" src="/images/img_plug.png" alt="" class="lazyload">
							</a>
							<a href="https://skysocial.pro/" target="_blank" class="main-partner__item">
								<img data-src="/images/ic_project2.svg" src="/images/img_plug.png" alt="" class="lazyload">
							</a>
							<a href="https://skykids.pro/" target="_blank" class="main-partner__item">
								<img data-src="/images/ic_project3.svg" src="/images/img_plug.png" alt="" class="lazyload">
							</a>
						</div>

						<div class="main-partner__desc animate fadeInUp">Наши инструменты используют более <span>100 000 человек</span></div>
					</div>
				</section>
			</div>


			<footer class="footer _marg">
				<div class="cont _flex animate">
					<div class="footer__coll fadeIn">
						<div class="footer__logo">
							<img src="/images/logo2.svg" alt="">
						</div>

						<div class="footer__copy">&copy; 2018-2022. OOO ”SKYTRAINER”.</div>

						<div class="footer__text">Голосовой робот-тренажер для детей и подростков SkyKids</div>
					</div>

					<nav class="footer__menu fadeIn">
						<div class="footer__item">
							<button class="footer__link scroll-btn" data-anchor="#anchor1">About the platform</button>
						</div>
						<div class="footer__item">
							<button class="footer__link scroll-btn" data-anchor="#anchor2">How it works</button>
						</div>
						<div class="footer__item">
							<button class="footer__link scroll-btn" data-anchor="#anchor3">Demonstration</button>
						</div>
						<div class="footer__item">
							<button class="footer__link scroll-btn" data-anchor="#anchor4">Advantages</button>
						</div>
						<div class="footer__item">
							<button class="footer__link scroll-btn" data-anchor="#anchor5">Contacts</button>
						</div>
					</nav>

					<div class="footer__contact fadeIn">
						<div class="footer__phone">
							<a href="tel:+74950884448">+7 (495) 088-44-48</a>
						</div>

						<div class="footer__callback">
							<button type="button" data-content="#modal_callback" class="callback-btn modal-btn">
								<span>
									<svg>
										<use xlink:href="#ic_phone"></use>
									</svg>

									Request a call
								</span>
							</button>
						</div>

						<div class="footer__login">
							<a href="https://app.skytrainer.pro/" target="_blank" class="login-btn login-btn__footer">
								<span>
									<svg>
										<use xlink:href="#ic_user"></use>
									</svg>

									Log in
								</span>
							</a>
						</div>
					</div>
				</div>
			</footer>
		</div>


		<div class="supports-error">
			Ваш браузер устарел рекомендуем обновить его до последней версии<br /> или использовать другой более современный.
		</div>


		<div id="svg_icons">
			<svg style="display:none;">
				<symbol id="ic_arrow" viewBox="0 0 19 8">
					<path d="M18.3536 3.64645C18.5488 3.84171 18.5488 4.15829 18.3536 4.35355L15.1716 7.53553C14.9763 7.73079 14.6597 7.73079 14.4645 7.53553C14.2692 7.34027 14.2692 7.02369 14.4645 6.82843L17.2929 4L14.4645 1.17157C14.2692 0.976309 14.2692 0.659727 14.4645 0.464465C14.6597 0.269203 14.9763 0.269203 15.1716 0.464465L18.3536 3.64645ZM-4.37114e-08 3.5L18 3.5L18 4.5L4.37114e-08 4.5L-4.37114e-08 3.5Z"/>
				</symbol>

				<symbol id="ic_phone" viewBox="0 0 21 21">
					<path d="M11.2 9.6249V4.3749H12.95V6.6499L17.325 2.2749L18.55 3.4999L14.175 7.8749H16.45V9.6249H11.2ZM17.4563 18.3749C15.575 18.3749 13.7413 17.9555 11.9551 17.1167C10.1684 16.2784 8.58608 15.1701 7.20825 13.7917C5.82983 12.4138 4.7215 10.8315 3.88325 9.04478C3.04442 7.25861 2.625 5.4249 2.625 3.54365C2.625 3.28115 2.7125 3.0624 2.8875 2.8874C3.0625 2.7124 3.28125 2.6249 3.54375 2.6249H7.0875C7.29167 2.6249 7.47396 2.69053 7.63438 2.82178C7.79479 2.95303 7.88958 3.12074 7.91875 3.3249L8.4875 6.3874C8.51667 6.59157 8.51317 6.77736 8.477 6.94478C8.44025 7.11278 8.35625 7.2624 8.225 7.39365L6.10312 9.5374C6.71562 10.5874 7.48504 11.5718 8.41138 12.4905C9.33712 13.4093 10.3542 14.2041 11.4625 14.8749L13.5188 12.8187C13.65 12.6874 13.8215 12.5888 14.0332 12.5229C14.2444 12.4576 14.4521 12.4395 14.6562 12.4687L17.675 13.0812C17.8792 13.1249 18.0469 13.2232 18.1781 13.376C18.3094 13.5294 18.375 13.7082 18.375 13.9124V17.4562C18.375 17.7187 18.2875 17.9374 18.1125 18.1124C17.9375 18.2874 17.7188 18.3749 17.4563 18.3749ZM5.27188 7.8749L6.71563 6.43115L6.34375 4.3749H4.39688C4.46979 4.97282 4.57187 5.56344 4.70312 6.14678C4.83437 6.73011 5.02396 7.30615 5.27188 7.8749ZM13.1031 15.7062C13.6719 15.9541 14.2517 16.1509 14.8426 16.2968C15.433 16.4426 16.0271 16.5374 16.625 16.5812V14.6562L14.5687 14.2405L13.1031 15.7062Z"/>
				</symbol>

				<symbol id="ic_user" viewBox="0 0 21 21">
					<path d="M14 6.125C14 8.058 12.433 9.625 10.5 9.625C8.567 9.625 7 8.058 7 6.125C7 4.192 8.567 2.625 10.5 2.625C12.433 2.625 14 4.192 14 6.125Z" stroke-width="1.91667" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
					<path d="M10.5 12.25C7.11726 12.25 4.375 14.9923 4.375 18.375H16.625C16.625 14.9923 13.8827 12.25 10.5 12.25Z" stroke-width="1.91667" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
				</symbol>

				<symbol id="ic_tab1" viewBox="0 0 47 56">
					<path d="M46.6638 16.0164L30.9973 0.336512C30.8992 0.226601 30.7782 0.139553 30.6429 0.081501C30.5075 0.0234488 30.3611 -0.00419557 30.214 0.000515142H3.35711C2.46675 0.000515142 1.61285 0.354511 0.983273 0.984627C0.353694 1.61474 0 2.46936 0 3.36048V52.64C0 53.5311 0.353694 54.3858 0.983273 55.0159C1.61285 55.646 2.46675 56 3.35711 56H43.6424C44.5327 56 45.3866 55.646 46.0162 55.0159C46.6458 54.3858 46.9995 53.5311 46.9995 52.64V16.8004C47.0042 16.6531 46.9766 16.5065 46.9186 16.3711C46.8606 16.2356 46.7736 16.1145 46.6638 16.0164ZM31.333 3.83648L43.1668 15.6804H31.333V3.83648ZM43.6424 53.76H3.35711C3.06032 53.76 2.77569 53.642 2.56583 53.432C2.35597 53.2219 2.23807 52.9371 2.23807 52.64V3.36048C2.23807 3.06344 2.35597 2.77857 2.56583 2.56853C2.77569 2.35849 3.06032 2.24049 3.35711 2.24049H29.0949V16.8004C29.0949 17.0974 29.2128 17.3823 29.4227 17.5923C29.6325 17.8024 29.9172 17.9203 30.214 17.9203H44.7614V52.64C44.7614 52.9371 44.6435 53.2219 44.4337 53.432C44.2238 53.642 43.9392 53.76 43.6424 53.76ZM33.5711 30.2402C33.5711 30.5373 33.4532 30.8221 33.2433 31.0322C33.0334 31.2422 32.7488 31.3602 32.452 31.3602H14.5475C14.2507 31.3602 13.966 31.2422 13.7562 31.0322C13.5463 30.8221 13.4284 30.5373 13.4284 30.2402C13.4284 29.9432 13.5463 29.6583 13.7562 29.4483C13.966 29.2382 14.2507 29.1202 14.5475 29.1202H32.452C32.7488 29.1202 33.0334 29.2382 33.2433 29.4483C33.4532 29.6583 33.5711 29.9432 33.5711 30.2402ZM33.5711 39.2002C33.5711 39.4972 33.4532 39.7821 33.2433 39.9921C33.0334 40.2021 32.7488 40.3201 32.452 40.3201H14.5475C14.2507 40.3201 13.966 40.2021 13.7562 39.9921C13.5463 39.7821 13.4284 39.4972 13.4284 39.2002C13.4284 38.9031 13.5463 38.6182 13.7562 38.4082C13.966 38.1982 14.2507 38.0802 14.5475 38.0802H32.452C32.7488 38.0802 33.0334 38.1982 33.2433 38.4082C33.4532 38.6182 33.5711 38.9031 33.5711 39.2002Z"/>
				</symbol>

				<symbol id="ic_tab2" viewBox="0 0 49 56">
					<path d="M49 16.8004C48.9891 16.4981 48.8706 16.2099 48.6659 15.9884L33.075 0.336512C32.9774 0.226601 32.857 0.139553 32.7223 0.081501C32.5876 0.0234488 32.4419 -0.00419557 32.2955 0.000515142H5.56818C4.68212 0.000515142 3.83234 0.354511 3.2058 0.984627C2.57926 1.61474 2.22727 2.46936 2.22727 3.36048V28.0003C2.22727 28.2973 2.3446 28.5822 2.55345 28.7922C2.7623 29.0022 3.04555 29.1202 3.34091 29.1202C3.63626 29.1202 3.91952 29.0022 4.12837 28.7922C4.33722 28.5822 4.45455 28.2973 4.45455 28.0003V3.36048C4.45455 3.06344 4.57188 2.77857 4.78072 2.56853C4.98957 2.35849 5.27283 2.24049 5.56818 2.24049H31.1818V16.8004C31.1818 17.0974 31.2991 17.3823 31.508 17.5923C31.7168 17.8024 32.0001 17.9203 32.2955 17.9203H46.7727V52.64C46.7727 52.9371 46.6554 53.2219 46.4466 53.432C46.2377 53.642 45.9544 53.76 45.6591 53.76H38.9773C38.6819 53.76 38.3987 53.878 38.1898 54.0881C37.981 54.2981 37.8636 54.583 37.8636 54.88C37.8636 55.177 37.981 55.4619 38.1898 55.672C38.3987 55.882 38.6819 56 38.9773 56H45.6591C46.5452 56 47.3949 55.646 48.0215 55.0159C48.648 54.3858 49 53.5311 49 52.64V16.8284V16.8004ZM33.4091 3.83648L45.1858 15.6804H33.4091V3.83648ZM30.6528 37.1282C30.4908 37.0288 30.3066 36.9716 30.117 36.9618C29.9274 36.952 29.7384 36.99 29.567 37.0722L22.2727 40.7401V39.2002C22.2727 38.309 21.9207 37.4544 21.2942 36.8243C20.6677 36.1942 19.8179 35.8402 18.9318 35.8402H3.34091C2.45484 35.8402 1.60507 36.1942 0.978529 36.8243C0.351987 37.4544 0 38.309 0 39.2002V50.4001C0 51.2912 0.351987 52.1458 0.978529 52.7759C1.60507 53.406 2.45484 53.76 3.34091 53.76H18.9318C19.8179 53.76 20.6677 53.406 21.2942 52.7759C21.9207 52.1458 22.2727 51.2912 22.2727 50.4001V48.9161L29.5392 52.836C29.7031 52.9213 29.8838 52.9691 30.0682 52.976C30.2744 52.9729 30.4761 52.9149 30.6528 52.808C30.8162 52.7099 30.9511 52.5703 31.044 52.4032C31.1368 52.2361 31.1843 52.0474 31.1818 51.856V38.0802C31.1843 37.8888 31.1368 37.7001 31.044 37.533C30.9511 37.3659 30.8162 37.2263 30.6528 37.1282ZM20.0455 50.4001C20.0455 50.6971 19.9281 50.982 19.7193 51.192C19.5104 51.402 19.2272 51.52 18.9318 51.52H3.34091C3.04555 51.52 2.7623 51.402 2.55345 51.192C2.3446 50.982 2.22727 50.6971 2.22727 50.4001V39.2002C2.22727 38.9031 2.3446 38.6182 2.55345 38.4082C2.7623 38.1982 3.04555 38.0802 3.34091 38.0802H18.9318C19.2272 38.0802 19.5104 38.1982 19.7193 38.4082C19.9281 38.6182 20.0455 38.9031 20.0455 39.2002V50.4001ZM28.9545 49.9801L22.2727 46.3681V43.2601L28.9545 39.9001V49.9801Z"/>						
				</symbol>

				<symbol id="ic_tab3" viewBox="0 0 48 57">
					<path d="M48 17.1002C47.9889 16.7926 47.8672 16.4992 47.6571 16.2737L31.6571 0.342518C31.557 0.230645 31.4334 0.142044 31.2952 0.0829555C31.157 0.0238673 31.0074 -0.00427044 30.8571 0.000524336H3.42857C2.51926 0.000524336 1.64719 0.360838 1.0042 1.0022C0.361223 1.64356 0 2.51343 0 3.42045V28.4999C0 28.8023 0.120408 29.0922 0.334735 29.306C0.549063 29.5198 0.839753 29.6399 1.14286 29.6399C1.44596 29.6399 1.73665 29.5198 1.95098 29.306C2.16531 29.0922 2.28571 28.8023 2.28571 28.4999V3.42045C2.28571 3.11811 2.40612 2.82816 2.62045 2.61437C2.83478 2.40058 3.12547 2.28048 3.42857 2.28048H29.7143V17.1002C29.7143 17.4025 29.8347 17.6925 30.049 17.9063C30.2633 18.1201 30.554 18.2402 30.8571 18.2402H45.7143V53.5794C45.7143 53.8818 45.5939 54.1717 45.3796 54.3855C45.1652 54.5993 44.8745 54.7194 44.5714 54.7194H35.4286C35.1255 54.7194 34.8348 54.8395 34.6204 55.0533C34.4061 55.2671 34.2857 55.5571 34.2857 55.8594C34.2857 56.1617 34.4061 56.4517 34.6204 56.6655C34.8348 56.8793 35.1255 56.9994 35.4286 56.9994H44.5714C45.4807 56.9994 46.3528 56.6391 46.9958 55.9977C47.6388 55.3563 48 54.4865 48 53.5794V17.1287V17.1002ZM32 3.90495L44.0857 15.9602H32V3.90495ZM15.3429 34.3138C15.146 34.2175 14.9254 34.1797 14.7076 34.205C14.4897 34.2302 14.2838 34.3175 14.1143 34.4563L7.6 39.8997H1.14286C0.839753 39.8997 0.549063 40.0198 0.334735 40.2336C0.120408 40.4474 0 40.7374 0 41.0397V50.1595C0 50.4618 0.120408 50.7518 0.334735 50.9656C0.549063 51.1794 0.839753 51.2995 1.14286 51.2995H7.6L14.1143 56.7429C14.3271 56.9072 14.588 56.9973 14.8571 56.9994C15.0264 57.0056 15.1942 56.9662 15.3429 56.8854C15.5406 56.7967 15.7081 56.6524 15.8248 56.4701C15.9415 56.2879 16.0024 56.0756 16 55.8594V35.3398C16.0024 35.1236 15.9415 34.9113 15.8248 34.7291C15.7081 34.5468 15.5406 34.4025 15.3429 34.3138ZM13.7143 53.4369L8.74286 49.276C8.53008 49.1117 8.2691 49.0216 8 49.0195H2.28571V42.1797H8C8.2691 42.1776 8.53008 42.0875 8.74286 41.9232L13.7143 37.7623V53.4369ZM28.5714 45.5996C28.5755 47.1382 28.2306 48.6577 27.5626 50.0445C26.8947 51.4314 25.921 52.6496 24.7143 53.6079C24.5149 53.7764 24.2613 53.8675 24 53.8644C23.8294 53.8656 23.6608 53.8276 23.5073 53.7535C23.3537 53.6794 23.2193 53.5711 23.1143 53.4369C22.9261 53.2021 22.8386 52.9027 22.8707 52.6038C22.9028 52.3049 23.052 52.0307 23.2857 51.841C24.2216 51.0905 24.9767 50.1402 25.4956 49.06C26.0144 47.9799 26.2838 46.7974 26.2838 45.5996C26.2838 44.4018 26.0144 43.2193 25.4956 42.1392C24.9767 41.059 24.2216 40.1087 23.2857 39.3582C23.1531 39.2706 23.0402 39.1563 22.9544 39.0227C22.8686 38.889 22.8117 38.739 22.7874 38.5822C22.763 38.4254 22.7718 38.2652 22.8131 38.1119C22.8544 37.9587 22.9273 37.8157 23.0272 37.6922C23.127 37.5686 23.2517 37.4673 23.3931 37.3946C23.5345 37.3218 23.6896 37.2794 23.8484 37.2699C24.0072 37.2604 24.1662 37.2841 24.3153 37.3394C24.4644 37.3947 24.6003 37.4805 24.7143 37.5913C25.921 38.5496 26.8947 39.7678 27.5626 41.1547C28.2306 42.5415 28.5755 44.061 28.5714 45.5996Z"/>
				</symbol>
			</svg>
		</div>



		<section class="modal" id="modal_success">
			<div class="modal__title"><b>Спасибо за заявку!</b> <br>Наш менеджер свяжется с Вами <br>в ближайшее время.</div>

			<div class="wrap-btn">
				<button type="button" class="btn-orange" data-modal-close>Вернуться на&nbsp;сайт</button>
			</div>
		</section>

		<section class="modal" id="modal_callback">
			<div class="modal__title"><b>Заполните поля</b> <br>и мы свяжемся с Вами!</div>

			<div class="modal__data">
				<form action="" class="form ajax_submit">
					<div class="form__line">
						<div class="form__field">
							<input type="text" name="name" value="" placeholder="Enter your name" class="form__input name">
						</div>
					</div>

					<div class="form__line">
						<div class="form__field">
							<input type="tel" name="phone" value="" placeholder="Phone number" class="form__input phone">
						</div>
					</div>

					<div class="form-submit">
						<button type="submit" class="btn-orange big">Send</button>
					</div>

					<div class="form__agree">By clicking on the button, you consent to the processing of your <button class="modal-btn" data-content="#modal_policy">personal data</button></div>
				</form>
			</div>
		</section>


		<section class="modal modal_policy" id="modal_policy">
			<div class="modal__title">
				<b>Пользовательское соглашение</b>
			</div>

			<div class="text-block">
				<h4>1. Общие условия</h4>

				<ul>
					<li>
						1.1. Настоящая Политика определяет порядок обработки и защиты информации о физических лицах (далее – Пользователь), которая может быть получена нашей компанией при использовании Пользователем данного сайта.
					</li>

					<li>
						1.2. Целью настоящей Политики является обеспечение надлежащей защиты персональной информации, которую Пользователь предоставляет о себе самостоятельно при использовании данного Сайта для приобретения товаров/услуг, от несанкционированного доступа и разглашения.
					</li>

					<li>
						1.3. Отношения, связанные со сбором, хранением, распространением и защитой информации предоставляемой Пользователем, регулируются настоящей Политикой и действующим законодательством Российской Федерации.
					</li>

					<li>
						1.4. Оставляя свои данные на Сайте и используя данный Сайт, Пользователь выражает свое полное согласие с условиями настоящей Политики.
					</li>

					<li>
						1.5. В случае несогласия Пользователя с условиями настоящей Политики использование данного Сайта должно быть немедленно прекращено.
					</li>
				</ul>

				<h4>2. Цели сбора, обработки и хранения информации предоставляемой пользователями Сайта</h4>

				<ul>
					<li>
						2.1. Обработка персональных данных Пользователя осуществляется в соответствии с законодательством Российской Федерации. Наша компания обрабатывает персональные данные Пользователя в целях:
					</li>

					<li>
						- связи с Пользователем, направлении Пользователю транзакционных писем в момент получения заявки с формы на Сайте, направлении Пользователю уведомлений, запросов.
					</li>
				</ul>

				<h4>3. Условия обработки персональной информации предоставленной Пользователем и ее передачи третьим лицам</h4>

				<ul>
					<li>
						3.1. Наша компания принимает все необходимые меры для защиты персональных данных Пользователя от неправомерного доступа, изменения, раскрытия или уничтожения.
					</li>

					<li>
						3.2. Наша компания предоставляет доступ к персональным данным Пользователя только тем работникам, которым эта информация необходима для обеспечения функционирования Сайта и оказания Услуг/продажи товаров Пользователю
					</li>

					<li>
						3.3. Наша компания вправе использовать предоставленную Пользователем информацию, в том числе персональные данные, в целях обеспечения соблюдения требований действующего законодательства Российской Федерации. Раскрытие предоставленной Пользователем информации может быть произведено лишь в соответствии с действующим законодательством Российской Федерации.
					</li>
				</ul>

				<h4>4. Условия пользования данным Сайтом</h4>

				<ul>
					<li>
						4.1. Пользователь при пользовании Сайтом, подтверждает, что: <br>- ознакомлен с настоящей Политикой, выражает свое согласие с ней и принимает на себя указанные в ней права и обязанности. Ознакомление с условиями настоящей Политики и проставление галочки под формой со ссылкой на данную Политику является письменным согласием Пользователя на сбор, хранение, обработку и передачу третьим лицам персональных данных предоставляемых Пользователем.
					</li>

					<li>
						4.2. Наша компания не проверяет достоверность получаемой (собираемой) информации о Пользователях
					</li>
				</ul>

				<h4>5. В рамках настоящей Политики под «персональной информацией Пользователя» понимаются:</h4>

				<ul>
					<li>
						5.1. Данные предоставленные Пользователем самостоятельно при пользовании данным Сайтом, включая но, не ограничиваясь: имя, фамилия, пол, номер мобильного телефона и/или адрес электронной почты, город проживания, домашний адрес.
					</li>
				</ul>
			</div>
		</section>


		<!-- Подключение javascript файлов -->
		<script src="/js/jquery-3.5.0.min.js"></script>
		<script src="/js/swiper-bundle.min.js"></script>
		<script src="/js/fancybox.js"></script>

		<script src="/js/inputmask.min.js"></script>

		<script src="/js/functions.js"></script>
		<script src="/js/scripts.js"></script>

		<script src="/js/ajax.js"></script>
	</body>
</html>
