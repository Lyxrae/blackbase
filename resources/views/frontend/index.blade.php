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
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.png') }}"> 
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
                                <li><a href="tel:0762227707"><img src="{{asset('frontend/images/icon-phone-accent.svg')}}" alt=""><span>Phone: </span>0762 227 707</a></li>
                                <li><a href="mailto:info@blackbase.co.tz"><img src="{{asset('frontend/images/icon-mail-accent.svg')}}" alt=""><span>Email: </span>info@blackbase.co.tz</a></li>
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
						<img src="{{asset('frontend/images/logo.png')}}" alt="Logo">
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
                                            <a href="" class="btn-default btn-dark">Explore Our Menu</a>
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
                                    <img src="{{asset('frontend/images/about-us-image-1.jpg')}}" alt="">
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
                                <a href=""><img src="{{asset('frontend/images/contact-us-circle.svg')}}" alt=""></a>
                            </div>
                            <!-- Contact Circle End -->

                            <!-- About Image Start -->
                            <div class="about-image">
                                <figure class="image-anime">
                                    <img src="{{asset('frontend/images/dadas.jpg')}}" alt="">
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
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="first-tab" data-bs-toggle="tab" data-bs-target="#first" type="button" role="tab" aria-selected="true"><img src="{{asset('frontend/images/icon-menu-tab-1.svg')}}" alt="">Starters</button>
                                </li>                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="second-tab" data-bs-toggle="tab" data-bs-target="#second" type="button" role="tab" aria-selected="false"><img src="{{asset('frontend/images/icon-menu-tab-2.svg')}}" alt="">Main Courses</button>
                                </li>                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third" type="button" role="tab" aria-selected="false"><img src="{{asset('frontend/images/icon-menu-tab-3.svg')}}" alt="">Desserts</button>
                                </li>                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fourth-tab" data-bs-toggle="tab" data-bs-target="#fourth" type="button" role="tab" aria-selected="false"><img src="{{asset('frontend/images/icon-menu-tab-4.svg')}}" alt="">Beverages</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Sidebar Our Menu Nav End -->

                        <!-- Menu Box Start -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Menu Item Start -->
                            <div class="tab-pane fade show active" id="first" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <!-- Our Menu List Start -->
                                        <div class="our-menu-list">
                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="images/our-menu-image-1.png" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Crispy Calamari</h3>
                                                    <span>$12.50</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>From childhood summers by the shore to late-night meals with loved ones, seafood.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->

                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="images/our-menu-image-2.png" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Grilled Lobster Tail</h3>
                                                    <span>$29.99</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>Succulent lobster tail grilled to perfection, served with garlic butter and lemon wedges.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->

                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="images/our-menu-image-3.png" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Scallop Ceviche</h3>
                                                    <span>$14.75</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>Fresh scallops marinated in citrus served with garlic & red onion and cilantro.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->

                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="images/our-menu-image-4.png" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Seared Scallops</h3>
                                                    <span>$24.99</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>Pan-seared scallops with a citrus glaze, served over a bed of creamy risotto.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->

                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="images/our-menu-image-5.png" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Crab & Avocado Salad</h3>
                                                    <span>$15.50</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>Lump crab meat tossed with avocado, cherry tomatoes, and lime dressing.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->

                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="images/our-menu-image-6.png" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Crab Cakes</h3>
                                                    <span>$18.50</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>Golden brown crab cakes served with a spicy remoulade sauce and fresh greens.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->
                                        </div>
                                        <!-- Our Menu List End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Menu Item End -->

                            <!-- Menu Item Start -->
                            <div class="tab-pane fade" id="second" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <!-- Our Menu List Start -->
                                         <div class="our-menu-list">
                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-1.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Fish fry</h3>
                                                        <hr>
                                                        <span>$26.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-2.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Prawn masala</h3>
                                                        <hr>
                                                        <span>$28.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-3.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Pasta alfredo</h3>
                                                        <hr>
                                                        <span>$30.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-4.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Sushi platter</h3>
                                                        <hr>
                                                        <span>$20.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-5.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>mutton biryani</h3>
                                                        <hr>
                                                        <span>$29.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-6.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Mutton curry</h3>
                                                        <hr>
                                                        <span>$24.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->
                                         </div>
                                        <!-- Our Menu List End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Approch Item End -->

                            <!-- Menu Item Start -->
                            <div class="tab-pane fade" id="third" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <!-- Our Menu List Start -->
                                         <div class="our-menu-list">
                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-1.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Fries</h3>
                                                        <hr>
                                                        <span>$6.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-2.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>chicken leg piece</h3>
                                                        <hr>
                                                        <span>$8.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-3.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Chips</h3>
                                                        <hr>
                                                        <span>$7.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-4.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Mash</h3>
                                                        <hr>
                                                        <span>$9.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-5.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Salad</h3>
                                                        <hr>
                                                        <span>$4.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-6.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Slaw</h3>
                                                        <hr>
                                                        <span>$10.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->
                                         </div>
                                        <!-- Our Menu List End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Approch Item End -->

                            <!-- Menu Item Start -->
                            <div class="tab-pane fade" id="fourth" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <!-- Our Menu List Start -->
                                         <div class="our-menu-list">
                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-1.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Tang yuan</h3>
                                                        <hr>
                                                        <span>$16.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-2.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Egg custard</h3>
                                                        <hr>
                                                        <span>$26.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-3.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Zabaione</h3>
                                                        <hr>
                                                        <span>$21.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-4.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Almond soup</h3>
                                                        <hr>
                                                        <span>$30.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-5.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Bomboloni</h3>
                                                        <hr>
                                                        <span>$28.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-6.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Tiramisu</h3>
                                                        <hr>
                                                        <span>$22.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->
                                         </div>
                                        <!-- Our Menu List End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Approch Item End -->
                        </div>
                        <!-- Approch Box End -->
                    </div>
                    <!-- Our Approch Tab End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                        <p><span>Free</span>Crafted for Your Cravings: Today's Must- <a href="">Try Selection</a></p>
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
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Reach out and let the flavors begin - your next seafood experience</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Whether it's an intimate dinner, corporate function, or milestone celebration, our stunning venue and expertly crafted seafood menu set the stage.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Cta Button Start -->
                        <div class="cta-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="contact.html" class="btn-default btn-highlighted">Contact Us Now</a>
                            <a href="reserve-table.html" class="btn-default btn-dark">Reserve A Table</a>
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
                                <img src="images/icon-cta-counter-1.svg" alt="">
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
                                <img src="images/icon-cta-counter-2.svg" alt="">
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
                                <img src="images/icon-cta-counter-3.svg" alt="">
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
                                <img src="images/icon-cta-counter-4.svg" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">25</span>+</h2>
                                <p>Local Fishermen Suppliers We Partner With</p>
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
                                <a href=""><img src="{{asset('frontend/images/arrow-white.svg')}}" alt=""></a>
                            </div>
                        </div>
                        <!-- Gallery Image End -->
                        @endforeach
                    </div>
                    <!-- Our Gallery Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Gallery Section End -->

    <!-- Reserve Table Section Start -->
    <div class="reserve-table bg-section light-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Reserve A Table</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Dine with us - simple, seamless table reservations</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Reserve Table Form Start -->
                    <div class="reserve-table-form wow fadeInUp" data-wow-delay="0.2s">
                        <form id="reserveForm" action="#" method="POST" data-toggle="validator">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Your Name*</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Ex. John Dev" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">email address*</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="example@gmail.com" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                        
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">phone number*</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Date of Reservation*</label>
                                    <input type="date" name="date" class="form-control" id="date" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-12 mb-5">
                                    <label class="form-label">Special Requests</label>
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Additional Message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                        
                                <div class="col-md-12">
                                    <button type="submit" class="btn-default"><span>Book A Table</span></button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Reserve Table Form End -->
                </div>

                <div class="col-lg-5">
                    <!-- Reserve Table Content Start -->
                    <div class="reserve-table-content wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <p>Have a question, need a reservation, or want to plan a private event? Reach out - we're here to help!</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Reserve Table Info Start -->
                        <div class="reserve-table-info">
                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>Our Address</h3>
                                <p>Wazo Kontena. Madale, Dar Es Salaam</p>
                            </div>
                            <!-- Reserve Table Info Item End -->

                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>Contact Information</h3>
                                <p>Phone: <a href="tel:0762227707">+255 762 227 707</a></p>
                                <p>Email: <a href="mailto:info@blackbase.co.tz">info@blackbase.co.tz</a></p>
                            </div>
                            <!-- Reserve Table Info Item End -->

                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>Stay Connected</h3>
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Reserve Table Info Item End -->
                        </div>
                        <!-- Reserve Table Info End -->
                    </div>
                    <!-- Reserve Table Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Reserve Table Section End -->

    <!-- Main Footer Start -->
    <footer class="main-footer bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{asset('frontend/images/logo.png')}}" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>We're here to flip the script on traditional baking. Think bold flavor combos</p>
                        </div>
                        <!-- About Footer Content End -->

                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <h3>Follow On Socials:</h3>
                            <ul>
                                <li><a href="mail: info@blackbase.co.tz"><i class="fa-solid fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
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
                                <p>Wazo Kontena. Madale, Dar Es Salaam</p>
                            </div>
                            <!-- Footer Contact Item End -->
                            
                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <h3>Get In Touch</h3>
                                <p><a href="mailto:info@blackbase.co.tz">info@blackbase.co.tz</a></p>
                                <p><a href="tel:123456789">+255 762 227 707</a></p>
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
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Our Menu</a></li>
                                <li><a href="">contact us</a></li>
                            </ul>
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