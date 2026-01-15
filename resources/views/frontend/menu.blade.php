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
                            <p><span>Hot</span>Explore More <a href="/menu.pdf">Download Menu</a></p>
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
                                    <img src="{{asset('frontend/images/tam.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="faq-img-1">
                                <figure class="image-anime reveal">
                                    <img src="{{asset('frontend/images/samaki.jpg')}}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Faqs Image Box End -->

                        <!-- Faqs Image Box Start -->
                        <div class="faq-img-box-2">
                            <div class="faq-img-2">
                                <figure class="image-anime">
                                    <img src="{{asset('frontend/images/tamtam.jpg')}}" alt="">
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
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Got questions about our food or bookings? Find quick answers to make your Blackbase visit seamless.</p>
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
                                        <p>We're open every day from 08:00 AM to 05:00 AM, including weekends and holidays.we offer both home delivery and takeaway.</p>
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
                                        <p>Ofcourse we do offer optimal delivery to our customers</p>
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
                                        <p>Feel free to walk in anytime at Blackbase</p>
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