<main>
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white">About Us</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a wire:navigate href="{{ route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- why us starts -->
    <section class="why-us pad-top-80">
        <div class="container">
            <div class="why-us-about ">
                <div class="row display-flex">
                    <div class="col-md-6 col-xs-12">
                        <div class="why-about-inner">
                            <h3 class="themecolor">About Travelshop</h3>
                            <h2>Amazing Places To Enjony Your Travel</h2>
                            <p>At Travelshop, We transform your travel dreams into reality. With curated itineraries, exclusive deals, and personalized service, we ensure every journey is an unforgettable experience. Discover the world with us, where adventure meets comfort and every trip is a super journey.</p>
                            <a href="#" class="biz-btn biz-btn1">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="why-about-image">
                            <img src="{{ asset('front/images/home-about.jpg') }}" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why us ends -->
  
     <!-- Viision-->
     <section class="customer-reviews">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 review-item ">
                    <div class="review-image">
                        <img src="{{ asset('front/images/Rashi - chairman.jpg') }}" alt="image">
                        <div class="review-quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>  
                        </div>
                    </div>
                    <div class="review-content mar-top-25">
                        <p class="review-p">Since our inception in 2008, I have envisioned a travel and tourism industry that transcends expectations and fosters genuine connections between our clients and corporate partners. Our journey has been immensely rewarding, thanks to the trust and loyalty of our valued customers.

                            Travelshop is our leisure division, created with a clear vision to provide personalized experiences for our guests. We are deeply committed to ensuring that every interaction is marked by 100% dedication. Our entire team shares this commitment, working tirelessly to make each journey unforgettable.
                            
                            At Arooha, we believe in delivering exceptional experiences that leave lasting memories. Our dedication to excellence has fostered strong relationships with clients and partners, enabling us to establish a reputable presence across India and UAE.
                            
                            Looking ahead, we aim to elevate Travelshop to new heights and are excited to announce our plans for expansion into North America soon.
                            
                            Thank you for being an integral part of our journey. Together, let’s explore the world and create unforgettable experiences!</p>
                            <h3 class="mar-bottom-5">Mr. Rashid Abbas</h3>
                        <p class="mar-bottom-5">Co Founder Arooha & Travelshop</p>             
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Vision -->


     <!-- Viision 2-->
     <section class="customer-reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-4 review-item ">
                    <div class="review-image">
                        <img src="{{ asset('front/images/Rishal-Director.jpg') }}" alt="image">
                        <div class="review-quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>  
                        </div>
                    </div>
                    <div class="review-content mar-top-25">
                        <p class="review-p">At Travelshop, my vision is to elevate our holidays division to new heights by delivering a seamless and unforgettable experience for every guest. We believe that travel is not just about the destination; it's about the journey, the memories created, and the connections made along the way.

                            Our commitment is to introduce innovative travel plans and explore breathtaking, unexplored destinations that inspire and excite our clients. We aim to provide personalized, customer-friendly services that cater to the unique needs and preferences of each traveler.
                            
                            Building and nurturing strong relationships with our guests is at the heart of what we do. We listen, we understand, and we strive to exceed expectations, ensuring that every interaction is positive and meaningful.
                            
                            Join us as we embark on this exciting journey together, discovering the world one holiday at a time!</p>
                        <h3 class="mar-bottom-5">Mohammed Rishal</h3>
                        <p class="mar-bottom-5"> Executive Director, Travelshop by Arooha</p>            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Vision 2-->


    <!-- Call to action starts -->
    <section class="call-to-action">
        <div class="container">
            <div class="row display-flex">
                <div class="col-md-6 col-xs-12">
                    <div class="action-content">
                        <h3 class="white package-name">SUMMER SPCIAL</h3>
                        <h2 class="discounted"><span>25%</span> off</h2>
                        <h2 class="white">SPEND THE BEST VACTION WITH US <br><span>The summer in Maldives</span></h2>
                        <p class="mar-bottom-20">4days / 5nights</p>
                        <a href="#" class="biz-btn">Book Now</a>
                    </div>
                 </div>   
                 <div class="col-md-6 col-xs-12">
                     <div class="video-click">
                         <div class="video-image">
                             <img src="{{ asset('front/images/hometype1.jpg') }}" alt="vide">
                         </div>
                        <div class="video-figure"></div>
                     </div>
                 </div>   
            </div>    
        </div>
    </section>
    <!-- call to action Ends -->

 
    <!-- Reviews starts-->
    <section class="home-testimonial bg-grey">
        <div class="container">
            <div class="section-title">
                <h2>Our Happy Costumers</h2>
                <p>Explore top-rated destinations through the eyes of fellow travelers. Our Top Tour Reviews offer genuine insights and unforgettable experiences to guide your next adventure with Travelshop.</p>
            </div>
            <div class="row testimonial-slider">
                @if ($testmonials->isNotEmpty())
                @foreach( $testmonials as $testmonial)

                <div class="ts-item col-md-4">
                    <div class="ts-image">
                        <img src="{{ asset('storage/' . $testmonial->image) }}" alt="image">
                    </div>
                    <div class="ts-content">
                        <h4 class="mar-bottom-5">{{ $testmonial->name }}</h4>
                        <p class="mar-bottom-5">{{ $testmonial->designation }}</p>
                        <ul class="list-inline">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p class="content mar-0">{{ $testmonial->description }}</p>
                        <div class="ts-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
               
            </div>
        </div>
    </section>
    <!-- End Reviews -->


    <!-- Reviews starts-->
    <section class="home-testimonial bg-grey">
        <div class="container">
            <div class="section-title">
                <h2>Our Happy Costumers</h2>
                <p>Explore top-rated destinations through the eyes of fellow travelers. Our Top Tour Reviews offer genuine insights and unforgettable experiences to guide your next adventure with Travelshop.</p>
            </div>
            <div class="row testimonial-slider">
                <div class="ts-item col-md-4">
                    <div class="ts-image">
                        <img src="{{ asset('front/images/inbox1.jpg') }}" alt="image">
                    </div>
                    <div class="ts-content">
                        <h4 class="mar-bottom-5">Emily R</h4>
                        <p class="mar-bottom-5"> CEO/Mario Brand</p>
                        <ul class="list-inline">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p class="content mar-0">Travelshop made our vacation unforgettable! From seamless booking to expert recommendations, every detail was perfect. Highly recommend their personalized service and insider tips. We’ll definitely be booking with them again!</p>
                        <div class="ts-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="ts-item col-md-4">
                    <div class="ts-image">
                        <img src="{{ asset('front/images/inbox4.jpg') }}" alt="image">
                    </div>
                    <div class="ts-content">
                        <h4 class="mar-bottom-5">Drank Bastis Doe</h4>
                        <p class="mar-bottom-5">COO/Nell & wells Co.</p>
                        <ul class="list-inline">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p class="content mar-0">Exceptional service from start to finish! Travelshop helped us find the best destinations and deals, making our trip stress-free and enjoyable. Their attention to detail and customer care were truly impressive. We can't wait for our next adventure with them!</p>
                        <div class="ts-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="ts-item col-md-4">
                    <div class="ts-image">
                        <img src="{{ asset('front/images/inbox3.jpg') }}" alt="image">
                    </div>
                    <div class="ts-content">
                        <h4 class="mar-bottom-5">John Doe</h4>
                        <p class="mar-bottom-5"> CEO/Mario Brand</p>
                        <ul class="list-inline">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p class="content mar-0">Our experience with Travelshop was fantastic! Their team provided us with top-notch travel advice and made planning our trip a breeze. We were impressed by their professionalism and dedication. Travelshop is our go-to for all future travels!</p>
                        <div class="ts-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="ts-item col-md-4">
                    <div class="ts-image">
                        <img src="{{ asset('front/images/inbox2.jpg') }}" alt="image">
                    </div>
                    <div class="ts-content">
                        <h4 class="mar-bottom-5">Wayne Nell</h4>
                        <p class="mar-bottom-5"> Director/Franchisis Com</p>
                        <ul class="list-inline">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p class="content mar-0">Travelshop exceeded our expectations in every way. Their expert knowledge and friendly service turned our travel dreams into reality. We felt supported throughout our journey and appreciated their personal touch. Thanks, Travelshop, for an amazing experience!</p>
                        <div class="ts-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- End Reviews -->

</main>