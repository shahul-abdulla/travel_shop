<main>
    


    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white">Services</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a wire:navigate href="{{ route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

     <!-- why us starts -->
     <section class="why-us pad-top-70">
        <div class="container">
            <div class="why-us-box">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="why-us-item why-us-item1 text-center">
                            <div class="why-us-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="why-us-content">
                                <h4>Advice & Support</h4>
                                <p class="mar-0">Travel worry free knowing that we're here if you need us, 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="why-us-item why-us-item1 text-center">
                            <div class="why-us-icon">
                                <i class="flaticon-global"></i>
                            </div>
                            <div class="why-us-content">
                                <h4>Air Ticketing</h4>
                                <p class="mar-0">Effortlessly book your flights with our streamlined air ticketing services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="why-us-item why-us-item1 text-center">
                            <div class="why-us-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="why-us-content">
                                <h4>Hotel Accomodation</h4>
                                <p class="mar-0">Comfortable and stylish hotel accommodations tailored to your travel needs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="why-us-item why-us-item1 text-center">
                            <div class="why-us-icon">
                                <i class="flaticon-location-pin"></i>
                            </div>
                            <div class="why-us-content">
                                <h4>Tour Peckages</h4>
                                <p class="mar-0">Explore the world with our curated tour packages designed for unforgettable experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why us ends -->


     <!-- why us about starts -->
    <section class="why-us pad-top-80 bg-grey">
        <div class="container">
            <div class="why-us-about">
                <div class="row display-flex">
                    <div class="col-md-6 col-xs-12">
                        <div class="why-about-inner">
                            <h3 class="themecolor">Amazing Places To Enjoy Your Travel</h3>
                            <h2>We Provide <span>Best Services</span></h2>
                            <p class="mar-bottom-25">At Travelshop, we provide the best services to ensure your travel experience is seamless and memorable. From personalized itineraries to 24/7 support, our dedicated team is here to make every journey exceptional.</p>
                            <a href="contact.html" class="biz-btn biz-btn1">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="why-about-image">
                                    <img src="{{ asset('front/images/list3.jpg')}}" alt="about">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="why-about-image">
                                    <img src="{{ asset('front/images/list1.jpg')}}" alt="about">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why us about ends -->

   

    <!-- related rooms starts -->
    <section class="related-tour bg-grey">
        <div class="container">
            <div class="section-title">
                <h2>Explore <span>Packages</span></h2>
                <p>Discover a world of adventure with our curated Explore Packages, designed to offer unique and unforgettable travel experiences tailored to your interests.</p>
            </div>

            <div class="trend-box">
                <div class="row team-slider">
                    @if ($packages->isNotEmpty())
                    @foreach( $packages as $package)
                    <div class="col-md-4">
                        <div class="trend-item">
                            @if($package->offer)
                            <div class="ribbon ribbon-top-left"><span>{{ $package->offer }}% OFF</span></div>
                            @endif
                               <div class="trend-image">
                                <img src="{{ asset('storage/'.$package->image) }}" alt="image">
                                <div class="trend-price">
                                    <p class="price">From <span>{{ $package->price }}</span></p>
                                </div>
                            </div>
                            <div class="trend-content">
                                <p><i class="flaticon-location-pin"></i> {{ $package->location }}</p>
                                <h4><a wire:navigate href="{{ route('packagedetail', ['slug' => $package->slug ])}}">{{ $package->package_name}}</a></h4>
                                <div class="rating mar-bottom-15">
                                    @if ($package->reviews <= 35)
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    @elseif ($package->reviews <= 60)
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    @else
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    @endif
                                </div>
                                <span class="mar-left-5">{{ $package->reviews }} Reviews</span>
                                <p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $package->date_time }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>  
        </div>
    </section>
    <!-- related rooms Ends -->



</main>
