<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="Valerie Jelita Lumempow">

	<meta property="og:image" content="{{ asset('frontend/images/Valerie.png') }}">
	<meta name="og:type" property="og:type" content="website">
	<meta name="theme-color" content="#202020">
	<link rel="icon" href="{{ asset('favicon.png') }}">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;700&family=Roboto:wght@400;500&family=Literata:opsz,wght@7..72,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/font-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/blog.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Halaman Tidak Ditemukan | Valerie Jelita</title>

</head>

<body class="stretched search-overlay">

	<div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=915724525182895&autoLogAppEvents=1"></script>
	<div id="wrapper">
		<header id="header" class="header-size-custom" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">
						<div id="logo" class="mx-lg-auto col-auto flex-column order-lg-2 px-0">
							<a href="{{ url('/') }}">
								<img class="logo-default" src="{{ asset('frontend/images/Valerie.png') }}" alt="Canvas Logo">
								<img class="logo-dark" src="{{ asset('frontend/images/Valerie.png') }}" alt="Canvas Logo">
								<img class="logo-mobile" src="{{ asset('frontend/images/Valerie.png') }}" alt="Canvas Logo">
							</a>
							<span class="divider divider-center date-today"><span class="divider-text"></span></span>
						</div>
						<div class="col-auto col-lg-3 order-lg-1 d-none d-md-flex px-0">
							<div class="social-icons">
								<a href="https://facebook.com/semicolonweb" class="social-icon rounded-circle bg-dark si-mini h-bg-facebook" target="_blank">
									<i class="fa-brands fa-facebook-f"></i>
									<i class="fa-brands fa-facebook-f"></i>
								</a>
								<a href=" https://www.instagram.com/valerielumempow/" class="social-icon rounded-circle bg-dark si-mini h-bg-instagram" target="_blank">
									<i class="bi-instagram"></i>
									<i class="bi-instagram"></i>
								</a>
							</div>
						</div>

						<div class="header-misc col-auto col-lg-3 justify-content-lg-end ms-0 ms-sm-3 px-0">

							<div class="dropdown dropdown-langs">
							</div>
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i class="bi-x-lg"></i></a>
							</div>

							<div class="dark-mode header-misc-icon d-none d-md-block">
								<a href="#" class="body-scheme-toggle" data-bodyclass-toggle="dark" data-add-html="<i class='bi-sun'></i>" data-remove-html="<i class='bi-moon-stars'></i>"><i class="bi-moon-stars"></i></a>
							</div>
						</div>

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

					</div>
				</div>

				<div class="container">
					<div class="header-row justify-content-lg-center header-border">
						<nav class="primary-menu with-arrows">

							<ul class="menu-container justify-content-start">
							</ul>

						</nav>

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Masukan kata kunci..." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>

		</header>

		<section id="content">

            <div class="content-wrap pt-5" style="overflow: visible;">
        
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h3>Selamat, anda menemukan halaman tidak ditemukan kami.</h3>
                            <a href="{{ url('/') }}" class="btn btn-sm btn-outline-primary">Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
        
            </div>
        
        </section>

		<footer id="footer">
			<div id="copyrights">
				<div class="container">

					<div class="row align-items-center justify-content-center col-mb-30">
						<div class="col-lg-auto text-center">
							Copyrights &copy; {{ date('Y') }} Valerie Jelita Lumempow.<br>
						</div>
					</div>

				</div>
			</div>
		</footer>

	</div>


	<div id="gotoTop" class="uil uil-angle-up rounded-circle" style="left: 30px; right: auto;"></div>

	
	<script src="{{ asset('frontend/js/plugins.min.js') }}"></script>
	<script src="{{ asset('frontend/js/functions.bundle.js') }}"></script>
	<script>
		var weekday = ["Sun","Mon","Tues","Wed","Thurs","Fri","Sat"],
			month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
			a = new Date();

		document.querySelector('.date-today span').innerHTML = weekday[a.getDay()] + ', ' + month[a.getMonth()] + ' ' + a.getDate();
	</script>

	<script>
		function shareOnFacebook(link, text) {
			const facebookIntentURL = "https://www.facebook.com/sharer/sharer.php";
			const contentQuery = `?u=${encodeURIComponent(link)}&quote=${encodeURIComponent(text)}`;
			const shareURL =  facebookIntentURL + contentQuery;
			window.open(shareURL, "_blank");
		}

		function shareOnTwitter(link, text) {
			const twitterIntentURL = "https://twitter.com/intent/tweet";
			const contentQuery = `?url=${encodeURIComponent(link)}&text=${encodeURIComponent(text)}`;
			const shareURL = twitterIntentURL + contentQuery;
			window.open(shareURL, "_blank");
		}

		function shareOnWhatsApp(link, text) {
			const url = "https://wa.me/?text=" + encodeURIComponent(text + "\n" + link);
			window.open(url, "_blank");
		}
	</script>

</body>
</html>