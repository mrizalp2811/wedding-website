<?php
	include "config.php"
?>

<!DOCTYPE html>
<html lang="">
<head>
		<title>Cynthia & Rizal - <?php echo $lang['title_home'] ?> </title>
		<meta name="robots" content="noindex">
		<meta charset=utf-8>
		<meta name=description content="Selamat datang di website pernikahan Cynthia dan Rizal. Kami berharap anda dapat bergabung dengan kami di hari spesial kami.">
		<meta property="og:title" content="Cynthia & Rizal | #bahagiabersama" />
		<meta property="og:description" content="Selamat datang di website pernikahan Cynthia dan Rizal. Kami berharap anda dapat bergabung dengan kami di hari spesial kami.">
		<meta property="og:image" itemprop="image" content="assets/img/ogimage-cynthiarizal.png"/>
		<meta property="og:image:width" content="300" />
		<meta property="og:image:height" content="200" />
		<meta property="og:url" content="https://cynthia-rizal.com/main" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="assets/css/vendor/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/vendor/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/css/vendor/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="assets/css/vendor/lightbox.min.css">
		<!-- Main style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
		<!-- Fonts -->
		<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico"/>
	</head>
<body data-spy="scroll" data-target="#navbarSupportedContent" data-offset="100">
	<nav id="navbar" class="navbar navbar-expand-lg fixed-top p-0 text-white onscroll">
		<div class="d-lg-flex w-100 align-items-start">
			<a class="navbar-brand text-primary page-scroll" href="#top">
				<img class="d-none d-lg-block navbar-brand__img" src="assets/img/logo-type-3-05.png" alt="logo">
				<img class="d-lg-none navbar-brand__img" src="assets/img/logotype-03-05-05.png" alt="logo">
			</a>
			<button type="button" class="d-lg-none navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active page-scroll" href="#top"><?php echo $lang['home'] ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link page-scroll" href="#events"><?php echo $lang['events'] ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link page-scroll" href="#gallery"><?php echo $lang['gallery'] ?></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo $lang['RSVP'] ?>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						  <a class="dropdown-item" href="/rsvp-rose">Rose</a>
						  <a class="dropdown-item" href="/rsvp-jasmine">Jasmine</a>
						  <a class="dropdown-item" href="/rsvp-pengajian">Pengajian</a>
						</div>
					</li>
					<li class="nav-item d-flex">
						<div style="padding-right: 5px;" >
						<a href="/main?lang=id" class="flag flag-icon flag-icon-id"></a>
						</div>
						<div style="padding-left: 5px; border-left: 1px solid white;">
						<a href="/main?lang=en" class="flag flag-icon flag-icon-gb"></a>
						</div>
					</li>
					<li class="nav-item ml-lg-4 d-lg-none">
						<span class="nav-link">&copy; Cynthia and Rizal 2021.</span>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="loader" class="loader">
		<div id="my-svg">
		</div>
		<div class="loader-img text-center">
			<img src="assets/img/story-flowers-4-04-04.png" alt="flowers">
		</div>
	</div>
	<div id="top" class="main-hero">
		<div class="c-hero-banner c-hero-banner--main">
			<div class="cover"></div>
			<div class="c-hero-banner__section c-hero-banner__image">
				<img class="lazyload" src="assets/img/banner-header.jpg" alt="image">
			</div>
			<div class="mask">
				<img src="assets/img/mask.png" alt="" style="object-fit: cover; height: 100%;">
			</div>
		</div>
	</div>
	<!-- Section Love story -->
	<section class="love-story section position-relative text-center">
		<div class="d-none d-sm-block love-story__flower-parallax position-absolute parallax">
			<img src="assets/img/ls-flower-prlx.png" alt="flower">
		</div>
		<div class="container">
			<div class="love-story__flowers m-auto">
				<img src="assets/img/story-flowers-4-04-04.png" alt="flowers">
			</div>
			<h1 class="title"><?php echo $lang['love'] ?></h1>
			<p class="m-auto"><?php echo $lang['story'] ?></p>
		</div>
	</section>
	<!-- Section Date -->
	<section class="date-section section section--blue countdown text-center">
		<div class="container">
			<div class="date-section__flowers m-auto">
				<img src="assets/img/date-flowers.png" alt="flowers">
			</div>
			<div class="date-section__block">
				<div class="d-inline-block">
					<h2 class="title--special">Feb 28th, 2021</h2>
					<h3 class="date-section__place">
						Harris Hotel & Convention Ciumbuleuit<br>
						Bandung, Jawa Barat
					</h3>
				</div>
			</div>
			<div id="timer" class="timer d-flex justify-content-center">
				<div class="timer-item">
					<span class="days timer__digit"></span>
					<div class="timer__text"><?php echo $lang['days']?></div>
				</div>
				<div class="timer-item">
					<span class="hours timer__digit"></span>
					<div class="timer__text"><?php echo $lang['hours']?></div>
				</div>
				<div class="timer-item">
					<span class="minutes timer__digit"></span>
					<div class="timer__text"><?php echo $lang['minutes']?></div>
				</div>
				<div class="timer-item">
					<span class="seconds timer__digit"></span>
					<div class="timer__text"><?php echo $lang['seconds']?></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section Events -->
	<section id="events" class="events section text-center">
		<div class="container">
			<h1 class="title"><?php echo $lang['title_events']?></h1>
			<p class="subtitle mx-auto"><?php echo $lang['title_subevents']?></p>
			<div id="accordion">
				<div class="accordion__header d-flex justify-content-center">
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<?php echo $lang['navbar_akad']?>
					</button>
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<?php echo $lang['navbar_ceremony']?>
					</button>
				</div>
				<div class="accordion__body">
					<div id="collapseOne" class="collapse show" data-parent="#accordion">
						<div class="row">
							<h2 class="accordion__item-heading"><?php echo $lang['navbar_akad']?></h2>
							<div class="col-md-6">
								<img class="accordion__item-img" src="assets/img/wedding-03.jpg" alt="ceremony">
							</div>
							<div class="col-md-6 text-left">
								<h3 class="accordion__item-subheading"><?php echo $lang['accordion_subheading']?></h3>
								<p class="d-flex align-items-center"><i class="fa fa-2x fa-map-marker align-middle pr-1"></i>Harris Hotel & Convention Ciumbuleuit Bandung</p>
								<p class="d-flex align-items-center"><i class="fa fa-2x fa-clock-o align-middle pr-1"></i>08:00 - 09:00 WIB, Feb 28, 2021 </p>
								<a style="display: block;" href="https://g.page/HARRISCiumbuleuit?share">
									<div class="btn btn-outline-dark rounded-0 px-2 py-1"><?php echo $lang['view_map']?></div>
								</a>
							</div>
						</div>
					</div>
					<div id="collapseTwo" class="collapse" data-parent="#accordion">
						<div class="row">
							<h2 class="accordion__item-heading"><?php echo $lang['navbar_ceremony']?></h2>
							<div class="col-md-6">
								<img class="accordion__item-img" src="assets/img/Convention-3.jpg" alt="ceremony">
							</div>
							<div class="col-md-6 text-left">
								<h3 class="accordion__item-subheading"><?php echo $lang['accordion_subheading']?></h3>
								<p class="d-flex align-items-center"><i class="fa fa-2x fa-map-marker align-middle pr-1"></i>Harris Hotel & Convention Ciumbuleuit Bandung</p>
								<p class="d-flex align-items-center"><i class="fa fa-2x fa-clock-o align-middle pr-1"></i>10:00 - 12:00 WIB & 16:30 - 18:30 WIB, Feb 28, 2021 </p>
								<a style="display: block;" href="https://g.page/HARRISCiumbuleuit?share">
									<div class="btn btn-outline-dark rounded-0 px-2 py-1"><?php echo $lang['view_map']?></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="events__info">
				<div class="row text-left">
					<div class="col-md-6 event__info-item">
						<h6 class="event__info-header font-weight-bold"><?php echo $lang['getting-there-header']?></h6>
						<p><?php echo $lang['getting-there-body']?></p>
					</div>
					<div class="col-md-6 event__info-item">
						<h6 class="event__info-header font-weight-bold"><?php echo $lang['where-stay-header']?></h6>
						<p>Hotel, Villa</p>
						<p><?php echo $lang['where-stay-body']?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section Gallery -->
	<section id="gallery" class="gallery section text-center">
		<div class="d-none d-lg-block gallery__flower-prlx-l position-absolute parallax">
			<img src="assets/img/gallery-prlx-l.png" alt="flower">
		</div>
		<div class="d-none d-lg-block gallery__flower-prlx-r position-absolute parallax">
			<img src="assets/img/gallery-prlx-r.png" alt="flower">
		</div>
		<div class="container position-relative">
			<h1 class="title"><?php echo $lang['gallery-header']?></h1>
			<p class="subtitle mx-auto"><?php echo $lang['gallery-body']?></p>
			<div class="gallery__slider">
				<div class="slick-gallery slick mb-0">
					<div class="slider__item">
						<img src="assets/img/slider/Galeri2.jpg" alt="slider">
					</div>
					<div class="slider__item">
						<img src="assets/img/slider/Galeri1.jpg" alt="slider">
					</div>
					<div class="slider__item">
						<img src="assets/img/slider/Galeri3.jpg" alt="slider">
					</div>
					<div class="slider__item">
						<img src="assets/img/slider/Galeri5.jpg" alt="slider">
					</div>
					<div class="slider__item">
						<img src="assets/img/slider/Galeri4.jpg" alt="slider">
					</div>
				</div>
				<div class="gallery__slider-num d-none d-lg-flex">
					<div class="gallery__slider-current pr-1"></div>
					<div class="pr-1">from</div>
					<div class="gallery__slider-all"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section Wishes -->
	<section id="wishes" class="wishes section section--blue text-center">
		<div class="container">
			<h1 class="title"><?php echo $lang['wishes-header']?></h1>
			<p class="subtitle m-auto"><?php echo $lang['wishes-body']?></p>
			<div class="wishes__slider">
				<div class="slick slick-wishes mb-0">
					<div class="slider__item">
						<div class="wishes__person">
							<img class="rounded-circle m-auto" src="assets/img/putri.jpg" alt="slider">
						</div>
						<h4 class="wishes__title font-weight-bold">Marita Putri Nirbaya</h4>
						<p class="mx-auto">"<?php echo $lang['putri-wishes']?>"</p>
					</div>
					<div class="slider__item">
						<div class="wishes__person">
							<img class="rounded-circle m-auto" src="assets/img/ipir-1.jpg" alt="slider">
						</div>
						<h4 class="wishes__title font-weight-bold">Firdaus Nutrihadi</h4>
						<p class="mx-auto">"<?php echo $lang['firdaus-wishes']?>"</p>
					</div>
					<div class="slider__item">
						<div class="wishes__person">
							<img class="rounded-circle m-auto" src="assets/img/sikka.jpg" alt="slider">
						</div>
						<h4 class="wishes__title font-weight-bold">Sikka Roosdiantie</h4>
						<p class="mx-auto">"<?php echo $lang['sikka-wishes']?>"</p>
					</div>
					<div class="slider__item">
						<div class="wishes__person">
							<img class="rounded-circle m-auto" src="assets/img/tama.jpg" alt="slider">
						</div>
						<h4 class="wishes__title font-weight-bold">Riztama Prawita</h4>
						<p class="mx-auto">"<?php echo $lang['riztama-wishes']?>"</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section Gift -->
	
	<!-- Footer -->
	<footer class="section text-center">
		<div class="container text-white position-relative">
			<div class="footer__title">
				<h1 class="title "><?php echo $lang['about-title']?></h1>
			</div>
			<div class="row pb-4">
				<div class="col-md-6 text-center mt-3">
					<div class="wishes__person">
						<img class="rounded-circle" src="assets/img/Cynthia.jpg" alt="slider">
					</div>
					<h4 class="wishes__title font-weight-bold text-center mb-0">Cynthia Ghaida Subroto</h4>
					<a class="nav-link nav-link_social mb-1" href="https://www.instagram.com/cynthiasubroto/" target="_blank">
						<i class="fa fa-2x fa-instagram"></i>
					</a>
					<p class="text-justify"><?php echo $lang['info-cynthia']?></p>
				</div>
				<div class="col-md-6 text-center mt-3">
					<div class="wishes__person">
						<img class="rounded-circle m-auto" src="assets/img/Rizal.jpg" alt="slider">
					</div>
					<h4 class="wishes__title font-weight-bold text-center mb-0">Muhammad Rizal Prihandoko</h4>
					<a class="nav-link nav-link_social mb-1" href="https://www.instagram.com/mprizal/" target="_blank">
						<i class="fa fa-2x fa-instagram"></i>
					</a>
					<p class="text-justify"><?php echo $lang['info-rizal']?></p>
				</div>
			</div>
			<div class="copyright text-center">&copy; Copyright 2021 by <b>Cynthia</b> & <b>Rizal</b>.</br>All right Reserved.</div>
		</div>
	</footer>
	<script src="assets/js/vendor/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/vendor/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="assets/js/vendor/popper.min.js" type="text/javascript"></script>
	<script src="assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/vendor/slick.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js" type="text/javascript"></script>
	<script src="assets/js/vendor/circletype.min.js" type="text/javascript"></script>
	<script src="assets/js/vendor/masonry.pkgd.min.js" type="text/javascript"></script>
	<script src="assets/js/vendor/lightbox.min.js" type="text/javascript"></script>
	<script src="assets/js/main.js" type="text/javascript"></script>
</body>
</html>