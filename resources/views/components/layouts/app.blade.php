<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Travelshop - Tours & Travels' }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/images/fav-icon.png') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!--Default CSS-->
    <link href="{{ asset('front/css/default.css') }}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" type="text/css">
    <!--Color Switcher CSS-->
    <link rel="stylesheet" href="{{ asset('front/css/color/color-default.css') }}">
    <!--Plugin CSS-->
    <link href="{{ asset('front/css/plugin.css') }}" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="{{ asset('front/fonts/flaticon.css') }}" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
   
    @livewireStyles
</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <!-- <div id="status"></div> -->
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    <header class="main_header_area">
        <div class="header-content">
            <div class="container">
                <div class="links links-left">
                    <ul>
                        <li><a href="whatsapp://send?text=Hi, Can i get more details?&phone=+971 50 8381922"
                            target="_blank"><i class="fab fa-whatsapp"></i> +971 50 8381922</a></li>
                        <li><a href="mailto:mail@travelshop.ae"><i class="fa fa-envelope-open"></i> mail@travelshop.ae</a></li>
                    </ul>
                </div>
                <div class="links links-right pull-right">
                    <ul>
                        <li>
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com/share/5JcofumzaZpkTWxj/?mibextid=qi2Omg" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/travelshop.ae?utm_source=qr&igsh=eG40dzUxcm9xdXJs" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/travelshopuaeind1/" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </li>
            
                            <div class="header_sidemenu">
                                <div class="menu">
                                    <div class="close-menu">
                                        <i class="fa fa-times white"></i>
                                    </div>
                                     <div class="m-contentmain">
                                        <div class="m-logo mar-bottom-30">
                                            <img src="{{ asset('front/images/travelshop-logo-white.png') }}" alt="m-logo" width="200">
                                        </div>

                                        <div class="content-box mar-bottom-30">
                                            <h3 class="white">Get In Touch</h3>
                                            <p class="white">Our dedicated team is ready to assist you with personalized travel solutions, ensuring your journey is smooth and memorable. Get in touch today!</p>
                                            <a href="contact.html" class="biz-btn biz-btn1">Contact Us</a>
                                        </div>

                                        <div class="contact-info">
                                                <h4 class="white">Contact Info</h4>
                                                <ul>
                                                    <li><i class="fa fa-map-marker-alt"></i>Office 722 Block B Business Village Port Saeed
                                                        Deira - Dubai</li>
                                                    <li><i class="fa fa-phone-alt"></i>+971 4 8769403</li>
                                                    <li><i class="fa fa-envelope-open"></i>mail@travelshop.ae</li>
                                                    <li><i class="fa fa-clock"></i> Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                                </ul>
                                        </div>
                                    </div>    
                                </div>

                                <div class="mhead">
                                    <span class="menu-ham"><i class="fa fa-bars white"></i></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navigation Bar -->
        <div class="header_menu affix-top">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" wire:navigate href="{{ route('home')}}">
                                <img src="{{ asset('front/images/travelshop-logo.png') }}" alt="image" width="150">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a wire:navigate href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="{{ request()->routeIs('aboutUs') ? 'active' : '' }}">
                                    <a wire:navigate href="{{ route('aboutUs') }}">About Us</a>
                                </li>
                                <li class="{{ request()->routeIs('servicePage') ? 'active' : '' }}">
                                    <a wire:navigate href="{{ route('servicePage') }}">Services</a>
                                </li>
                                <li class="{{ request()->routeIs('packages') ? 'active' : '' }}">
                                    <a wire:navigate href="{{ route('packages') }}">Packages</a>
                                </li>
                                <li class="{{ request()->routeIs('blog') ? 'active' : '' }}">
                                    <a wire:navigate href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
                                    <a wire:navigate href="{{ route('gallery') }}">Gallery</a>
                                </li>
                                <li class="{{ request()->routeIs('contactUs') ? 'active' : '' }}">
                                    <a wire:navigate href="{{ route('contactUs') }}">Contact Us</a>
                                </li>
                                <li class="dropdown submenu"><a href="#search1" class="mt_search"><i class="fa fa-search"></i></a></li>   
                            </ul>
                        </div>
                        
                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid --> 
            </nav>
        </div>
 
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->
    {{ $slot }}

   <footer>
    <div class="footer-upper pad-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-about">
                        <div class="footer-about-in mar-bottom-30">
                            <h3 class="white">Need Travelshop Help?</h3>
                            <div class="footer-phone">
                                <div class="cont-icon"><i class="flaticon-call"></i></div>
                                <div class="cont-content mar-left-20">
                                    <p class="mar-0">Got Questions? Call us 24/7!</p>
                                    <p class="bold mar-0"><span>Call Us:</span> +971 4 8769403</p> 
                                </div>
                            </div>
                        </div>
                        <h3 class="white">Contact Info</h3>
                        <p>Location: Office 722 Block B Business Village Port Saeed
                            Deira - Dubai</p>
                        <ul class="social-links">
                           <li><a href="https://www.facebook.com/share/5JcofumzaZpkTWxj/?mibextid=qi2Omg" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/travelshop.ae?utm_source=qr&igsh=eG40dzUxcm9xdXJs" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/travelshopuaeind1/" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-links">
                        <h3 class="white">Company</h3>
                        <ul>
                            <li><a wire:navigate href="{{ route('aboutUs') }}">About Us</a></li>
                                <li><a wire:navigate href="{{ route('servicePage') }}">Services</a></li>
                                <li><a wire:navigate href="{{ route('packages')}}">Packages</a></li>
                                <li><a wire:navigate href="{{ route('blog') }}">Blog</a></li>
                                <li><a wire:navigate href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a wire:navigate href="{{ route(('contactUs')) }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-links">
                        <h3 class="white">Locations</h3>
                        <ul>
                            <li><a href="https://www.google.com/maps/search/First+Floor,Adakandy+Complex,Above+U+S+Polo+Showroom,Mavoor+Road,+Kozhikode+-+673004/@11.256221,75.7921276,17z?entry=ttu" target="_blank">Kozhikode</a></li>
                            <li><a href="#">Trivandrum</a></li>
                            <li><a href="#">Cochin</a></li>
                            <li><a href="#">Delhi</a></li>
                            <li><a href="https://www.google.com/maps/place/Business+Village+Tower+B/@25.2569478,55.3239458,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f5d6dfef6eb21:0x95b06789864be5e7!8m2!3d25.2569478!4d55.3265207!16s%2Fg%2F11vlr072c8?entry=ttu">Dubai</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-subscribe">
                        <h3 class="white">Subscribe Now</h3>
                        <p class="white">Sign up for our mailing list to get latest updates and offers</p>
                        <form>
                            <input type="email" placeholder="Your Email">
                            <a href="#" class="biz-btn mar-top-15">Subscribe</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="footer-copyright">
        <div class="container">
            <div class="copyright-text text-center">
                <p class="mar-0">2024 Travelshop. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- footer ends -->
    
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- search popup -->
    {{-- @livewire('package-search') --}}

    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- whatsapp -->
  <div class="whats-float">
    <a href="whatsapp://send?text=Hi, Can i get more details?&phone=+971508381922"
    target="_blank">
        <i class="fab fa-whatsapp"></i><span>WhatsApp<br><small>+971 50 838 19 22 </small></span>
    </a>
  </div>
  
  <script>
    const searchIcon = document.querySelector('.mt_search');
    const searchModal = document.getElementById('search1');
    const closeButton = searchModal.querySelector('.close');

    searchIcon.addEventListener('click', function(event) {
        event.preventDefault(); 
        searchModal.style.display = 'flex'; // Show the modal
    });

    closeButton.addEventListener('click', function() {
        searchModal.style.display = 'none'; 
    });

    window.addEventListener('click', function(event) {
        if (event.target === searchModal) {
            searchModal.style.display = 'none';
        }
    });
</script>

    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/plugin.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>
    <script src="{{ asset('front/js/menu.js') }}"></script>
    <script src="{{ asset('front/js/custom-swiper2.js') }}"></script>
    <script src="{{ asset('front/js/custom-nav.js') }}"></script>
    <script src="{{ asset('front/js/custom-date.js') }}"></script>
    @livewireScripts
</body>
</html>