@extends('layouts.front')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our gallery</h1>                        
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
  
   <!-- Photo Gallery Section Start -->
<div class="page-gallery bg-section">
    <div class="container">
        <!-- gallery section start -->
        <div class="row gallery-items page-gallery-box">
             @foreach ($galleries as $gallery)
            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp">
                    <a href="" data-cursor-text="View">
                        <figure class="image-anime">
                            <img src="{{ asset('storage/'.$gallery->path) }}" alt="">
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

 