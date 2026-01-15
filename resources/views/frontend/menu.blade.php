@extends('layouts.front')
@section('content')

 <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our menu</h1>                        
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">home</a></li>
                               
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
  
     <!-- Page Menu Start -->
    <div class="page-menu bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <!-- Our Menu Tab Start -->
                        <div class="our-menu-tab wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Sidebar Our Menu Nav start -->
                            <div class="our-menu-tab-nav">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="first-tab" data-bs-toggle="tab" data-bs-target="#first" type="button" role="tab" aria-selected="true"><img src="{{asset('frontend/images/icon-menu-tab-primary-1.svg')}}" alt="">Starters</button>
                                    </li>                                
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="second-tab" data-bs-toggle="tab" data-bs-target="#second" type="button" role="tab" aria-selected="false"><img src="{{asset('frontend/images/icon-menu-tab-primary-2.svg')}}" alt="">Main Courses</button>
                                    </li>                                
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third" type="button" role="tab" aria-selected="false"><img src="{{asset('frontend/images/icon-menu-tab-primary-3.svg')}}" alt="">Desserts</button>
                                    </li>                                
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="fourth-tab" data-bs-toggle="tab" data-bs-target="#fourth" type="button" role="tab" aria-selected="false"><img src="{{asset('frontend/images/icon-menu-tab-primary-4.svg')}}" alt="">Beverages</button>
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
                            <p><span>Free</span>Crafted for Your Cravings: Today's Must- <a href="">Download Menu</a></p>
                        </div>
                        <!-- Section Footer Text End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Menu End -->

       <!-- Our Faqs Section Start -->
    <div class="our-faqs bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Faqs Images Start -->
                    <div class="faqs-images">
                        <!-- Faqs Image Box Start -->
                        <div class="faq-img-box-1">
                            <div class="faq-img-1">
                                <figure class="image-anime reveal">
                                    <img src="{{asset('frontend/images/faq-img-1.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="faq-img-1">
                                <figure class="image-anime reveal">
                                    <img src="{{asset('frontend/images/faq-img-2.jpg')}}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Faqs Image Box End -->

                        <!-- Faqs Image Box Start -->
                        <div class="faq-img-box-2">
                            <div class="faq-img-2">
                                <figure class="image-anime">
                                    <img src="{{asset('frontend/images/faq-img-3.jpg')}}" alt="">
                                </figure>
                            </div>

                           
                        </div>
                        <!-- Faqs Image Box End -->
                    </div>
                    <!-- Faqs Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- Faqs Content Start -->
                    <div class="faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">FAQs</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Frequently asked question</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Got questions about our food or bookings? Find quick answers to make your Seabud visit seamless.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What are your opening hours and days?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We're open every day from 12:00 PM to 11:00 PM, including weekends and holidays.we offer both home delivery and takeaway.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Do you offer home delivery or takeaway options?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We're open every day from 12:00 PM to 11:00 PM, including weekends and holidays.we offer both home delivery and takeaway.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Is reservation required, or can we walk in anytime?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We're open every day from 12:00 PM to 11:00 PM, including weekends and holidays.we offer both home delivery and takeaway.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Do you have vegetarian or vegan options?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We're open every day from 12:00 PM to 11:00 PM, including weekends and holidays.we offer both home delivery and takeaway.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- Faqs Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->
@endsection