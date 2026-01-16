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
                        </div>
                        <!-- Topbar Contact Information End -->
                    </div>

                    <div class="col-md-3">
                        <!-- Topbar Social Links Start -->
                        <div class="topbar-social-links">
                            <ul>
                                <li><a href="https://www.instagram.com/blackbasetz?igsh=bTZtbmx5ZGxkZ29h"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/profile.php?id=61582325535710"><i class="fa-brands fa-facebook-f"></i></a></li>
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
                                
                            </ul>
                        </div>
                        
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="{{route('contact')}}" class="btn-default">Reserve A Table</a>
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

      <!-- Hero Section Start -->
    <div class="hero hero-slider-layout dark-section">
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($slideshows as $slideshow)
                    <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="{{ asset('storage/'.$slideshow->image) }}" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-end">
                                <div class="col-lg-7">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h3 class="wow fadeInUp">{{$slideshow->name}}</h3>
                                            <h1 class="text-anime-style-3" data-cursor="-opaque">{{$slideshow->description}}</h1>
                                        </div>
                                        <!-- Section Title End -->

                                        <!-- Hero Button Start -->
                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.2s">
                                            <a href="" class="btn-default btn-highlighted">Get Started</a>
                                        </div>
                                        <!-- Hero Button End -->
                                    </div>
                                    <!-- Hero Content End -->
                                </div>

                                <div class="col-lg-5">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->
                @endforeach

           
            </div>
        </div>        
    </div>
    <!-- Hero Section End -->
    
    <!-- About us Section Start -->
    <div class="about-us bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image Box 1 Start -->
                        <div class="about-image-box-1">
                            <!-- About Image Start -->
                            <div class="about-image">
                                <figure class="image-anime reveal">
                                    <img src="{{asset('frontend/images/about-us-image-1.JPG')}}" alt="">
                                </figure>
                            </div>
                            <!-- About Image End -->

                            <!-- Customer Rate Box Start -->
                            <div class="customer-rate-box">
                                <h2><span class="counter">95</span>%</h2>
                                <p>Customer Repeat Rate</p>
                            </div>
                            <!-- Customer Rate Box End -->
                        </div>
                        <!-- About Image Box 1 End -->
                        
                        <!-- About Image Box 3 Start -->
                        <div class="about-image-box-2">
                            <!-- Contact Circle Start -->
                            <div class="contact-us-circle">
                                <a href=""><img src="{{asset('frontend/images/contact-us-circle.SVG')}}" alt=""></a>
                            </div>
                            <!-- Contact Circle End -->

                            <!-- About Image Start -->
                            <div class="about-image">
                                <figure class="image-anime">
                                    <img src="{{asset('frontend/images/dadas.JPG')}}" alt="">
                                </figure>
                            </div>
                            <!-- About Image End -->
                        </div>
                        <!-- About Image Box 3 End -->
                    </div>
                    <!-- About Us Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- About us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Our story of freshness flavors</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Blackbase began as a small seaside eatery and has grown into a destination for delicious foods lovers near and far. What hasn't changed is our devotion to honest food.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Body List Start -->
                        <div class="about-body-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Freshly Baked with Care.</li>
                                <li>100% Quality You Can Taste!</li>
                            </ul>
                        </div>
                        <!-- About Body List End -->
                         
                        <!-- About Counter List Start -->
                        <div class="about-counter-list">
                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <h2><span class="counter">10</span>+</h2>
                                <p>Years of Experience</p>
                            </div>
                            <!-- About Counter Item End -->
                            
                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <h2><span class="counter">5</span>K+</h2>
                                <p>Happy Customers</p>
                            </div>
                            <!-- About Counter Item End -->

                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <h2><span class="counter">98</span>%</h2>
                                <p>Satisfaction Rate</p>
                            </div>
                            <!-- About Counter Item End -->
                        </div>
                        <!-- About Counter List End -->
                        
                        <!-- About Button Start -->
                        <div class="about-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="" class="btn-default">More about us</a>
                        </div>
                        <!-- About Button End -->   
                    </div>
                    <!-- About us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About us Section End -->

    <!-- Our Menu Section Start -->
    <div class="our-menu bg-section dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Featured Menu</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Crafted to Delight, Every Plate a Masterpiece</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Menu Tab Start -->
                    <div class="our-menu-tab wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Sidebar Our Menu Nav start -->
                        <div class="our-menu-tab-nav">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    @foreach($categories as $index => $category)
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link {{ $index == 0 ? 'active' : '' }}"
                                                    id="tab-{{ $category->id }}"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#cat-{{ $category->id }}"
                                                    type="button"
                                                    role="tab">

                                                <img src="{{ asset($category->image) }}" alt="">
                                                {{ $category->name }}

                                            </button>
                                        </li>
                                    @endforeach
                                    </ul>

                        </div>
                        <!-- Sidebar Our Menu Nav End -->

                        <!-- Menu Box Start -->
                       <div class="tab-content" id="myTabContent">

@foreach($categories as $index => $category)
<div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}"
     id="cat-{{ $category->id }}"
     role="tabpanel">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <div class="our-menu-list">

                @foreach($category->menus as $menu)
                <div class="our-menu-item">

                    <div class="menu-item-body">

                        <div class="menu-item-title">
                            <h3>{{ $menu->name }}</h3>
                            <span>{{ number_format($menu->price) }}K</span>
                        </div>

                        <div class="menu-item-content">
                            <p>{{ $menu->description }}</p>
                        </div>

                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endforeach

</div>

                        <!-- Approch Box End -->
                    </div>
                    <!-- Our Approch Tab End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                        <p><span>Wants More</span><a href="{{route('menu')}}">More Menus</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Menu Section End -->

    <!-- Call To Action Box Start -->
    <div class="cta-box bg-section dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box-content">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">Contact Us today!</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Reach out and let the flavors begin - your next food experience</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Whether it's an intimate dinner, corporate function, or milestone celebration, our stunning venue and expertly crafted food menu set the stage.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Cta Button Start -->
                        <div class="cta-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{route('contact')}}" class="btn-default btn-highlighted">Contact Us Now</a>
                            
                        </div>
                        <!-- Cta Button End -->
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Cta Counter List Start -->
                    <div class="cta-counter-list">
                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="images/icon-cta-counter-1.SVG" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">85</span>+</h2>
                                <p>Unique Signature Dishes Curated by Our Team</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->

                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="images/icon-cta-counter-2.SVG" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">4.9</span>+</h2>
                                <p>Customer Ratings Reflecting Consistency</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->

                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="images/icon-cta-counter-3.SVG" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">35</span>k+</h2>
                                <p>Guests Who've Dined With Us and Shared Moments</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->

                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="images/icon-cta-counter-4.SVG" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">25</span>+</h2>
                                <p>Suppliers We Partner With</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->
                    </div>
                    <!-- Cta Counter List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Box End -->

    <!-- Our Gallery Section Start -->
    <div class="our-gallery bg-section">
        <div class="container-fluid">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">our gallery</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Savor the view - delicious dishes and unforgettable memories</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Gallery Box Start -->
                    <div class="our-gallery-box">
                        @foreach ($galleries as $gallery)
                            <!-- Gallery Image Start -->
                        <div class="gallery-image wow fadeInUp">
                            <figure>
                                <img src="{{ asset('storage/'.$gallery->path) }}" alt="">
                            </figure>
                            <div class="gallery-btn">
                                <a href=""><img src="{{asset('frontend/images/arrow-white.SVG')}}" alt=""></a>
                            </div>
                        </div>
                        <!-- Gallery Image End -->
                        @endforeach
                    </div>
                    <!-- Our Gallery Box End -->
                </div>
                 <div class="cta-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{route('gallery')}}" class="btn-default btn-highlighted">View More</a>
                        </div>
            </div>
        </div>
    </div>
    <!-- Our Gallery Section End -->

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
                             @foreach ($services as $service)
                              <li>{{$service->name}}</li>
                           @endforeach
                          
                            
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
                            <form id="newslettersForm" action="#" method="">
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control"  id="mail" placeholder="E-mail Address *" required>
                                    <button type="submit" class="newsletter-btn"><img src="{{asset('frontend/images/arrow-accent.svg')}}" alt=""></button>
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
                                <img src="{{asset('frontend/images/arrow-white.svg')}}" alt="">
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