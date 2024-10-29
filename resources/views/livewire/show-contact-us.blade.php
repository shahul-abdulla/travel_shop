<main>
     <!-- Breadcrumb -->
     <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white">Contact Us</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a wire:navigate href="{{ route('home')}}" >Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- contact starts -->
    <section class="contact-main">
        <div class="container">
            <div class="contact-info mar-bottom-30">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <p>Office 722 Block B Business Village Port Saeed Deira - Dubai</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <p> +971 4 8769403</p>
                                <p> +971 50 8381922 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <p>mail@travelshop.ae</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="contact-map">
                <div class="row">
                    <div class="col-md-8">
                        <div id="contact-form1" class="contact-form">
                            <h3>Keep in Touch</h3>
                            <div id="contactform-error-msg"></div>
                            <form wire:submit.prevent="submitForm" id="contactform">
                                <div class="form-group">
                                    <input type="text" wire:model="first_name" class="form-control" id="fname" placeholder="First Name">
                                    @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" wire:model="last_name" class="form-control" id="lname" placeholder="Last Name">
                                    @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" wire:model="email" class="form-control" id="email" placeholder="Email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" wire:model="phone" class="form-control" id="phnumber" placeholder="Phone">
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="textarea">
                                    <textarea wire:model="comments" placeholder="Enter a message"></textarea>
                                    @error('comments') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="comment-btn text-right mar-top-15">
                                    <input type="submit" class="biz-btn" id="submit" value="Send Message">
                                </div>
                            
                                @if (session()->has('message'))
                                    <div class="alert alert-success mt-3">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            </form>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="map" style="height: 555px; width: 100%;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28867.222648536543!2d55.326804!3d25.257031000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d4c3e297591%3A0xa018702fbe4940e9!2sTravelshop%20(Arooha%20Leisure%20Tours%20%26%20Travels)!5e0!3m2!1sen!2sin!4v1729064163384!5m2!1sen!2sin" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> </iframe>

                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!-- contact Ends -->
    <script src="{{ asset('front/js/custom-nav.js') }}"></script>
    <script src="{{ asset('front/js/custom-date.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4JwWo5VPt9WyNp3Ne2uc2FMGEePHpqJ8&amp;callback=initMap"
        async defer></script>
    <script src="{{ asset('front/js/map.js') }}"></script>
</main>
