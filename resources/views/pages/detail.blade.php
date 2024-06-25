@extends('layouts.app')

@section('title')
Detail Travel
@endsection


@section('content')
<!-- main -->
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <!-- Breadcrumbs -->
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                     <!-- End Breadcrumbs -->
                </div>
            </div>
            <div class="row">
            <!-- Main Content -->
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Penida</h1>
                        <p>Indonesia</p>

                        <!-- gallery -->
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/nusapenida-image-1.jpg" 
                                alt="Details" class="xzoom" id="xzoom-default" xoriginal="frontend/images/nusapenida-image-1.jpg">
                            </div>
                            <div class="xzoom-thumbs">
                                 <a href="frontend/images/nusapenida-image-1.jpg">
                                    <img src="frontend/images/nusapenida-image-1.jpg" alt="" class="xzoom-gallery" width="128" 
                                    xpreview="frontend/images/nusapenida-image-1.jpg">
                                 </a>
                                 <a href="frontend/images/nusapenida-image-2.jpg">
                                    <img src="frontend/images/nusapenida-image-2.jpg" alt="" class="xzoom-gallery" width="128" 
                                    xpreview="frontend/images/nusapenida-image-2.jpg">
                                 </a>
                                 <a href="frontend/images/nusapenida-image-3.jpg">
                                    <img src="frontend/images/nusapenida-image-3.jpg" alt="" class="xzoom-gallery" width="128" 
                                    xpreview="frontend/images/nusapenida-image-3.jpg">
                                 </a>
                                 <a href="frontend/images/nusapenida-image-4.jpg">
                                    <img src="frontend/images/nusapenida-image-4.jpg" alt="" class="xzoom-gallery" width="128" 
                                    xpreview="frontend/images/nusapenida-image-4.jpg">
                                 </a>
                                 <a href="frontend/images/nusapenida-image.jpg">
                                    <img src="frontend/images/nusapenida-image.jpg" alt="" class="xzoom-gallery" width="128" 
                                    xpreview="frontend/images/nusapenida-image.jpg">
                                 </a>
                            </div>
                        </div>

                        <!-- end gallery  -->
                        <h2>Tentang Wisata</h2>
                        <p>
                            Nusa penida is part island of Bali, Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, nihil tempore. 
                            Quod porro tempore eius accusantium optio nobis voluptates, eum animi sit facilis mollitia magni quis impedit sequi recusandae? Voluptatem.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor unde cupiditate culpa inventore dolore, 
                            consectetur eos expedita autem hic ea cum non asperiores facere voluptatem sed tempora quidem fuga consequatur?
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="frontend/images/ic_event.png" alt="event" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Tarik Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="frontend/images/ic_language.png" alt="event" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="frontend/images/ic_foods.png" alt="event" class="features-image">
                                <div class="description">
                                    <h3>Food</h3>
                                    <p>Local Food</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--End Main Content -->
            <!-- Right Content -->
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Member</h2>
                        <div class="members my-2">
                            <img src="frontend/images/member-1.png" alt="" class="member-image mr-1">
                            <img src="frontend/images/member-2.png" alt="" class="member-image mr-1">
                            <img src="frontend/images/member-3.png" alt="" class="member-mage mr-1">
                            <!-- <img src="" alt="" class="member-image mr-1"> -->
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">
                                    22 Aug, 2023
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">
                                    4D 3N
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">
                                    Open Trip
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">
                                    Rp. 5.000.000,00 / person
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="#" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
                    </div>
                </div>
            <!-- End Right Content -->
            </div>
        </div>
    </section>
</main>
<!-- end main -->

@endsection

@push('add-on-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script> 
   {{-- meanggil zoom melalui jquery --}}
   <script>
    $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title :false,
            tint:'#333',
            xoffset: 15,
            yoffset:10
        });
    });
   </script>
@endpush
