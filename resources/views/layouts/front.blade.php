<!DOCTYPE html>
<html lang="eng">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Blackbase">

	<!-- Page Title -->
    <title>Blackbase | Food & More</title>

	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/blackbase_icon.PNG') }}"> 
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&amp;family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet">
	
  <!-- Bootstrap Css -->
<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">

<!-- SlickNav Css -->
<link href="{{ asset('frontend/css/slicknav.min.css') }}" rel="stylesheet">

<!-- Swiper Css -->
<link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}">

<!-- Font Awesome Icon Css -->
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- Animated Css -->
<link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">

<!-- Magnific Popup Core Css File -->
<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

<!-- Mouse Cursor Css File -->
<link rel="stylesheet" href="{{ asset('frontend/css/mousecursor.css') }}">

<!-- Main Custom Css -->
<link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" media="screen">

<style>
   .whatsapp-button {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background-color: #25D366; /* WhatsApp green */
    border-radius: 50%;
    padding: 15px;
    box-shadow: 0 0 15px rgba(37, 211, 102, 0.6);
    transition: all 0.3s ease-in-out;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.whatsapp-button:hover {
    transform: scale(1.1);
    box-shadow: 0 0 25px rgba(37, 211, 102, 1);
}

</style>
</head>
<body>
<!-- Header Start -->
	<header class="main-header">
        <!-- Topbar Section Start -->
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <!-- Topbar Contact Information Start -->
                        <div class="topbar-contact-info">
                            <ul>
                                <li><a href="tel:0762227707"><img src="{{asset('frontend/images/icon-phone-accent.SVG')}}" alt=""><span>Phone: </span>0762 227 707</a></li>
                                <li><a href="mailto:info@blackbase.co.tz"><img src="{{asset('frontend/images/icon-mail-accent.SVG')}}" alt=""><span>Email: </span>info@blackbase.co.tz</a></li>
                            </ul>
                        </div>
                        <!-- Topbar Contact Information End -->
                    </div>

                    <div class="col-md-3">
                        <!-- Topbar Social Links Start -->
                        <div class="topbar-social-links">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- Topbar Social Links End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar Section End -->

		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="/">
						<img src="{{asset('frontend/images/blackbasell.png')}}" style="width: 120px" alt="Logo">
						
					</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a>
                                </li>                                
                                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('menu')}}">Menu</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('service')}}">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('gallery')}}">Gallery</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                                <li class="nav-item highlighted-menu"><a class="" href="">Reserve A Table</a></li>
                            </ul>
                        </div>
                        
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="" class="btn-default">Reserve A Table</a>
                        </div>
                        <!-- Header Btn End -->                      
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

  @yield('content')

   <!-- Main Footer Start -->
    <footer class="main-footer bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{asset('frontend/images/footerlogo.PNG')}}" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p></p>
                        </div>
                        <!-- About Footer Content End -->

                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <h3>Follow On Socials:</h3>
                            <ul>
                                <li><a href="mail: info@blackbase.co.tz"><i class="fa-solid fa-envelope"></i></a></li>
                                <li><a href="https://www.instagram.com/blackbasetz?igsh=bTZtbmx5ZGxkZ29h"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/profile.php?id=61582325535710"><i class="fa-brands fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Social Link End -->
                    </div>
                    <!-- About Footer End -->
                </div>
                
                <div class="col-lg-2 col-md-3">
                    <!-- Footer Links start -->
                    <div class="footer-links">
                        <h3>Our Services</h3>
                        <ul>
                            <li><a href="#">Private Events</a></li>
                            <li><a href="#">Catering Services</a></li>
                            <li><a href="#">Dine-In Experience</a></li>
                            <li><a href="#">Online Reservations</a></li>
                            <li><a href="#">Entertainment Nights</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links end -->
                </div>
                    
                <div class="col-lg-3 col-md-4">
                    <!-- Footer Links start -->
                    <div class="footer-links">            
                        <!-- Footer Contact List Start -->
                        <div class="footer-contact-list">
                           <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <h3>Our Location</h3>
                                <p>P.O BOX 78982</p>
                                <p>Wazo Kontena</p>
                                <p>Madale</p>
                                <p>Dar Es Salaam</p>
                            </div>
                            <!-- Footer Contact Item End -->
                            
                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <h3>Get In Touch</h3>
                                <p><a href="mailto:info@blackbase.co.tz">info@blackbase.co.tz</a></p>
                                <p><a href="tel:0658606707">+255 658 606 707</a></p>
                            </div>
                            <!-- Footer Contact Item End -->
                        </div>
                        <!-- Footer Contact List End -->
                    </div>
                    <!-- Footer Links end -->
                </div>
                    
                <div class="col-lg-3 col-md-5">
                    <!-- Footer Links start -->
                    <div class="footer-links">
                        <h3>Subscribe Newsletter</h3>
                        <p>Subscribe our newsletter to get more updates.!</p>
                        <!-- Footer NewsLetter Form Start -->
                        <div class="footer-newsletter-form">
                            <form id="newslettersForm" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control"  id="mail" placeholder="E-mail Address *" required>
                                    <button type="submit" class="newsletter-btn"><img src="{{asset('frontend/images/arrow-accent.SVG')}}" alt=""></button>
                                </div>
                            </form>
                        </div>
                        <!-- Footer NewsLetter Form End -->                        
                    </div>
                    <!-- Footer Links end -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright">
                        <!-- Footer Top Button Start -->
                        <div class="footer-top-button">
                            <a href="#top">
                                <img src="{{asset('frontend/images/arrow-white.SVG')}}" alt="">
                            </a>
                        </div>
                        <!-- Footer Top Button End -->

                        <!-- Footer Copyright Text Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2026 All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright Text End -->

                        <!-- Footer Menu Start -->
                        <div class="footer-menu">
                            
                        </div>
                        <!-- Footer Menu End -->
                    </div>
                    <!-- Footer Copyright End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Main Footer End -->

 <!-- Jquery Library File -->
<script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>

<!-- Bootstrap js file -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

<!-- Validator js file -->
<script src="{{ asset('frontend/js/validator.min.js') }}"></script>

<!-- SlickNav js file -->
<script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>

<!-- Swiper js file -->
<script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>

<!-- Counter js file -->
<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>

<!-- Magnific js file -->
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>

<!-- SmoothScroll -->
<script src="{{ asset('frontend/js/SmoothScroll.js') }}"></script>

<!-- Parallax js -->
<script src="{{ asset('frontend/js/parallaxie.js') }}"></script>

<!-- MagicCursor js file -->
<script src="{{ asset('frontend/js/gsap.min.js') }}"></script>
<script src="{{ asset('frontend/js/magiccursor.js') }}"></script>

<!-- Text Effect js file -->
<script src="{{ asset('frontend/js/SplitText.js') }}"></script>
<script src="{{ asset('frontend/js/ScrollTrigger.min.js') }}"></script>

<!-- YTPlayer js File -->
<script src="{{ asset('frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>

<!-- Wow js file -->
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>

<!-- Main Custom js file -->
<script src="{{ asset('frontend/js/function.js') }}"></script>
 <a href="https://wa.me/255762227707" class="whatsapp-button" target="_blank" title="Chat with us on WhatsApp">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/whatsapp--v1.png" alt="WhatsApp" width="40" height="40">
    </a>
</body>

</html>