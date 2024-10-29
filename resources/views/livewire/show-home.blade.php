<main>

    <!-- banner starts -->
    <section class="banner">
        <div class="slider video-slider">
            <div class="banner-outer">
                <div class="video-banner">
                    <video autoplay muted loop id="vid">
                        <source src="{{ asset('front/images/tour.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="swiper-content">
                    <h1>Inspiring Journeys</h1>
                    <p class="mar-bottom-30">Explore the world, embrace new cultures, and create memories that last a
                        lifetime. <br> Every destination holds a story,
                        Let us help you discover yours. <br>
                        Travelshop by Arooha</p>
                    <a href="tourlist.html" class="biz-btn">Explore More</a>
                    <a href="whatsapp://send?text=Hi, Can i get more details?&phone=+971 50 8381922" target="_blank"
                        class="biz-btn mar-left-10"> <i class="fab fa-whatsapp mar-right-10"></i>Whatsapp Us</a>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
    </section>
    <!-- banner ends -->


    <!-- Highlights starts -->
    <section class="air-tickets">
        <div class="container">
            <div class="section-title">
                <h2 class="white">Top Destinations & Highlights</h2>
            </div>
            <div class=" ticket-slider">
               
            @if($slideImages->isNotEmpty())
                @foreach($slideImages as $slideImage)
                <div class="col-md-3">
                    <div class="ticket-item">
                        <div class="ticket-image">
                            <a href=""><img src="{{ asset('storage/' . $slideImage->image_path) }}"
                                    alt="image"></a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
               
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- Highlights Ends -->


    <!-- why us starts -->
    <section class="why-us pad-top-50">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Us</h2>
                <p>We offer personalized travel experiences tailored to your needs, with expert guidance, unbeatable
                    deals, and a commitment to making every journey unforgettable.</p>
            </div>
            <div class="why-us-box">
                <div class="row">
                    <div class="col-md-4">
                        <div class="why-us-item text-center">
                            <div class="why-us-icon">
                                <i class="flaticon-price"></i>
                            </div>
                            <div class="why-us-content">
                                <h3><a href="#">Competetive Pricing</a></h3>
                                <p class="mar-0">Enjoy unbeatable prices on all your travel adventures with Travelshop.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="why-us-item text-center">
                            <div class="why-us-icon">
                                <i class="flaticon-quality"></i>
                            </div>
                            <div class="why-us-content">
                                <h3><a href="#">Award Winning Service</a></h3>
                                <p class="mar-0">Experience excellence with our award-winning service, where every
                                    journey is crafted to perfection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="why-us-item text-center">
                            <div class="why-us-icon">
                                <i class="flaticon-global"></i>
                            </div>
                            <div class="why-us-content">
                                <h3><a href="#">Worldwide Coverage</a></h3>
                                <p class="mar-0">Explore every corner of the globe with our extensive worldwide
                                    coverage.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why us ends -->

    <!-- top destination starts -->
    <section class="top-desti pad-0">
        <div class="desti-inner">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="{{ asset('front/images/destination3.jpg') }}" alt="desti">
                    <div class="desti-title">
                        <div class="desti-title-inner">
                            <h2 class="white bold">Top Most Destination</h2>
                            <p class="white mar-bottom-0">Explore our handpicked top destinations for unforgettable
                                travel experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="desti-image">
                        <img src="{{ asset('front/images/switzerland.jpg') }}" alt="desti">
                        <div class="desti-content">
                            <h3 class="white mar-bottom-0">Interlaken - Switzerland</h3>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="biz-btn-white">Book Now</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="desti-image">
                        <img src="{{ asset('front/images/lake-garda-itaLY.jpg') }}" alt="desti">
                        <div class="desti-content">
                            <h3 class="white mar-bottom-0">Lake Garda - Italy</h3>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="biz-btn-white">Book Now</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="desti-image">
                        <img src="{{ asset('front/images/Mykonos - Greece.jpg') }}" alt="desti">
                        <div class="desti-content">
                            <h3 class="white mar-bottom-0">Mykonos - Greece </h3>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="biz-btn-white">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="desti-image">
                        <img src="{{ asset('front/images/france.jpg') }}" alt="desti">
                        <div class="desti-content">
                            <h3 class="white mar-bottom-0">Paris - France</h3>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="biz-btn-white">Book Now</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="desti-image">
                        <img src="{{ asset('front/images/halsatt-austria.jpg') }}" alt="desti">
                        <div class="desti-content">
                            <h3 class="white mar-bottom-0">Hallstatt - Austria</h3>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="biz-btn-white">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="desti-image">
                        <img src="{{ asset('front/images/amsterdam.jpg') }}" alt="desti">
                        <div class="desti-content">
                            <h3 class="white mar-bottom-0">Amsterdam - Netherlands</h3>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="biz-btn-white">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="desti-image">
                        <img src="{{ asset('front/images/krabi-thailand.jpg') }}" alt="desti">
                        <div class="desti-content">
                            <h3 class="white mar-bottom-0">Krabi - Thailand </h3>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="biz-btn-white">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top destination ends -->

    <!-- Reviews starts-->
    <section class="top-review bg-grey">
        <div class="container">
            <div class="section-title">
                <h2>Top Tour Reviews</h2>
                <p>Explore top-rated destinations through the eyes of fellow travelers. Our Top Tour Reviews offer
                    genuine insights and unforgettable experiences to guide your next adventure with Travelshop.</p>
            </div>
            <div class="row">
                <div class="review-slider">
                    @if ($testmonials->isNotEmpty())
                        @foreach ($testmonials as $testmonial)
                            <x-testimonia-card :testmonial="$testmonial" />
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </section>
    <!-- End Reviews -->

    <!-- blog starts -->
    <section class="blog">
        <div class="container">
            <div class="section-title">
                <h2>Recent Blogs</h2>
                <p>Explore the latest in travel experiences with our curated activities, from exclusive city tours to
                    adventurous excursions. Stay updated on new destinations and seasonal offers to make the most of
                    your next getaway.</p>
            </div>

            <div class="blog-main">
                <div class="row">
                    @if ($articles->isNotEmpty())
                        @foreach ($articles as $index => $article)
                            @if ($index % 2 == 0)
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12 mar-bottom-25">
                                            <div class="grid">
                                                <div class="grid-item">
                                                    <div class="gridblog-content">
                                                        <div class="date mar-bottom-15"><i
                                                                class="flaticon flaticon-calendar"></i> {{ $article->created_at->format('M d, Y') }}
                                                        </div>
                                                        <h3><a wire:navigate
                                                            href="{{ route('blogDetail', ['slug' => $article->slug])}}">{{ $article->title }}</a></h3>
                                                        <p>{{{ $article->content }}}</p>
                                                        <a wire:navigate
                                                        href="{{ route('blogDetail', ['slug' => $article->slug])}}" class="biz-btn biz-btn1">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="grid">
                                                <div class="grid-item grid-item1">
                                                    <div class="grid-image">
                                                        <img src="{{ asset('storage/' . $article->image) }}"
                                                            alt="blog">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12  mar-bottom-25">
                                            <div class="grid">
                                                <div class="grid-item grid-item1">
                                                    <div class="grid-image">
                                                        <img src="{{ asset('storage/' . $article->image) }}"
                                                            alt="blog">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="grid">
                                                <div class="grid-item">
                                                    <div class="gridblog-content">
                                                        <div class="date mar-bottom-15"><i
                                                                class="flaticon flaticon-calendar"></i> {{ $article->created_at->format('M d, Y') }}
                                                        </div>
                                                        <h3><a  wire:navigate
                                                            href="{{ route('blogDetail', ['slug' => $article->slug])}}">{{ $article->title }}</a></h3>
                                                        <p>{{{ $article->content }}}</p>
                                                        <a wire:navigate
                                                        href="{{ route('blogDetail', ['slug' => $article->slug])}}" class="biz-btn biz-btn1">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->

    <!-- partners starts -->
    <section class="partners bg-grey">
        <div class="container">
            <div class="section-title">
                <h2>Our Awesome Parnters</h2>
                <p>We take pride in our network of exceptional partners who help us deliver unforgettable travel
                    experiences. From top-notch airlines to luxurious hotels, our awesome partners ensure every journey
                    is seamless and extraordinary.</p>
            </div>
            <div class="dest-partner">
                <div class="row partner-slider">

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/tourism-dubai-logo.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/air-arabia.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/iata-logo.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/Jazeera_Airways.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/emirates-logo.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/czech-tourism.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/fly-dubai.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/wizz-air.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/Qatar_Airways.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/visit-berscia.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/Austrian-tourism-logo.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/Aussie-specialist.png') }}" alt="partners">
                    </div>

                    <div class="col-md-2">
                        <img src="{{ asset('front/images/partners/swiss-tourism.png') }}" alt="partners">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partners ends -->

    <!-- Instagram starts -->
    <section class="insta-main pad-0">
        <div class="insta-inner">
            <div class="row display-flex">
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="insta-title">
                        <div class="insta-title-inner text-center">
                            <h4 class="white mar-bottom-5">Follow@instagram</h4>
                            <h3 class="white bold">Travelshop</h3>
                            <a href="https://www.instagram.com/travelshop.ae?utm_source=qr&igsh=eG40dzUxcm9xdXJs"
                                class="biz-btn-white">Follow Us</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 col-sm-9 col-xs-12">
                    <div class="row attract-slider">

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="insta-image">
                                <a href="{{ asset('front/images/lake-garda-itaLY.jpg') }}"><img
                                        src="{{ asset('front/images/lake-garda-itaLY.jpg') }}" alt="insta"></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="insta-image">
                                <a href="{{ asset('front/images/halsatt-austria.jpg') }}"><img
                                        src="{{ asset('front/images/halsatt-austria.jpg') }}" alt="insta"></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="insta-image">
                                <a href="{{ asset('front/images/old-town-pargue.jpg') }}"><img
                                        src="{{ asset('front/images/old-town-pargue.jpg') }}" alt="insta"></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="insta-image">
                                <a href="{{ asset('front/images/france.jpg') }}"><img
                                        src="{{ asset('front/images/france.jpg') }}" alt="insta"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="insta-image">
                                <a href="{{ asset('front/images/switzerland.jpg') }}"><img
                                        src="{{ asset('front/images/switzerland.jpg') }}" alt="insta"></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="insta-image">
                                <a href="{{ asset('front/images/Mykonos - Greece.jpg') }}"><img
                                        src="{{ asset('front/images/Mykonos - Greece.jpg') }}" alt="insta"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="insta-image">
                                <a href="{{ asset('front/images/krabi-thailand.jpg') }}"><img
                                        src="{{ asset('front/images/krabi-thailand.jpg') }}" alt="insta"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram ends -->



</main>
