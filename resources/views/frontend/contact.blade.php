@extends('layouts.front')
@section('content')
      <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact us</h1>                        
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">home</a></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
  
    <!-- Page Contact Us Start -->
    <div class="page-contact-us bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Us Image Start -->
                    <div class="contact-us-image">
                        <div class="contact-us-img">
                            <figure class="image-anime">
                                <img src="{{asset('frontend/images/samaki.jpg')}}" alt="">
                            </figure>
                        </div>

                        <!-- Opening Hours Item Start -->
                        <div class="opening-hours-item wow fadeInUp">
                            <h3>Opening Hour:</h3>
                            <ul>
                                <li>Mon - Fri : 08AM to 05AM</li>
                                <li>Saturday : 08AM to 05AM</li>
                                <li>Sunday : 08AM to 05AM</li>
                            </ul>
                        </div>
                        <!-- Opening Hours Item End -->
                    </div>
                    <!-- Contact Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get in quick touch with us </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Have a question, feedback, or a special request? Reach out now — we're here to help you make your Seabud experience unforgettable.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-us-form">
                            <form id="contactform" method="post" data-toggle="validator" class="contact-form wow fadeInUp" data-wow-delay="0.4s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="First name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="mail" placeholder="Email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="3" placeholder="Write Message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>submit message</span></button>
                                        <div id="formResponse" class="h5 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Contact Info Box Start -->
    <div class="contact-info-box bg-section light-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info List Start -->
                    <div class="contact-info-list">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{asset('frontend/images/icon-phone.svg')}}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Contact us</h3>
                                <p><a href="tel:123456789">(+255)-762-227-707</a></p>
                                
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{asset('frontend/images/icon-mail.svg')}}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Email us</h3>
                                <p><a href="mailto:info@blackbase.co.tz">info@blackbase.co.tz</a></p>
                              
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{asset('frontend/images/icon-location.svg')}}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Address</h3>
                                <p>Wazo Kontena ,Madale, Dar Es Salaam</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info Box End -->

    <!-- Google Map Section Start -->
    <div class="google-map bg-section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3962.760911434624!2d39.15506397499424!3d-6.676516293318624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNDAnMzUuNSJTIDM5wrAwOScyNy41IkU!5e0!3m2!1sen!2stz!4v1765327315297!5m2!1sen!2stz" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Section End -->

    <script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('contactform').addEventListener('submit', function(e) {
        e.preventDefault(); // prevent page reload

        let form = e.target;
        let data = new FormData(form);
        let responseDiv = document.getElementById('formResponse');

        fetch("{{ route('contact.send') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: data
        })
        .then(res => res.json())
        .then(res => {
            if(res.success) {
                responseDiv.innerHTML = `<p style="color:green;">${res.message}</p>`;
                form.reset();
            } else {
                responseDiv.innerHTML = `<p style="color:red;">${res.message ?? 'There was an error.'}</p>`;
            }
        })
        .catch(err => {
            responseDiv.innerHTML = `<p style="color:red;">There was an error sending your message.</p>`;
            console.error(err);
        });
    });
});
</script>

@endsection