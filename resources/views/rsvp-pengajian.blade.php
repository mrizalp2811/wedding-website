<?php
	include "config.php"
?>
<!DOCTYPE html>
<html lang="">
<head>
		<title>Cynthia & Rizal - RSVP Pengajian</title>
		<meta name="robots" content="noindex">
		<meta charset=utf-8>
		<meta name=description content="Selamat datang di halaman konfirmasi kehadiran (Pengajian) menuju pernikahan Cynthia dan Rizal. Kami berharap anda dapat bergabung dengan kami di hari spesial kami.">
		<meta property="og:title" content="Cynthia & Rizal | RSVP Pengajian" />
		<meta property="og:description" content="Selamat datang di halaman konfirmasi kehadiran (Pengajian) menuju Cynthia dan Rizal. Kami berharap anda dapat bergabung dengan kami di hari spesial kami.">
		<meta property="og:image" itemprop="image" content="assets/img/ogimage-cynthia-rizal.png"/>
		<meta property="og:image:width" content="300" />
		<meta property="og:image:height" content="300" />
		<meta property="og:url" content="https://cynthia-rizal.com/rsvp-pengajian" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Styles -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/vendor/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/vendor/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/css/vendor/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="assets/css/vendor/lightbox.min.css">
		<!-- Main style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!-- Fonts -->
		<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans:300,400,600,700%7CSource+Serif+Pro%7CDosis" rel="stylesheet">
		<link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico"/>
	</head>
<body>
	<!-- Navigation -->
	<nav id="navbar" class="navbar navbar-expand-lg fixed-top p-0 text-white onscroll">
		<div class="d-lg-flex w-100 align-items-start">
			<a class="navbar-brand text-primary" href="/main">
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
						<a class="nav-link page-scroll" href="/main#top"><?php echo $lang['home'] ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link page-scroll" href="/main#events"><?php echo $lang['events'] ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link page-scroll" href="/main#gallery"><?php echo $lang['gallery'] ?></a>
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
						<a href="/rsvp-pengajian?lang=id" class="flag flag-icon flag-icon-id"></a>
						</div>
						<div style="padding-left: 5px; border-left: 1px solid white;">
						<a href="/rsvp-pengajian?lang=en" class="flag flag-icon flag-icon-gb"></a>
						</div>
					</li>
					<li class="nav-item ml-lg-4 d-lg-none">
						<span class="nav-link">&copy; Cynthia and Rizal 2021.</span>
					</li>
				</ul>
			</div>
		</div>
	</nav>
    <section id="rsvp" class="rsvp section">
		<div class="container">
			<div class="row">
				<div class="d-none d-md-block col-sm-12 col-md-4">
					<img src="assets/img/rsvp-flower.png" class="parallax" alt="flower">
				</div>
				<div class="col-sm-12 col-md-8 align-self-center">
					<h2 class="title"><?php echo $lang['rsvp-title'] ?> (Pengajian)</h2>
					<h6 class="text-uppercase font-weight-bold mb-0"><?php echo $lang['rsvp-subheader'] ?></h6>

					<form id="rsvp-form" action='' method="post" >
						@csrf
						<div class="row">
							<div class="col-md-8 mb-3 m-md-0">
								<div class="form-group">
									<label class="control-label" for="inputName"><?php echo $lang['rsvp-name-header'] ?></label>
									<input type="text" class="form-control" placeholder="e.g: Cynthia Subroto" id="inputName" name="name" autocomplete="off" required >
								</div>
								<div class="form-group">
									<label class="control-label" for="inputNumber"><?php echo $lang['rsvp-phone-header'] ?></label>
									<input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="e.g: 081xxxxxx" id="inputPhone" name="phone" autocomplete="off" required >
								</div>
								<div class="form-group">
									<label class="control-label" for="inputConfirm" style="margin-bottom: 15px;"><?php echo $lang['rsvp-confirm-header'] ?></label></br>
									<input type="radio" id="yes" name="confirmation" value="yes" required>
  									<label for="yes"><?php echo $lang['rsvp-confirm-yes'] ?></label></br>
  									<input type="radio" id="no" name="confirmation" value="no" required>
  									<label for="no"><?php echo $lang['rsvp-confirm-no'] ?></label>
								</div>
								<div class="form-group" id="guests" style="margin-top: 20px;">
									<label class="control-label" for="inputFriendName" style="margin-bottom: 18px;"><?php echo $lang['rsvp-guests-header'] ?></label></br>
									<select id="guests-select" name="person" required>
										<option id="guests-choose" disabled selected value=""><?php echo $lang['rsvp-guests-choose'] ?></option>
										<option value="1"> <?php echo $lang['rsvp-guests-1'] ?> </option>
										<option value="2"> <?php echo $lang['rsvp-guests-2'] ?> </option>
									</select>
								</div>
								<div class="form-group d-none">
									<input type="text" class="form-control" id="inputNumber" name="id" >
								</div>

								<div class="form-group d-none">
									<input type="text" class="form-control" id="qrCode" name="qr_code" >
								</div>

							</div>
							<div class="col-md-4 align-self-end">
								<button type="submit" class="btn btn-outline-dark rounded-0 px-3 py-1 font-weight-bold" id="submit-form">
									<span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
									<span id="buttonText"><?php echo $lang['rsvp-send'] ?></span>
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="success-msg"></div>
							</div>
						</div>
						 
					</form>
					<div id="myModal" class="modal fade">
						<div class="modal-dialog modal-confirm modal-dialog-centered">
							<div class="modal-content background-modal">
								<div class="modal-body text-center" style="padding: 30px;">
									<h4><?php echo $lang['rsvp-thanks-header'] ?></h4>	
									<p><?php echo $lang['rsvp-thanks-body'] ?></p>
									<a class="btn btn-outline-dark rounded-0 py-1 font-weight-bold" href="/main"><span><?php echo $lang['rsvp-continue-button'] ?></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Button trigger modal -->

<!-- Modal -->


	<!-- Footer -->
	<script src="assets/js/vendor/jquery.min.js"></script>
	<script src="assets/js/vendor/jquery.easing.1.3.js"></script>
	<script src="assets/js/vendor/popper.min.js"></script>
	<script src="assets/js/vendor/bootstrap.min.js"></script>
	<script src="assets/js/vendor/slick.min.js"></script>
	<script src="assets/js/vendor/circletype.min.js"></script>
	<script src="assets/js/vendor/masonry.pkgd.min.js"></script>
	<script src="assets/js/vendor/lightbox.min.js"></script>
	<script src="assets/js/google_script_pengajian.js"> </script>
</body>

</html>