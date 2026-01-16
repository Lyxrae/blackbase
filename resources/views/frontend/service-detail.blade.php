@extends('layouts.front')

@section('content')


    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">{{$service->name}}</h1>                        
                        <div class="post-single-meta wow fadeInUp">
							<ol class="breadcrumb">
                            </ol>
						</div>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
  
    <!-- Page Single Post Start -->
    <div class="page-single-post bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('storage/'.$service->image) }}" alt="">
                        </figure>
                    </div>
                    <!-- Post Featured Image Start -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <p class="wow fadeInUp">{{$service->description}}</p>                        
                            <blockquote class="wow fadeInUp" data-wow-delay="0.4s">
                                <p>{{$service->message}}.</p>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Post Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Single Post End -->
 <!-- Photo Gallery Section Start -->
<div class="page-gallery bg-section">
    <div class="container">
        <!-- gallery section start -->
        <div class="row gallery-items page-gallery-box">
             @foreach ($service->gallery as $image)
            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp">
                    <a href="{{ asset('storage/'.$image) }}" data-cursor-text="View">
                        <figure class="image-anime">
                            <img src="{{ asset('storage/'.$image) }}" alt="">
                        </figure>
                    </a>
                </div>
            </div>
              @endforeach

              
        </div>
        <!-- gallery section end -->
    </div>
</div>
<!-- Photo Gallery Section End -->
@endsection
