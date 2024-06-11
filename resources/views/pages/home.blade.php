@extends('layouts.app')

@section('title')
Nomands
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>Explore The Beautiful
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            You will see Beautiful
            <br>
            moments you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>
<!-- end header -->

<!-- main -->
<main>
    <!-- statistik -->
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12K</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>2K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>
    <!-- end statistik -->

    <!-- section popular-->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try
                            <br>
                            before in this word
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <!-- end section popular-->

    <!-- section popular content-->
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
              <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/itemwisata-bali.png');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">DERETAN , BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="" class="btn btn-travel-detail px-4">
                                View Detail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/itemwisata-bromo.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">BROMO , MALANG</div>
                        <div class="travel-button mt-auto">
                            <a href="" class="btn btn-travel-detail px-4">
                                View Detail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/itemwisata-nusa.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">NUSA PENIDA</div>
                        <div class="travel-button mt-auto">
                            <a href="details.html" class="btn btn-travel-detail px-4">
                                View Detail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/itemwisata-dubai.jpg');">
                        <div class="travel-country">UNI EMIRAT ARAB</div>
                        <div class="travel-location">DUBAI</div>
                        <div class="travel-button mt-auto">
                            <a href="" class="btn btn-travel-detail px-4">
                                View Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section network -->
    <section class="section-networks" id="network">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <H2>Our Networks</H2>
                    <p>
                        companies are trusted us
                        <br>
                        more than just a trip
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="/frontend/images/logos_partner.png" alt="logo-partners"  class="img-parter">
                </div>
            </div>
        </div>
    </section>

    <!-- Section testimonial heading-->
    <section class="section-testimonial-heading" id="testimonial-heading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>Moments were giving them 
                        <br>
                    the best experience</p>
                </div>
            </div>
        </div>

    </section>
    <!-- Section testimonial heading-->
    <!-- section testimonial content -->
    <section class="section section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial-1.png" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Pelanggan 1</h3>
                            <p class="testimonial">
                                “ It was glorious and I could 
                                not stop to say wohooo for 
                                every single moment
                                Dankeeeeee “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip To Ubud
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial-1.png" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Pelanggan 1</h3>
                            <p class="testimonial">
                                “ It was glorious and I could 
                                not stop to say wohooo for 
                                every single moment
                                Dankeeeeee “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip To Ubud
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial-1.png" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Pelanggan 1</h3>
                            <p class="testimonial">
                                “ It was glorious and I could 
                                not stop to say wohooo for 
                                every single moment
                                Dankeeeeee “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip To Ubud
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
      <!-- section testimonial content -->

</main>
<!-- end main -->
@endsection
